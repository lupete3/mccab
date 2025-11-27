<x-layouts.app>
    <x-slot name="title">Edit Testimonial</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Testimonial</h5>
            <small class="text-muted float-end">Edit testimonial details</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="author_name">Author Name</label>
                    <input type="text" class="form-control" id="author_name" name="author_name" value="{{ $testimonial->author_name }}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="author_position">Author Position</label>
                    <input type="text" class="form-control" id="author_position" name="author_position" value="{{ $testimonial->author_position }}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="author_avatar_icon">Author Avatar</label>
                    <input class="form-control" type="file" id="author_avatar_icon" name="author_avatar_icon" />
                    @if($testimonial->author_avatar_icon)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $testimonial->author_avatar_icon) }}" alt="Current Avatar" width="100">
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label" for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required>{{ $testimonial->content }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
