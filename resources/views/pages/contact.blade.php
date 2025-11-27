<section id="contact" class="py-5 bg-light wow fadeIn">
    <div class="container">

        <div class="text-center mb-4">
            <h2 class="section-title">Contactez-nous</h2>
            <p class="text-muted">Pour toute demande d'assistance juridique</p>
        </div>

        <div class="row">

            <div class="col-md-6">

                <h4 class="fw-bold">Nos Adresses</h4>

                @foreach($addresses as $addr)
                    <div class="mb-4">
                        <h5>{{ $addr->city }}</h5>
                        <p>
                            {{ $addr->address }}<br>
                            Téléphone : <strong>{{ $addr->phone }}</strong>
                        </p>
                    </div>
                @endforeach

            </div>

            <div class="col-md-6">

                <div class="card shadow-sm p-4">
                    <h5 class="mb-3">Envoyer un message</h5>

                    <form wire:submit.prevent="sendMessage">

                        <div class="mb-3">
                            <input type="text" wire:model="name" class="form-control" placeholder="Votre nom">
                        </div>

                        <div class="mb-3">
                            <input type="email" wire:model="email" class="form-control" placeholder="Votre email">
                        </div>

                        <div class="mb-3">
                            <textarea wire:model="message" class="form-control" rows="4"
                                      placeholder="Votre message"></textarea>
                        </div>

                        <button class="btn btn-primary w-100 py-2">
                            Envoyer
                        </button>

                    </form>
                </div>

            </div>

        </div>

    </div>
</section>
