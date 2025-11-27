<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeamMember::create([
            'name' => 'MURHWA MUSHAGALUSA Alain',
            'title' => 'Fondateur & Associé Principal',
            'specialty' => 'Droit des Affaires',
            'photo' => 'https://picsum.photos/seed/member1/300/300',
            'twitter_url' => '#',
            'facebook_url' => '#',
            'linkedin_url' => '#',
        ]);

        TeamMember::create([
            'name' => 'NZIRIRANE CHERUBALA Gulain',
            'title' => 'Associé Fondateur',
            'specialty' => 'Expert en Droit Fiscal',
            'photo' => 'https://picsum.photos/seed/member2/300/300',
            'twitter_url' => '#',
            'facebook_url' => '#',
            'linkedin_url' => '#',
        ]);

        TeamMember::create([
            'name' => 'BORA FATAKI Adoplhe',
            'title' => 'Associé Senior',
            'specialty' => 'Droit Pénal des Affaires',
            'photo' => 'https://picsum.photos/seed/member3/300/300',
            'twitter_url' => '#',
            'facebook_url' => '#',
            'linkedin_url' => '#',
        ]);

        TeamMember::create([
            'name' => 'HOABA SUNGURA Marc',
            'title' => 'Avocat Associé',
            'specialty' => 'Droit Social & Travail',
            'photo' => 'https://picsum.photos/seed/member4/300/300',
            'twitter_url' => '#',
            'facebook_url' => '#',
            'linkedin_url' => '#',
        ]);

        TeamMember::create([
            'name' => 'MUYUMBA KAYUBA Adoplhe',
            'title' => 'Avocat Collaborateur',
            'specialty' => 'Droit Immobilier',
            'photo' => 'https://picsum.photos/seed/member5/300/300',
            'twitter_url' => '#',
            'facebook_url' => '#',
            'linkedin_url' => '#',
        ]);
    }
}