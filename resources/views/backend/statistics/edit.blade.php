<x-layouts.app>
    <x-slot name="title">Edit Statistic</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Statistic</h5>
            <small class="text-muted float-end">Edit statistic details</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.statistics.update', $statistic) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="number">Number</label>
                    <input type="number" class="form-control" id="number" name="number" value="{{ $statistic->number }}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="label">Label</label>
                    <input type="text" class="form-control" id="label" name="label" value="{{ $statistic->label }}" required />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.statistics.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
