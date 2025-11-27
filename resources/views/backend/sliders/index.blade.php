<x-layouts.app>
    <x-slot name="title">Sliders</x-slot>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Sliders</h5>
            <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary">Add Slider</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Order</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($sliders as $slider)
                    <tr>
                        <td>
                            <img src="{{ asset('uploads/' . $slider->image) }}" alt="Slider Image" class="d-block rounded" height="50" width="auto">
                        </td>
                        <td><strong>{{ $slider->title }}</strong></td>
                        <td>{{ $slider->subtitle }}</td>
                        <td>{{ $slider->order }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('admin.sliders.edit', $slider) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <form action="{{ route('admin.sliders.destroy', $slider) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i> Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $sliders->links() }}
        </div>
    </div>
</x-layouts.app>
