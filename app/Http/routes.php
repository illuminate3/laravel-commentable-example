<?php

use App\Article;
use Illuminate\Http\Request;
use Slynova\Commentable\Models\Comment;

get('/', function () {
    return redirect()->route('articles.show', [1]);;
});

get('{id}', function($id) {
	$article = Article::findOrFail($id);

	return view('articles.show', compact('article'));
})->name('articles.show');

post('{id}/comments', function($id, Request $request) {
    $article = Article::findOrFail($id);

    // Correct way to do it.
    // $article->comments()->create($request->all());
    $comment = new Comment;
    $comment->user_name = $request->input('user_name');
    $comment->body = $request->input('body');

    $article->comments()->save($comment);

    return redirect()->route('articles.show', [$article->id]);
})->name('articles.comment');

post('comments/{id}/reply', function($id, Request $request)
{
    $comment = Comment::findOrFail($id);

    // Correct way to do it.
    // $newComment = Comment::create($request->all());
    $newComment = new Comment;
    $newComment->user_name = $request->input('user_name');
    $newComment->body = $request->input('body');
    $newComment->save();

    $newComment->makeChildOf($comment);

    return redirect()->back();
})->name('comments.reply');
