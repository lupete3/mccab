<x-layouts.app>
    <x-slot name="title">Edit Address</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Address</h5>
            <small class="text-muted float-end">Edit address details</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.adresses.update', $adress) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{ $adress->city }}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $adress->address }}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $adress->phone }}" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $adress->email }}" />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.adresses.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
