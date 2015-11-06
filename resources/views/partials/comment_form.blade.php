<form action="{{ $action }}" method="POST">
    {!! csrf_field() !!}

    <div class="form-group">
        <label for="user_name">Name</label>
        <input class="form-control" name="user_name" type="text">
    </div>

    <div class="form-group">
        <label for="body">Comment</label>
        <textarea class="form-control" name="body"></textarea>
    </div>

    <div class="form-group">
        <button class="btn btn-default" type="submit">Reply</button>
    </div>
</form>