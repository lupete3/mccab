<x-layouts.app>
    <x-slot name="title">Testimonials</x-slot>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Testimonials</h5>
            <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">Add Testimonial</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Author</th>
                        <th>Position</th>
                        <th>Content</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($testimonials as $testimonial)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                @if($testimonial->author_avatar_icon)
                                    <img src="{{ asset('storage/' . $testimonial->author_avatar_icon) }}" alt="Avatar" class="rounded-circle me-2" width="40" height="40">
                                @else
                                    <div class="avatar avatar-sm me-2"><span class="avatar-initial rounded-circle bg-label-primary">{{ substr($testimonial->author_name, 0, 2) }}</span></div>
                                @endif
                                <strong>{{ $testimonial->author_name }}</strong>
                            </div>
                        </td>
                        <td>{{ $testimonial->author_position }}</td>
                        <td>{{ Str::limit($testimonial->content, 50) }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('admin.testimonials.edit', $testimonial) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" onsubmit="return confirm('Are you sure?');">
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
            {{ $testimonials->links() }}
        </div>
    </div>
</x-layouts.app>
