<x-layouts.app>
    <x-slot name="title">Add Achievement</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add Achievement</h5>
            <small class="text-muted float-end">Add a new achievement</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.achievements.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Achievement Title" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="partner_id">Partner</label>
                    <select class="form-select" id="partner_id" name="partner_id" required>
                        <option value="">Select Partner</option>
                        @foreach($partners as $partner)
                            <option value="{{ $partner->id }}">{{ $partner->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="location">Location</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Location" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="image">Image</label>
                    <input class="form-control" type="file" id="image" name="image" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Achievement</button>
                <a href="{{ route('admin.achievements.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
