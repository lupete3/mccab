<x-layouts.app>
    <x-slot name="title">Edit Partner</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Partner</h5>
            <small class="text-muted float-end">Edit partner details</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.partners.update', $partner) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $partner->name }}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="logo">Logo</label>
                    <input class="form-control" type="file" id="logo" name="logo" />
                    @if($partner->logo)
                        <div class="mt-2">
                            <img src="{{ asset('uploads/' . $partner->logo) }}" alt="Current Logo" height="50">
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label" for="website_url">Website URL</label>
                    <input type="url" class="form-control" id="website_url" name="website_url" value="{{ $partner->website_url }}" />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.partners.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
