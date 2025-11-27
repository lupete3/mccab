<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LawyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lawyers')->insert([
            [
                'name' => 'MURHWA MUSHAGALUSA Alain',
                'position' => 'Associé',
                'speciality' => 'Droit des Affaires, Litiges',
                'phone' => '+243 996 996 910',
                'email' => 'alain.murhwa@example.com',
                'photo' => 'fas fa-user-tie',
            ],
            [
                'name' => 'NZIRIRANE CHERUBALA Gulain',
                'position' => 'Associé',
                'speciality' => 'Droit Civil, Immobilier',
                'phone' => '+243 998 765 353',
                'email' => 'gulain.nzirirane@example.com',
                'photo' => 'fas fa-user-tie',
            ],
            [
                'name' => 'BORA FATAKI Adoplhe',
                'position' => 'Conseiller',
                'speciality' => 'Droit du Travail, Fiscalité',
                'phone' => '+243 828 503 002',
                'email' => 'adolphe.bora@example.com',
                'photo' => 'fas fa-user-tie',
            ],
            [
                'name' => 'HOABA SUNGURA Marc',
                'position' => 'Conseiller Juridique',
                'speciality' => 'Droit Pénal',
                'phone' => '+243 828 503 003',
                'email' => 'marc.hoaba@example.com',
                'photo' => 'fas fa-user-tie',
            ],
            [
                'name' => 'MUYUMBA KAYUBA Adoplhe',
                'position' => 'Conseiller Juridique',
                'speciality' => 'Droit Public & Gouvernance',
                'phone' => '+243 828 503 004',
                'email' => 'adolphe.muyumba@example.com',
                'photo' => 'fas fa-user-tie',
            ],
        ]);
    }
}



