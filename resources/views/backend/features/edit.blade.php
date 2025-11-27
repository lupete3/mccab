<x-layouts.app>
    <x-slot name="title">Edit Feature</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Feature</h5>
            <small class="text-muted float-end">Edit feature details</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.features.update', $feature) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $feature->title }}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="icon">Icon (FontAwesome Class)</label>
                    <input type="text" class="form-control" id="icon" name="icon" value="{{ $feature->icon }}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5" required>{{ $feature->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="order">Order</label>
                    <input type="number" class="form-control" id="order" name="order" value="{{ $feature->order }}" />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.features.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
