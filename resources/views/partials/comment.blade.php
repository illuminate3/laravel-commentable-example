<div class="panel panel-default">
    <div class="panel-body">
        <p>{{ $comment->body }}</p>

        <small><b>{{ $comment->user_name }}</b> - {{ $comment->created_at->diffForHumans() }}</small>
    </div>
    <div class="panel-footer">
        <a class="btn btn-default reply-link" data-url="{{ route('comments.reply', [$comment->id]) }}">Reply</a>
    </div>
</div>

@if($comment->hasChildren())
    @foreach($comment->getChildren() as $child)
        @include('partials.comment_child', ['comment' => $child])
    @endforeach
@endif

