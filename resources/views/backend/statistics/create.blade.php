<x-layouts.app>
    <x-slot name="title">Add Statistic</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add Statistic</h5>
            <small class="text-muted float-end">Add a new statistic</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.statistics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="number">Number</label>
                    <input type="number" class="form-control" id="number" name="number" placeholder="e.g. 150" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="label">Label</label>
                    <input type="text" class="form-control" id="label" name="label" placeholder="e.g. Happy Clients" required />
                </div>
                <button type="submit" class="btn btn-primary">Add Statistic</button>
                <a href="{{ route('admin.statistics.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
