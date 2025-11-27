<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'title' => 'Conseil Juridique',
                'icon' => 'fa-balance-scale',
                'description' => 'Accompagnement personnalisé pour entreprises, institutions et particuliers.',
            ],
            [
                'title' => 'Assistance en Justice',
                'icon' => 'fa-gavel',
                'description' => 'Représentation devant toutes juridictions en RDC.',
            ],
            [
                'title' => 'Droit des Affaires',
                'icon' => 'fa-briefcase',
                'description' => 'Contrats, litiges commerciaux, gouvernance et conformité.',
            ],
            [
                'title' => 'Droit Civil et Immobilier',
                'icon' => 'fa-home',
                'description' => 'Gestion de conflits civils, successions et propriétés immobilières.',
            ],
            [
                'title' => 'Droit Pénal',
                'icon' => 'fa-shield',
                'description' => 'Défense pénale, droits fondamentaux et assistance.',
            ],
            [
                'title' => 'Fiscalité',
                'icon' => 'fa-money',
                'description' => 'Planification fiscale, litiges & optimisation.',
            ],
        ]);
    }
}


