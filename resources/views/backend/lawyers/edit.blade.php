<x-layouts.app>
    <x-slot name="title">Edit Lawyer</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Lawyer</h5>
            <small class="text-muted float-end">Edit lawyer details</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.lawyers.update', $lawyer) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $lawyer->name }}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="position">Position</label>
                    <input type="text" class="form-control" id="position" name="position" value="{{ $lawyer->position }}" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="speciality">Speciality</label>
                    <input type="text" class="form-control" id="speciality" name="speciality" value="{{ $lawyer->speciality }}" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $lawyer->phone }}" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $lawyer->email }}" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="photo">Photo</label>
                    <input class="form-control" type="file" id="photo" name="photo" />
                    @if($lawyer->photo)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $lawyer->photo) }}" alt="Current Photo" width="100">
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.lawyers.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
