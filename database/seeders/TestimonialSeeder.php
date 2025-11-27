<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'author_name' => 'Jean-Pierre M.',
            'author_position' => 'CEO, Tech Solutions Africa',
            'author_avatar_icon' => 'fas fa-user',
            'content' => '"Le Cabinet Murhwa & Cherubala Conseil a été un partenaire stratégique dans notre expansion internationale. Leur expertise en droit des affaires et leur professionnalisme ont été déterminants pour le succès de nos opérations."',
        ]);

        Testimonial::create([
            'author_name' => 'Sophie N.',
            'author_position' => 'Directrice Financière, Groupe Industries',
            'author_avatar_icon' => 'fas fa-user',
            'content' => '"Grâce à leur accompagnement juridique, nous avons pu résoudre un litige complexe qui menaçait notre entreprise. Leur réactivité et leur connaissance du droit sont exceptionnelles."',
        ]);

        Testimonial::create([
            'author_name' => 'Robert K.',
            'author_position' => 'Entrepreneur, Startup Innov',
            'author_avatar_icon' => 'fas fa-user',
            'content' => '"Un cabinet d\'avocats d\'excellence qui combine expertise juridique et approche humaine. Je recommande vivement leurs services pour toute entreprise cherchant un conseil de confiance."',
        ]);
    }
}
