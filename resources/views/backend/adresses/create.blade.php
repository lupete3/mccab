<x-layouts.app>
    <x-slot name="title">Add Address</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add Address</h5>
            <small class="text-muted float-end">Add a new address</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.adresses.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="City" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
                </div>
                <button type="submit" class="btn btn-primary">Add Address</button>
                <a href="{{ route('admin.adresses.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
