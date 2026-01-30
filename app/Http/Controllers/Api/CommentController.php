<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Article $article)
    {
        return response()->json(
            $article->comments()->latest()->get()
        );
    }

    public function store(Request $request, Article $article)
    {
        $validated = $request->validate([
            'body' => ['required', 'string', 'max:1000'],
        ]);

        $comment = Comment::create([
            'article_id'  => $article->id,
            'author_name' => '匿名',          
            'body'        => $validated['body'],
        ]);

        return response()->json($comment, 201);
    }
}
