<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('adresses')->insert([
            [
                'city' => 'Kinshasa',
                'address' => '37 boulevard du 30 Juin, Immeuble ITIMBIRI, 6ᵉ Etage App 6A, Commune de la Gombe',
                'phone' => '+243 996 996 910',
            ],
            [
                'city' => 'Sud-Kivu / Bukavu',
                'address' => '146, Av P.E Lumumba, Immeuble BAGU, 2ᵉ Etage, Commune d’Ibanda',
                'phone' => '+243 998 765 353',
            ],
        ]);
    }
}
