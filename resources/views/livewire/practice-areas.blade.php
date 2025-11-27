<section class="practice-areas" id="practice">
    <div class="container">
        <div class="section-header">
            <h2>Domaines d'Expertise</h2>
            <p>Nous offrons des services juridiques complets dans tous les domaines du droit des affaires</p>
        </div>
        <div class="areas-grid">
            @foreach($practiceAreas as $area)
                <div class="area-card">
                    <div class="area-icon">
                        <i class="{{ $area->icon }}"></i>
                    </div>
                    <h3>{{ $area->title }}</h3>
                    <p>{{ $area->description }}</p>
                    <a href="{{ $area->link }}">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>
            @endforeach
        </div>
    </div>
</section>