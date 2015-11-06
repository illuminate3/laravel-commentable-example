@extends('layout')

@section('content')
    <div class="page-header">
        <h1>{{ $article->title }}</h1>
    </div>

    <div class="panel">{{ $article->body }}</div>

    <hr>

    <h3>New comment</h3>

    @include('partials.comment_form', ['action' => route('articles.comment', [$article->id])])

    <h2>Comments</h2>
    @if($article->comments()->count() > 0)
        @foreach($article->comments as $comment)
            @include('partials.comment', ['comment' => $comment])
        @endforeach
    @else
        <p>Pas de commentaire</p>
    @endif
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    $('.reply-link').click(createForm);

    function createForm(e)
    {
        e.preventDefault();

        var form = [];
        form[form.length] = '<form class="reply-form" action="' + $(this).data('url')
 + '" method="post">';
        form[form.length] = '   {!! csrf_field() !!}';
        form[form.length] = '   <div class="form-group">';
        form[form.length] = '       <label for="user_name">Name</label>';
        form[form.length] = '       <input class="form-control" name="user_name" type="text">';
        form[form.length] = '   </div>';
        form[form.length] = '   <div class="form-group">';
        form[form.length] = '       <label for="body">Comment</label>';
        form[form.length] = '       <textarea class="form-control" name="body"></textarea>';
        form[form.length] = '   </div>';
        form[form.length] = '   <div class="form-group">';
        form[form.length] = '       <button class="btn btn-default" type="submit">Reply</button>';
        form[form.length] = '   </div>';
        form[form.length] = '</form>';

        $(this).replaceWith(form.join(''));
    }
});
</script>
@endsection