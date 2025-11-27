<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin Demo',
                'password' => bcrypt('password'),
            ]
        );

        Post::create([
            'title' => 'Nouvelle Loi sur la Protection des Investissements Étrangers en RD Congo',
            'content' => 'Notre cabinet analyse les implications de la nouvelle législation sur la protection des investissements étrangers et son impact sur les entreprises internationales opérant en RD Congo.',
            'category' => 'À la Une',
            'image' => 'https://picsum.photos/seed/featured-law/600/400',
            'user_id' => $user->id,
            'published_at' => \Carbon\Carbon::parse('2024-12-20'),
        ]);

        Post::create([
            'title' => 'Conférence sur le Droit Numérique Africain',
            'content' => 'Notre cabinet participe à la conférence internationale sur les défis juridiques du numérique en Afrique, organisée à Kinshasa.',
            'category' => 'Événement',
            'image' => 'https://picsum.photos/seed/law-conference/400/250',
            'user_id' => $user->id,
            'published_at' => \Carbon\Carbon::parse('2024-12-15'),
        ]);

        Post::create([
            'title' => 'Les Nouvelles Régulations sur les Fusions et Acquisitions',
            'content' => 'Analyse approfondie des dernières régulations affectant les opérations de M&A dans la sous-région et leurs conséquences pratiques.',
            'category' => 'Analyse',
            'image' => 'https://picsum.photos/seed/corporate-law/400/250',
            'user_id' => $user->id,
            'published_at' => \Carbon\Carbon::parse('2024-12-10'),
        ]);

        Post::create([
            'title' => 'Réforme du Code du Travail : Ce Qui Change',
            'content' => 'Guide pratique pour les entreprises sur les nouvelles dispositions du code du travail et leur mise en conformité.',
            'category' => 'Publication',
            'image' => 'https://picsum.photos/seed/labor-law/400/250',
            'user_id' => $user->id,
            'published_at' => \Carbon\Carbon::parse('2024-12-05'),
        ]);

        Post::create([
            'title' => 'L\'Intelligence Artificielle au Service du Droit',
            'content' => 'Comment notre cabinet intègre les nouvelles technologies pour améliorer l\'efficacité de nos services juridiques.',
            'category' => 'Innovation',
            'image' => 'https://picsum.photos/seed/legal-tech/400/250',
            'user_id' => $user->id,
            'published_at' => \Carbon\Carbon::parse('2024-11-28'),
        ]);

        Post::create([
            'title' => 'Arbitrage International : Nouvelle Victoire Juridique',
            'content' => 'Notre cabinet remporte une victoire significative dans une affaire d\'arbitrage international impliquant plusieurs pays africains.',
            'category' => 'International',
            'image' => 'https://picsum.photos/seed/international-law/400/250',
            'user_id' => $user->id,
            'published_at' => \Carbon\Carbon::parse('2024-11-22'),
        ]);

        Post::create([
            'title' => 'Guide de Conformité Anti-Corruption 2024',
            'content' => 'Nouveau guide pratique pour aider les entreprises à se conformer aux réglementations anti-corruption en vigueur.',
            'category' => 'Conformité',
            'image' => 'https://picsum.photos/seed/compliance/400/250',
            'user_id' => $user->id,
            'published_at' => \Carbon\Carbon::parse('2024-11-18'),
        ]);
    }
}