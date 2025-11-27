<x-layouts.app>
    <x-slot name="title">Edit Slider</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Slider</h5>
            <small class="text-muted float-end">Edit slider details</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.sliders.update', $slider) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $slider->title }}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="subtitle">Subtitle</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $slider->subtitle }}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="image">Image</label>
                    <input class="form-control" type="file" id="image" name="image" />
                    @if($slider->image)
                        <div class="mt-2">
                            <img src="{{ asset('uploads/' . $slider->image) }}" alt="Current Image" height="100">
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="button1_text">Button 1 Text</label>
                        <input type="text" class="form-control" id="button1_text" name="button1_text" value="{{ $slider->button1_text }}" required />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="button1_url">Button 1 URL</label>
                        <input type="text" class="form-control" id="button1_url" name="button1_url" value="{{ $slider->button1_url }}" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="button2_text">Button 2 Text</label>
                        <input type="text" class="form-control" id="button2_text" name="button2_text" value="{{ $slider->button2_text }}" required />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="button2_url">Button 2 URL</label>
                        <input type="text" class="form-control" id="button2_url" name="button2_url" value="{{ $slider->button2_url }}" required />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="order">Order</label>
                    <input type="number" class="form-control" id="order" name="order" value="{{ $slider->order }}" />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
