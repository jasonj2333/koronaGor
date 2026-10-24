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
            ['slug' => 'babia', 'nazwa' => 'Babia Góra', 'pasmo'=> 'Beskid Żywiecki', 'wysokosc'=>1725],
            ['slug' => 'sniezka', 'nazwa' => 'Śnieżka', 'pasmo'=> 'Karkonosze', 'wysokosc'=>1603],
            ['slug' => 'lysica', 'nazwa' => 'Łysica', 'pasmo'=> 'Góry Świętokrzyskie', 'wysokosc'=>614],
        ];
    }
}