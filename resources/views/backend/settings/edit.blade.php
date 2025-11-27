<x-layouts.app>
    <x-slot name="title">Edit Setting</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Setting</h5>
            <small class="text-muted float-end">Edit setting details</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.settings.update', $setting) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="key">Key</label>
                    <input type="text" class="form-control" id="key" name="key" value="{{ $setting->key }}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="value">Value</label>
                    <textarea class="form-control" id="value" name="value" rows="3">{{ $setting->value }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.settings.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
