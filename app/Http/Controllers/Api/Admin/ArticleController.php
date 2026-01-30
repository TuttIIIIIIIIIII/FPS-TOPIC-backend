<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * 管理者用 記事一覧（公開・非公開すべて）
     */
    public function index(Request $request)
    {
        $perPage = $request->integer('per_page', 10);

        $game        = $request->query('game');         // valorant / apex / cod / all / null
        $type        = $request->query('type');         // update / esports / all / null
        $isPublished = $request->query('is_published'); // '1' / '0' / 'all' / null

        $query = Article::query()
            ->orderByDesc('published_at')
            ->orderByDesc('created_at');

        // ゲーム絞り込み
        if ($game && $game !== 'all') {
            $query->where('game', $game);
        }

        // タイプ絞り込み
        if ($type && $type !== 'all') {
            $query->where('type', $type);
        }

        // 公開 / 非公開 絞り込み
        if ($isPublished === '1' || $isPublished === '0') {
            $query->where('is_published', $isPublished === '1');
        }

        return response()->json(
            $query->paginate($perPage)
        );
    }

    /**
     * 記事新規作成
     */
    public function store(Request $request)
    {
        $data = $this->validatedData($request);

        $article = Article::create($data);

        return response()->json($article, 201);
    }

    /**
     * 記事更新
     */
    public function update(Request $request, Article $article)
    {
        $data = $this->validatedData($request);

        $article->update($data);

        return response()->json($article);
    }

    /**
     * バリデーション共通処理
     */
    private function validatedData(Request $request): array
    {
        $data = $request->validate([
            'title'         => ['required', 'string', 'max:255'],
            'body'          => ['nullable', 'string'], // Markdown でも普通のテキストでもOK
            'game'          => ['nullable', 'string'],
            'type'          => ['required', 'string'], // 'update' or 'esports'
            'thumbnail_url' => ['nullable', 'string', 'max:255'],
            'source_name'   => ['nullable', 'string', 'max:255'],
            'is_published'  => ['required', 'boolean'],
            'published_at'  => ['nullable', 'date'],
        ]);



        return $data;
    }
}
