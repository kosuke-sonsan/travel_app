<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index_article()
    {
        return view('article');
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
