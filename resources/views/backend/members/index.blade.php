<x-layouts.app>
    <x-slot name="title">Members</x-slot>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Members</h5>
            <a href="{{ route('admin.members.create') }}" class="btn btn-primary">Add Member</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Firm</th>
                        <th>Order</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($members as $member)
                    <tr>
                        <td>
                            @if($member->photo_path)
                                <img src="{{ asset('uploads/' . $member->photo_path) }}" alt="Photo" class="rounded-circle" height="40" width="40">
                            @else
                                <div class="avatar avatar-sm me-2"><span class="avatar-initial rounded-circle bg-label-primary">{{ substr($member->first_name, 0, 1) . substr($member->last_name, 0, 1) }}</span></div>
                            @endif
                        </td>
                        <td><strong>{{ $member->first_name }} {{ $member->last_name }}</strong></td>
                        <td>{{ $member->position }}</td>
                        <td>{{ $member->firm->name }}</td>
                        <td>{{ $member->order }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('admin.members.edit', $member) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <form action="{{ route('admin.members.destroy', $member) }}" method="POST" onsubmit="return confirm('Are you sure?');">
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
            {{ $members->links() }}
        </div>
    </div>
</x-layouts.app>
