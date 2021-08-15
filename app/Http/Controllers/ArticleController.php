<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('show', compact('articles'));
    }

    public function showForm() {
        return view('createArticle');
    }

    public function store(Request $request) {
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author
        ]);
        return view('home');
    }

    public function edit($id) {
        // $article = Article::where('id', '=', $id)->first();
        $article = Article::find($id);
        return view('editArticle', compact('article'));
    }

    public function update(Request $request, $id) {
        $article = Article::find($id);
        $article->update([
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
        ]);
        return view('home');
    }

    public function delete($id) {
        Article::destroy($id);
        
        // $article = Article::find($id);
        // $article->delete();
        return view('home');
    }

    public function showDetails($id) {
        $article = Article::find($id);
        return view('details', compact('article'));
    }
}
