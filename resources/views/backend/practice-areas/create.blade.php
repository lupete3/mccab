<x-layouts.app>
    <x-slot name="title">Add Practice Area</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add Practice Area</h5>
            <small class="text-muted float-end">Add a new practice area</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.practice-areas.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="e.g. Corporate Law" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="icon">Icon (FontAwesome Class)</label>
                    <input type="text" class="form-control" id="icon" name="icon" placeholder="e.g. fas fa-briefcase" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="link">Link</label>
                    <input type="url" class="form-control" id="link" name="link" placeholder="https://example.com/practice-area" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Practice Area</button>
                <a href="{{ route('admin.practice-areas.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
