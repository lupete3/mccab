<x-layouts.app>
    <x-slot name="title">View Message</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Message Details</h5>
            <a href="{{ route('admin.contact-messages.index') }}" class="btn btn-secondary btn-sm">Back to List</a>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label"><strong>From:</strong></label>
                <div class="col-sm-10">
                    <p class="form-control-plaintext">{{ $contactMessage->name }} &lt;{{ $contactMessage->email }}&gt;</p>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label"><strong>Subject:</strong></label>
                <div class="col-sm-10">
                    <p class="form-control-plaintext">{{ $contactMessage->subject }}</p>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label"><strong>Date:</strong></label>
                <div class="col-sm-10">
                    <p class="form-control-plaintext">
    {{ $contactMessage->created_at ? $contactMessage->created_at->diffForHumans() : 'N/A' }}
</p>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label"><strong>Message:</strong></label>
                <div class="col-sm-10">
                    <div class="p-3 bg-light rounded">
                        {{ $contactMessage->message }}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <a href="mailto:{{ $contactMessage->email }}" class="btn btn-primary"><i class="bx bx-envelope me-1"></i> Reply</a>
            <form action="{{ route('admin.contact-messages.destroy', $contactMessage) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="bx bx-trash me-1"></i> Delete</button>
            </form>
        </div>
    </div>
</x-layouts.app>
