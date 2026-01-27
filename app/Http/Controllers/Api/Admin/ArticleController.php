<?php
namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        $data = $this->validatedData($request);

        $article = Article::create($data);

        return response()->json($article, 201);
    }

    public function update(Request $request, Article $article)
    {
        $data = $this->validatedData($request);

        $article->update($data);

        return response()->json($article);
    }

    private function validatedData(Request $request): array
    {
        return $request->validate([
            'title'         => ['required', 'string', 'max:255'],
            'body'          => ['required', 'string'], // Markdown でも普通のテキストでもOK
            'game'          => ['nullable', 'string'],
            'type'          => ['required', 'string'], // 'update' or 'esports'
            'thumbnail_url' => ['nullable', 'string', 'max:255'],
            'source_name'   => ['nullable', 'string', 'max:255'],
            'is_published'  => ['required', 'boolean'],
            'published_at'  => ['nullable', 'date'],
        ]);
    }
}
