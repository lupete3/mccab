<x-layouts.app>
    <x-slot name="title">Add Lawyer</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add Lawyer</h5>
            <small class="text-muted float-end">Add a new lawyer to the firm</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.lawyers.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="position">Position</label>
                    <input type="text" class="form-control" id="position" name="position" placeholder="e.g. Senior Partner" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="speciality">Speciality</label>
                    <input type="text" class="form-control" id="speciality" name="speciality" placeholder="e.g. Corporate Law" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="photo">Photo</label>
                    <input class="form-control" type="file" id="photo" name="photo" />
                </div>
                <button type="submit" class="btn btn-primary">Add Lawyer</button>
                <a href="{{ route('admin.lawyers.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
