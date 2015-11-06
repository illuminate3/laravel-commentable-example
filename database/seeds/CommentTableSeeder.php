<?php

use App\Article;
use Illuminate\Database\Seeder;
use Slynova\Commentable\Models\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::truncate();

        $article = Article::first();

        $comment1 = $article->comments()->create(['body' => 'Is it really working?', 'user_name' => 'John Doe']);
        $comment2 = $article->comments()->create(['body' => 'Wow this is awesome!', 'user_name' => 'Jane Doe']);

        $comment3 = Comment::create(['body' => "Yes, and it's easy to use", 'user_name' => 'Romain Lanz']);
        $comment3->makeChildOf($comment1);

        $comment4 = Comment::create(['body' => 'Thanks! :)', 'user_name' => 'Romain Lanz']);
        $comment4->makeChildOf($comment2);

        $comment5 = Comment::create(['body' => "You're a little bit psycho no?", 'user_name' => 'Jane Doe']);
        $comment5->makeChildOf($comment4);
    }
}
