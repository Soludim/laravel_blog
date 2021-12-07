<div class="modal fade" id="post_modal" tabindex="-1" role="dialog" aria-labelledby="post_modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Your Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('ups.store') }}" enctype="multipart/form-data" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Heading</label>
                        <input type="text" required class="form-control" name="title" id="title" aria-describedby="titleHelp" placeholder="Enter Title">
                    </div>
                    <textarea rows="3" name="body"></textarea> 
                    <div class="form-group">
                        <label for="body">Post Body</label>
                        @trix(\App\Post::class, 'content')
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" name="image" id="image" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>