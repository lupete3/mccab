<x-layouts.app>
    <x-slot name="title">Achievements</x-slot>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Achievements</h5>
            <a href="{{ route('admin.achievements.create') }}" class="btn btn-primary">Add Achievement</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Partner</th>
                        <th>Date</th>
                        <th>Location</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($achievements as $achievement)
                    <tr>
                        <td>
                            <img src="{{ asset('uploads/' . $achievement->image) }}" alt="Achievement Image" class="d-block rounded" height="50" width="auto">
                        </td>
                        <td><strong>{{ $achievement->title }}</strong></td>
                        <td>{{ $achievement->partner->name }}</td>
                        <td>{{ $achievement->date }}</td>
                        <td>{{ $achievement->location }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('admin.achievements.edit', $achievement) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <form action="{{ route('admin.achievements.destroy', $achievement) }}" method="POST" onsubmit="return confirm('Are you sure?');">
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
            {{ $achievements->links() }}
        </div>
    </div>
</x-layouts.app>
