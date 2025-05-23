<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;

// CMS
use App\Models\Page;
use OpenGraph;
use Spatie\SchemaOrg\Schema;

class ArticleController extends Controller
{

    public function index()
    {
        $page = Page::whereId(2)->first();
        $articles = Article::where('status', 1)->orderBy('posted_at', 'DESC')->get();
        return view('front.article.index', ['page' => $page, 'articles' => $articles]);
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->first();

        $previousArticles = Article::where('posted_at', '<', $article->posted_at)
            ->orderBy('posted_at', 'desc')
            ->take(3)
            ->get();

        $page = Page::whereId(2)->first();

        return view('front.article.show', [
            'page' => $page,
            'article' => $article,
            'previousArticles' => $previousArticles
        ]);
    }
}
