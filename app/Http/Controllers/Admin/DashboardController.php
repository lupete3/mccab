<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\Partner;
use App\Models\Post;
use App\Models\PracticeArea;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $postsCount = Post::count();
        $teamMembersCount = TeamMember::count();
        $messagesCount = ContactMessage::count();
        $partnersCount = Partner::count();
        $testimonialsCount = Testimonial::count();
        $practiceAreasCount = PracticeArea::count();
        $recentMessages = ContactMessage::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'postsCount',
            'teamMembersCount',
            'messagesCount',
            'partnersCount',
            'testimonialsCount',
            'practiceAreasCount',
            'recentMessages'
        ));
    }
}
