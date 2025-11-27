<section id="team" class="py-5 wow fadeInUp">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title">Notre Équipe</h2>
            <p class="text-muted">Des professionnels qualifiés à votre service</p>
        </div>

        <div class="row">

            @foreach($lawyers as $lawyer)
                <div class="col-md-4 mb-4">
                    <div class="card team-box shadow-sm text-center p-4">

                        <img src="{{ $lawyer->photo ?? '/expert-lawyer/wp-content/themes/expert-lawyer-pro/images/team1.jpg' }}"
                             alt="{{ $lawyer->name }}"
                             class="rounded-circle mb-3"
                             style="width:140px; height:140px; object-fit:cover;">

                        <h4 class="fw-bold">{{ $lawyer->name }}</h4>
                        <p class="text-primary">{{ $lawyer->position }}</p>
                        <p class="text-muted">{{ $lawyer->speciality }}</p>

                        <div class="social-icons mt-3">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>
