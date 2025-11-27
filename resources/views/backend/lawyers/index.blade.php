<x-layouts.app>
    <x-slot name="title">Lawyers</x-slot>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Lawyers</h5>
            <a href="{{ route('admin.lawyers.create') }}" class="btn btn-primary">Add Lawyer</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Speciality</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($lawyers as $lawyer)
                    <tr>
                        <td><strong>{{ $lawyer->name }}</strong></td>
                        <td>{{ $lawyer->position }}</td>
                        <td>{{ $lawyer->speciality }}</td>
                        <td>{{ $lawyer->phone }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('admin.lawyers.edit', $lawyer) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <form action="{{ route('admin.lawyers.destroy', $lawyer) }}" method="POST" onsubmit="return confirm('Are you sure?');">
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
            {{ $lawyers->links() }}
        </div>
    </div>
</x-layouts.app>
