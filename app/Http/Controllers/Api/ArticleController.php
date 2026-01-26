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

        // クエリパラメータを取得
        $game = $request->query('game');   // valorant / apex / cod / all / null
        $type = $request->query('type');   // update / esports / all / null

        $query = Article::query()
            ->where('is_published', true)
            ->orderByDesc('published_at')
            ->orderByDesc('created_at');

        // ① ゲームで絞り込み
        if ($game && $game !== 'all') {
            $query->where('game', $game);
        }

        // ② 記事タイプで絞り込み
        if ($type && $type !== 'all') {
            $query->where('type', $type);
        }

        return response()->json(
            $query->paginate($perPage)
        );
    }
}
