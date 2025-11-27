<x-layouts.app>
    <x-slot name="title">Add Testimonial</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add Testimonial</h5>
            <small class="text-muted float-end">Add a new testimonial</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="author_name">Author Name</label>
                    <input type="text" class="form-control" id="author_name" name="author_name" placeholder="Full Name" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="author_position">Author Position</label>
                    <input type="text" class="form-control" id="author_position" name="author_position" placeholder="e.g. CEO, Company Inc." required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="author_avatar_icon">Author Avatar</label>
                    <input class="form-control" type="file" id="author_avatar_icon" name="author_avatar_icon" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Testimonial</button>
                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
