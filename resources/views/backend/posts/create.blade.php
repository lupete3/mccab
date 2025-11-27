<x-layouts.app>
    <x-slot name="title">Create Post</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Create Post</h5>
            <small class="text-muted float-end">Create a new blog post</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Post Title" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="category">Category</label>
                    <input type="text" class="form-control" id="category" name="category" placeholder="Category" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="status">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="published_at">Published At</label>
                    <input type="datetime-local" class="form-control" id="published_at" name="published_at" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="image">Image</label>
                    <input class="form-control" type="file" id="image" name="image" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="10" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
