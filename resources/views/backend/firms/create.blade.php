<x-layouts.app>
    <x-slot name="title">Add Firm</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add Firm</h5>
            <small class="text-muted float-end">Add a new firm</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.firms.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Firm Name" required />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label" for="phone1">Phone 1</label>
                        <input type="text" class="form-control" id="phone1" name="phone1" placeholder="Phone 1" />
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label" for="phone2">Phone 2</label>
                        <input type="text" class="form-control" id="phone2" name="phone2" placeholder="Phone 2" />
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label" for="phone3">Phone 3</label>
                        <input type="text" class="form-control" id="phone3" name="phone3" placeholder="Phone 3" />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="logo_path">Logo</label>
                    <input class="form-control" type="file" id="logo_path" name="logo_path" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="mission">Mission</label>
                    <textarea class="form-control" id="mission" name="mission" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="vision">Vision</label>
                    <textarea class="form-control" id="vision" name="vision" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="values">Values</label>
                    <textarea class="form-control" id="values" name="values" rows="3"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label class="form-label" for="facebook_url">Facebook URL</label>
                        <input type="url" class="form-control" id="facebook_url" name="facebook_url" />
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="form-label" for="twitter_url">Twitter URL</label>
                        <input type="url" class="form-control" id="twitter_url" name="twitter_url" />
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="form-label" for="linkedin_url">LinkedIn URL</label>
                        <input type="url" class="form-control" id="linkedin_url" name="linkedin_url" />
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="form-label" for="instagram_url">Instagram URL</label>
                        <input type="url" class="form-control" id="instagram_url" name="instagram_url" />
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Firm</button>
                <a href="{{ route('admin.firms.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
