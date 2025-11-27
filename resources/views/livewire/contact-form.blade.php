<form wire:submit.prevent="save">
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row g-3">
        <div class="col-md-6">
            <input type="text" class="form-control border-0 bg-light px-4" placeholder="Votre Nom" style="height: 55px;" wire:model="name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-6">
            <input type="email" class="form-control border-0 bg-light px-4" placeholder="Votre Email" style="height: 55px;" wire:model="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="col-12">
            <input type="text" class="form-control border-0 bg-light px-4" placeholder="Sujet" style="height: 55px;" wire:model="subject">
            @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="col-12">
            <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message" wire:model="message"></textarea>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" type="submit" wire:loading.attr="disabled">
                <span wire:loading.remove>Envoyer le Message</span>
                <span wire:loading>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Envoi en cours...
                </span>
            </button>
        </div>
    </div>
</form>