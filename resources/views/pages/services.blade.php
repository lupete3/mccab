<section id="services" class="py-5 bg-light wow fadeIn">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title">Nos Services</h2>
            <p class="text-muted">Nous mettons l'excellence au cœur de notre travail</p>
        </div>

        <div class="row">

            @foreach($services as $service)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm service-box h-100 p-4 text-center">

                        <div class="icon mb-3">
                            <i class="fa {{ $service->icon }} fa-3x text-primary"></i>
                        </div>

                        <h4>{{ $service->title }}</h4>

                        <p class="text-muted">{{ $service->description }}</p>

                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>
