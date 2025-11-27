<x-layouts.app>
    <x-slot name="title">Edit Member</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Member</h5>
            <small class="text-muted float-end">Edit member details</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.members.update', $member) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="firm_id">Firm</label>
                    <select class="form-select" id="firm_id" name="firm_id" required>
                        <option value="">Select Firm</option>
                        @foreach($firms as $firm)
                            <option value="{{ $firm->id }}" {{ $member->firm_id == $firm->id ? 'selected' : '' }}>{{ $firm->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $member->first_name }}" required />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $member->last_name }}" required />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="position">Position</label>
                    <input type="text" class="form-control" id="position" name="position" value="{{ $member->position }}" />
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $member->email }}" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $member->phone }}" />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="photo_path">Photo</label>
                    <input class="form-control" type="file" id="photo_path" name="photo_path" />
                    @if($member->photo_path)
                        <div class="mt-2">
                            <img src="{{ asset('uploads/' . $member->photo_path) }}" alt="Current Photo" height="50">
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label" for="bio">Bio</label>
                    <textarea class="form-control" id="bio" name="bio" rows="3">{{ $member->bio }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="order">Order</label>
                    <input type="number" class="form-control" id="order" name="order" value="{{ $member->order }}" />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.members.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
