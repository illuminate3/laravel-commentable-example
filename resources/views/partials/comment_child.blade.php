<div class="panel panel-default col-md-offset-{{ $comment->depth }}">
    <div class="panel-body">
        <small><b>Replied to {{ $comment->parent->user_name }}</b></small>

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

