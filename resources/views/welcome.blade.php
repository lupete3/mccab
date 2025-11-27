<x-guest-layout>

	<style>
		.carousel-caption {
			bottom: 20%;
			text-align: center;
		}

		.carousel-caption h1,
		.carousel-caption h4,
		.carousel-caption p,
		.carousel-caption .btn {
			animation-duration: 1.2s;
		}
	</style>
	<!-- Mobile Navigation -->
	<div class="mobile-nav" id="mobileNav">
		<div class="mobile-nav-header">
			<h3>Menu</h3>
			<div class="mobile-nav-close" id="mobileNavClose">
				<i class="fas fa-times"></i>
			</div>
		</div>
		<ul class="mobile-nav-links">
			<li><a href="#home" class="mobile-link">Accueil</a></li>
			<li><a href="#practice" class="mobile-link">Domaines</a></li>
			<li><a href="#about" class="mobile-link">À Propos</a></li>
			<li><a href="#team" class="mobile-link">Équipe</a></li>
			<li><a href="#testimonials" class="mobile-link">Témoignages</a></li>
			<li><a href="#contact" class="mobile-link">Contact</a></li>
		</ul>
		<div class="mobile-nav-consultation">
			<a href="#contact" class="consultation-btn">Demandez une Consultation</a>
		</div>
	</div>

	<!-- Hero Section -->
	<!-- Carousel Start -->
	<!-- Carousel Start -->
	<!-- Carousel Start -->
	<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">

		<!-- Indicators (les ronds en bas) -->
		<div class="carousel-indicators">
			@foreach($sliders as $index => $slider)
				<button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="{{ $index }}"
					class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}">
				</button>
			@endforeach
		</div>

		<div class="carousel-inner">

			@forelse($sliders as $index => $slider)
				<div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
					<img src="{{ asset('uploads/' . $slider->image) }}" class="d-block w-100"
						style="height: 90vh; object-fit: cover;" alt="{{ $slider->title }}">

					<div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
						<h4 class="text-primary text-uppercase fw-bold mb-3 animated fadeInDown">
							{{ $slider->subtitle }}
						</h4>

						<h1 class="display-4 text-uppercase text-white mb-4 animated fadeInUp">
							{!! nl2br(e($slider->title)) !!}
						</h1>

						<p class="mb-4 fs-5 animated fadeInUp">
							{{ $slider->description }}
						</p>

						<div class="d-flex animated fadeInUp">
							@if($slider->button1_text)
								<a href="{{ $slider->button1_url ?? '#' }}"
									class="btn btn-primary py-3 px-5 me-2">{{ $slider->button1_text }}</a>
							@endif

							@if($slider->button2_text)
								<a href="{{ $slider->button2_url ?? '#' }}"
									class="btn btn-light py-3 px-5 ms-2">{{ $slider->button2_text }}</a>
							@endif
						</div>
					</div>
				</div>
			@empty

				<!-- Slide par défaut -->
				<div class="carousel-item active">
					<img src="https://picsum.photos/1920/1080" class="d-block w-100"
						style="height: 90vh; object-fit: cover;" alt="Image par défaut">

					<div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
						<h4 class="text-primary text-uppercase fw-bold mb-3">Bienvenue</h4>
						<h1 class="display-4 text-uppercase text-white mb-4">Expert Lawyer</h1>
						<p class="mb-4 fs-5">Votre partenaire juridique de confiance.</p>
						<a href="#contact" class="btn btn-primary py-3 px-5">Contactez-nous</a>
					</div>
				</div>

			@endforelse

		</div>

		<!-- Navigation -->
		<button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</button>

		<button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
			<span class="carousel-control-next-icon"></span>
		</button>

	</div>
	<!-- Carousel End -->

	<!-- Carousel End -->

	<livewire:practice-areas />

	<!-- About Section -->
	<section class="about-section" id="about">
		<div class="container">
			<div class="about-content">
				<div class="about-image">
					@if($about && $about->image)
						<img src="{{ asset('uploads/' . $about->image) }}" alt="Notre cabinet">
					@else
						<img src="https://picsum.photos/seed/about/500/600" alt="Notre cabinet">
					@endif
					<div class="experience-badge">
						<div class="number">25+</div>
						<div class="text">Années d'Expérience</div>
					</div>
				</div>
				<div class="about-text">
					@if($about)
						<h2>{{ $about->title }}</h2>
						<div class="about-description">
							{!! $about->content !!}
						</div>
						<ul class="features-list">
							@if($about->features)
								@foreach($about->features as $feature)
									<li>
										<i class="fas fa-check-circle"></i>
										<div>
											<strong>{{ $feature ?? '' }}</strong> {{ $feature ?? '' }}
										</div>
									</li>
								@endforeach
							@endif
						</ul>
					@endif
				</div>
			</div>
		</div>
	</section>

	<livewire:stats />

	<livewire:team />

	<livewire:news />

	<livewire:testimonials />

	<!-- Contact Section -->
	<section class="contact-section" id="contact">
		<div class="container">
			<div class="contact-content">
				<div class="contact-info">
					<h2>Contactez-Nous</h2>
					<p>Notre équipe est à votre disposition pour répondre à toutes vos questions et vous accompagner
						dans vos démarches juridiques.</p>
					<div class="contact-items">
						<div class="contact-item">
							<i class="fas fa-map-marker-alt"></i>
							<div>
								<h4>Adresse</h4>
								<p>{!! nl2br(e($settings['address'] ?? 'Adresse non définie')) !!}</p>
							</div>
						</div>
						<div class="contact-item">
							<i class="fas fa-phone-alt"></i>
							<div>
								<h4>Téléphone</h4>
								<p>{!! nl2br(e($settings['phone'] ?? 'Téléphone non défini')) !!}</p>
							</div>
						</div>
						<div class="contact-item">
							<i class="fas fa-envelope"></i>
							<div>
								<h4>Email</h4>
								@if(isset($settings['email']))
									<p><a href="mailto:{{ $settings['email'] }}">{{ $settings['email'] }}</a></p>
								@endif
							</div>
						</div>
						<div class="contact-item">
							<i class="fas fa-clock"></i>
							<div>
								<h4>Horaires</h4>
								<p>{!! nl2br(e($settings['hours'] ?? 'Lundi - Vendredi: 8h00 - 18h00')) !!}</p>
							</div>
						</div>
					</div>
				</div>
				<div class="contact-form">
					<h3 style="margin-bottom: 1.5rem;">Demandez une Consultation</h3>
					<livewire:contact-form />
				</div>
			</div>
		</div>
	</section>

</x-guest-layout>