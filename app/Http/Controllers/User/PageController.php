<?php

namespace App\Http\Controllers\User;

use App\Models\Articles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index(){

        $articles = Articles::all();

        return view('user.pages.index', compact('articles'));
    }

    public function show($id){

        $article = Articles::findOrFail($id);

	    return view('user.pages.show', compact('article'));

	}
}