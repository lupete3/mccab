<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Statistic::create([
            'number' => 500,
            'label' => 'Dossiers Traités',
        ]);

        \App\Models\Statistic::create([
            'number' => 300,
            'label' => 'Clients Satisfaits',
        ]);

        \App\Models\Statistic::create([
            'number' => 25,
            'label' => 'Années d\'Expérience',
        ]);

        \App\Models\Statistic::create([
            'number' => 98,
            'label' => '% de Succès',
        ]);
    }
}
