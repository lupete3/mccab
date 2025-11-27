<x-layouts.app>
    <x-slot name="title">Add Setting</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add Setting</h5>
            <small class="text-muted float-end">Add a new setting</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.settings.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="key">Key</label>
                    <input type="text" class="form-control" id="key" name="key" placeholder="Setting Key" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="value">Value</label>
                    <textarea class="form-control" id="value" name="value" rows="3" placeholder="Setting Value"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Setting</button>
                <a href="{{ route('admin.settings.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
