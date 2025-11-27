<x-layouts.app>
    <x-slot name="title">Add Feature</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add Feature</h5>
            <small class="text-muted float-end">Add a new feature</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.features.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Feature Title" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="icon">Icon (FontAwesome Class)</label>
                    <input type="text" class="form-control" id="icon" name="icon" placeholder="e.g. fas fa-check" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="order">Order</label>
                    <input type="number" class="form-control" id="order" name="order" value="0" />
                </div>
                <button type="submit" class="btn btn-primary">Add Feature</button>
                <a href="{{ route('admin.features.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
