<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Article;


class PublicController extends Controller
{
    public function homepage()
    {
        // Ultimi 4 articoli per la homepage
        $articles = Article::with(['category', 'user'])
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        return view('welcome', compact('articles'));
    }
}
