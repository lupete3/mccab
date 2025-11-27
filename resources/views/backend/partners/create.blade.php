<x-layouts.app>
    <x-slot name="title">Add Partner</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add Partner</h5>
            <small class="text-muted float-end">Add a new partner</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Partner Name" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="logo">Logo</label>
                    <input class="form-control" type="file" id="logo" name="logo" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="website_url">Website URL</label>
                    <input type="url" class="form-control" id="website_url" name="website_url" placeholder="https://example.com" />
                </div>
                <button type="submit" class="btn btn-primary">Add Partner</button>
                <a href="{{ route('admin.partners.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
