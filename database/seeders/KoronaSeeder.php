<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pasmo;
use App\Models\Szczyt;
use Illuminate\Support\Str;

class KoronaSeeder extends Seeder
{


    public function run(): void
    {
        $wiersze = require database_path('seeders/data/korona.php');

        foreach($wiersze as $wiersz){
            $pasmo = Pasmo::query()->firstOrCreate(
                ['slug' => Str::slug($wiersz['pasmo'])],
                ['nazwa' => $wiersz['pasmo']]
            );

            Szczyt::query()->updateOrCreate(
                ['slug' => Str::slug($wiersz['nazwa'])],
                [
                    'pasmo_id' => $pasmo->id,
                    'nazwa' => $wiersz['nazwa'],
                    'wysokosc' => $wiersz['wysokosc'],
                ]
            );
        }
    }
}
