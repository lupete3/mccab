<x-layouts.app>
    <x-slot name="title">Edit Team Member</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Team Member</h5>
            <small class="text-muted float-end">Edit team member details</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.team-members.update', $teamMember) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $teamMember->name }}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $teamMember->title }}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="specialty">Specialty</label>
                    <input type="text" class="form-control" id="specialty" name="specialty" value="{{ $teamMember->specialty }}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="photo">Photo</label>
                    <input class="form-control" type="file" id="photo" name="photo" />
                    @if($teamMember->photo)
                        <div class="mt-2">
                            <img src="{{ asset('uploads/' . $teamMember->photo) }}" alt="Current Photo" width="100">
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label" for="twitter_url">Twitter URL</label>
                    <input type="url" class="form-control" id="twitter_url" name="twitter_url" value="{{ $teamMember->twitter_url }}" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="facebook_url">Facebook URL</label>
                    <input type="url" class="form-control" id="facebook_url" name="facebook_url" value="{{ $teamMember->facebook_url }}" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="linkedin_url">LinkedIn URL</label>
                    <input type="url" class="form-control" id="linkedin_url" name="linkedin_url" value="{{ $teamMember->linkedin_url }}" />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.team-members.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
