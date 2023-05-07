<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Auteur;
use App\Models\Article;
use Illuminate\Support\Facades\Hash;

class ArticleController extends Controller
{
    //
    public function listes()
    {

        $pagines = Article::where('statut', 1)->orderBy('datecreation', 'desc')->paginate(30);
        
        return view('articles.home',compact('pagines'));
    }

    public function retail($id)
    {
        $article = Article::find($id);
    
        return view('articles.retail', compact('article'));
    }
}
