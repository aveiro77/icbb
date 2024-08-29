<?php

namespace App\Http\Controllers\Front;
use App\Models\Category;
use App\Models\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $all = Article::with('category')->where('status','1')->latest()->get();
        $latest_posts = $all->where('status','1')->take(5);
        $news = $all->where('category_id',1)->take(5); // berita & kegiatan
        $articles = $all->where('category_id',2)->take(9); // artikel

        return view('front.home.index', [
            'latest_posts' => $latest_posts,
            'news' => $news,
            'articles' => $articles,
            'categories' => Category::all()
        ]);
    }
}
