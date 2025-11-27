<x-layouts.app>
    <x-slot name="title">Add Member</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add Member</h5>
            <small class="text-muted float-end">Add a new firm member</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="firm_id">Firm</label>
                    <select class="form-select" id="firm_id" name="firm_id" required>
                        <option value="">Select Firm</option>
                        @foreach($firms as $firm)
                            <option value="{{ $firm->id }}">{{ $firm->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="position">Position</label>
                    <input type="text" class="form-control" id="position" name="position" placeholder="e.g. Senior Partner" />
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="photo_path">Photo</label>
                    <input class="form-control" type="file" id="photo_path" name="photo_path" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="bio">Bio</label>
                    <textarea class="form-control" id="bio" name="bio" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="order">Order</label>
                    <input type="number" class="form-control" id="order" name="order" value="0" />
                </div>
                <button type="submit" class="btn btn-primary">Add Member</button>
                <a href="{{ route('admin.members.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
