<x-layouts.app>
    <x-slot name="title">Edit Achievement</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Achievement</h5>
            <small class="text-muted float-end">Edit achievement details</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.achievements.update', $achievement) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $achievement->title }}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="partner_id">Partner</label>
                    <select class="form-select" id="partner_id" name="partner_id" required>
                        <option value="">Select Partner</option>
                        @foreach($partners as $partner)
                            <option value="{{ $partner->id }}" {{ $achievement->partner_id == $partner->id ? 'selected' : '' }}>{{ $partner->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ $achievement->date }}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="location">Location</label>
                    <input type="text" class="form-control" id="location" name="location" value="{{ $achievement->location }}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="image">Image</label>
                    <input class="form-control" type="file" id="image" name="image" />
                    @if($achievement->image)
                        <div class="mt-2">
                            <img src="{{ asset('uploads/' . $achievement->image) }}" alt="Current Image" height="100">
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5" required>{{ $achievement->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.achievements.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
