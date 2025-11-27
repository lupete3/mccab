<x-layouts.app>
@section('title', 'Dashboard')

<div class="flex-grow-1 container-p-y">

    {{-- Top Stats Cards --}}
    <div class="row g-4 mb-4">

        {{-- Practice Areas --}}
        <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar flex-shrink-0 me-3 bg-label-primary p-3 rounded">
                        <i class="fas fa-briefcase fs-2 text-primary"></i>
                    </div>
                    <div>
                        <p class="text-muted mb-0">Practice Areas</p>
                        <h4 class="mb-0">{{ $practiceAreasCount }}</h4>
                    </div>
                </div>
            </div>
        </div>

        {{-- Team Members --}}
        <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar flex-shrink-0 me-3 bg-label-success p-3 rounded">
                        <i class="fas fa-users fs-2 text-success"></i>
                    </div>
                    <div>
                        <p class="text-muted mb-0">Team Members</p>
                        <h4 class="mb-0">{{ $teamMembersCount }}</h4>
                    </div>
                </div>
            </div>
        </div>

        {{-- News --}}
        <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar flex-shrink-0 me-3 bg-label-danger p-3 rounded">
                        <i class="fas fa-newspaper fs-2 text-danger"></i>
                    </div>
                    <div>
                        <p class="text-muted mb-0">News Articles</p>
                        <h4 class="mb-0">{{ $postsCount }}</h4>
                    </div>
                </div>
            </div>
        </div>

        {{-- Testimonials --}}
        <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar flex-shrink-0 me-3 bg-label-warning p-3 rounded">
                        <i class="fas fa-comment fs-2 text-warning"></i>
                    </div>
                    <div>
                        <p class="text-muted mb-0">Testimonials</p>
                        <h4 class="mb-0">{{ $testimonialsCount }}</h4>
                    </div>
                </div>
            </div>
        </div>

        {{-- Partners --}}
        <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar flex-shrink-0 me-3 bg-label-purple p-3 rounded">
                        <i class="fas fa-handshake fs-2 text-purple"></i>
                    </div>
                    <div>
                        <p class="text-muted mb-0">Partners</p>
                        <h4 class="mb-0">{{ $partnersCount }}</h4>
                    </div>
                </div>
            </div>
        </div>

        {{-- Messages --}}
        <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar flex-shrink-0 me-3 bg-label-info p-3 rounded">
                        <i class="fas fa-envelope fs-2 text-info"></i>
                    </div>
                    <div>
                        <p class="text-muted mb-0">Total Messages</p>
                        <h4 class="mb-0">{{ $messagesCount }}</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Recent Messages --}}
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">Recent Contact Messages</h5>
            <a href="{{ route('admin.contact-messages.index') }}" class="btn btn-sm btn-primary">
                View all
            </a>
        </div>

        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Date</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">

                    @forelse($recentMessages as $message)
                    <tr>
                        <td>
                            <div class="fw-semibold">{{ $message->name }}</div>
                            <div class="text-muted small">{{ $message->email }}</div>
                        </td>

                        <td>{{ Str::limit($message->subject, 40) }}</td>

                        <td>
                            <span class="text-muted">{{ $message->created_at->diffForHumans() }}</span>
                        </td>

                        <td class="text-end">
                            <a href="{{ route('admin.contact-messages.show', $message) }}"
                               class="btn btn-sm btn-outline-primary">
                                View
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">No recent messages.</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

    </div>

</div>

</x-layouts.app>