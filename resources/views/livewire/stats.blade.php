<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            @foreach($statistics as $stat)
                <div class="stat-item">
                    <div class="number" data-target="{{ $stat->number }}">{{ $stat->number }}</div>
                    <div class="label">{{ $stat->label }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
