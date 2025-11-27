<x-layouts.app>
    <x-slot name="title">Firms</x-slot>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Firms</h5>
            <a href="{{ route('admin.firms.create') }}" class="btn btn-primary">Add Firm</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Logo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($firms as $firm)
                    <tr>
                        <td>
                            @if($firm->logo_path)
                                <img src="{{ asset('uploads/' . $firm->logo_path) }}" alt="Logo" class="d-block rounded" height="50" width="auto">
                            @else
                                <span class="badge bg-label-secondary">No Logo</span>
                            @endif
                        </td>
                        <td><strong>{{ $firm->name }}</strong></td>
                        <td>{{ $firm->email }}</td>
                        <td>{{ $firm->phone1 }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('admin.firms.edit', $firm) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <form action="{{ route('admin.firms.destroy', $firm) }}" method="POST" onsubmit="return confirm('Are you sure?');">
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
            {{ $firms->links() }}
        </div>
    </div>
</x-layouts.app>
