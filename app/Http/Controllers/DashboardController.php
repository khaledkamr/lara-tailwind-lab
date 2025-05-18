<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'postsCount' => Post::count(),
            'categoriesCount' => Category::count(),
            'tagsCount' => Tag::count(),
            'usersCount' => User::count(),
            'recentPosts' => Post::with(['user'])
                ->latest()
                ->take(5)
                ->get(),
            'notifications' => auth()->user()->notifications()
                ->latest()
                ->take(5)
                ->get()
        ]);
    }
}
