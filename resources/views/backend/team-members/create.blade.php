<x-layouts.app>
    <x-slot name="title">Add Team Member</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add Team Member</h5>
            <small class="text-muted float-end">Add a new member to the team</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.team-members.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="e.g. Senior Associate" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="specialty">Specialty</label>
                    <input type="text" class="form-control" id="specialty" name="specialty" placeholder="e.g. Litigation" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="photo">Photo</label>
                    <input class="form-control" type="file" id="photo" name="photo" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="twitter_url">Twitter URL</label>
                    <input type="url" class="form-control" id="twitter_url" name="twitter_url" placeholder="https://twitter.com/username" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="facebook_url">Facebook URL</label>
                    <input type="url" class="form-control" id="facebook_url" name="facebook_url" placeholder="https://facebook.com/username" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="linkedin_url">LinkedIn URL</label>
                    <input type="url" class="form-control" id="linkedin_url" name="linkedin_url" placeholder="https://linkedin.com/in/username" />
                </div>
                <button type="submit" class="btn btn-primary">Add Member</button>
                <a href="{{ route('admin.team-members.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
