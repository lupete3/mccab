<x-layouts.app>
    <x-slot name="title">Add Slider</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add Slider</h5>
            <small class="text-muted float-end">Add a new slider image</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Slider Title" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="subtitle">Subtitle</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Slider Subtitle" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="image">Image</label>
                    <input class="form-control" type="file" id="image" name="image" required />
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="button1_text">Button 1 Text</label>
                        <input type="text" class="form-control" id="button1_text" name="button1_text" placeholder="e.g. Contact Us" required />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="button1_url">Button 1 URL</label>
                        <input type="text" class="form-control" id="button1_url" name="button1_url" placeholder="e.g. #contact" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="button2_text">Button 2 Text</label>
                        <input type="text" class="form-control" id="button2_text" name="button2_text" placeholder="e.g. Our Services" required />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="button2_url">Button 2 URL</label>
                        <input type="text" class="form-control" id="button2_url" name="button2_url" placeholder="e.g. #services" required />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="order">Order</label>
                    <input type="number" class="form-control" id="order" name="order" value="0" />
                </div>
                <button type="submit" class="btn btn-primary">Add Slider</button>
                <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
