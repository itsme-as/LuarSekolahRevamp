<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Classe;
use App\Models\Faq;
use App\Models\Partnership;
use App\Models\Program;
use App\Models\Tag;
use App\Models\Testimoni;
// use App\Models\Account;
use App\Models\User;
// use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->take(3)->get();

        $blogs = Blog::all();

        $categories = Category::all();

        $classes = Classe::all();

        $partnerships = Partnership::all();

        $programs = Program::get();

        $tags = Tag::all();

        $users = User::all();

        $faqs = Faq::all();

        $testimonies = Testimoni::all();

        return view('welcome', compact('banners','blogs','categories', 'classes','partnerships','programs','tags','users', 'faqs','testimonies'));
    }
}