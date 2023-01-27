<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index_article()
    {
        return view('article');
    }
    
    public function create(Request $request)
    {
        $title = $request->title;
        $prefecture = $requrest->prefecture;
        $content = $request->content;
        
        Article::create([
            'title' => $title,
            'prefecture' => $prefecture,
            'content' => $content,
        ]);
        
        return redirect('/prefecture/article');
    }
    
    public function index_list()
    {
        return view('list');
    }
    
    public function index_edit()
    {
        return view('articleEdit');
    }
}
