<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->integer('per_page', 10);


        $game = $request->query('game');  
        $type = $request->query('type');   

        $query = Article::query()
            ->where('is_published', true)
            ->orderByDesc('published_at')
            ->orderByDesc('created_at');

        if ($game && $game !== 'all') {
            $query->where('game', $game);
        }

        if ($type && $type !== 'all') {
            $query->where('type', $type);
        }

        return response()->json(
            $query->paginate($perPage)
        );
    }

    public function show(Article $article)
    {
        abort_if(! $article->is_published, 404);

        return response()->json($article);
    }
}

