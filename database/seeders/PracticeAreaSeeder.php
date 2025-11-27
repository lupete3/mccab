<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PracticeAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\PracticeArea::create([
            'icon' => 'fas fa-briefcase',
            'title' => 'Droit des Affaires',
            'description' => 'Conseil stratégique pour les entreprises, fusions, acquisitions et restructurations corporatives.',
            'link' => '#',
        ]);

        \App\Models\PracticeArea::create([
            'icon' => 'fas fa-file-contract',
            'title' => 'Contrats & Litiges',
            'description' => 'Rédaction, négociation et contentieux contractuel pour protéger vos intérêts commerciaux.',
            'link' => '#',
        ]);

        \App\Models\PracticeArea::create([
            'icon' => 'fas fa-coins',
            'title' => 'Droit Fiscal',
            'description' => 'Optimisation fiscale, conformité réglementaire et défense en cas de contrôle fiscal.',
            'link' => '#',
        ]);

        \App\Models\PracticeArea::create([
            'icon' => 'fas fa-gavel',
            'title' => 'Droit Pénal',
            'description' => 'Défense pénale des entreprises et dirigeants dans les procédures complexes et sensibles.',
            'link' => '#',
        ]);

        \App\Models\PracticeArea::create([
            'icon' => 'fas fa-users',
            'title' => 'Droit Social',
            'description' => 'Gestion des relations de travail, conseils en droit du travail et contentieux social.',
            'link' => '#',
        ]);

        \App\Models\PracticeArea::create([
            'icon' => 'fas fa-building',
            'title' => 'Droit Immobilier',
            'description' => 'Transactions immobilières, due diligence et régularisation foncière.',
            'link' => '#',
        ]);
    }
}
