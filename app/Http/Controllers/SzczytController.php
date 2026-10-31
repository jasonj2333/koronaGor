<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SzczytController extends Controller
{
    public function index()
    {
        $szczyty = $this->listaSzczytow();

        return view('szczyty.index', ['szczyty' => $szczyty]);
    }

    public function show(string $slug)
    {
        $znaleziony = null;
        $szczyty = $this->listaSzczytow();
        foreach($szczyty as $szczyt){
            if($szczyt['slug'] === $slug){
                $znaleziony = $szczyt;
                break;
            }
        }

        if($znaleziony === null){
            abort(404);
        }

        return view('szczyty.show', ['szczyt' => $znaleziony]);
    }

    private function listaSzczytow() : array
    {
        return [
            ['slug' => 'rysy', 'nazwa' => 'Rysy', 'pasmo'=> 'Tatry', 'wysokosc'=>2499],
            ['slug' => 'babia-gora', 'nazwa' => 'Babia Góra', 'pasmo'=> 'Beskid Żywiecki', 'wysokosc'=>1725],
            ['slug' => 'sniezka', 'nazwa' => 'Śnieżka', 'pasmo'=> 'Karkonosze', 'wysokosc'=>1603],
            ['slug' => 'lysica', 'nazwa' => 'Łysica', 'pasmo'=> 'Góry Świętokrzyskie', 'wysokosc'=>614],
        ];
    }

    public function zapiszPlan(Request $request){
        $dane = $request->validate([
            'slug' => ['required', 'string'],
            'data' => ['required', 'date', 'after_or_equal:today'],
            'notatka' => ['nullable', 'string', 'max:200'],
        ], [
            'data.required' => "Podaj datę wyjścia.",
            'data.after_or_equal' => 'Plan dotyczy dzisiaj albo późniejszego dnia',
        ]);

        $dozwolone = collect($this->listaSzczytow())->pluck('slug');
        if(! $dozwolone->contains($dane['slug'])){
            return back()->withInput()->withErrors(['slug' => 'Wybierz szczyt z listy']);
        }

        $plany = session('plany', []);
        $plany[] = $dane;
        session(['plany' => $plany]);

        return redirect()->route('szczyty.index')->with('status', 'Plan zapisany do sesji');
    }

    public function skladnia()
    {
        return view('skladnia', [
            'szczyty' => $this->listaSzczytow(),
        ]);
    }
}