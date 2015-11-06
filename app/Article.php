<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Slynova\Commentable\Traits\Commentable;

class Article extends Model
{
    use Commentable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'body'];
}
