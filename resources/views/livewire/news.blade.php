<section class="news-section" id="news">
    <div class="container">
        <div class="section-header">
            <h2>Actualités & Activités</h2>
            <p>Découvrez les dernières actualités de notre cabinet et nos analyses juridiques</p>
        </div>

        <!-- Featured News -->
        @if($featuredNews)
            <div class="featured-news">
                <div class="featured-news-image">
                    <a href="{{ route('blog.detail', $featuredNews->id) }}">
                        <img src="{{ asset('uploads/' .$featuredNews->image) }}" alt="Actualité principale">
                    </a>
                </div>
                <div class="featured-news-content">
                    <span class="featured-badge">{{ $featuredNews->category }}</span>
                    <h2 class="featured-news-title">
                        <a href="{{ route('blog.detail', $featuredNews->id) }}" class="text-decoration-none text-dark">{{ $featuredNews->title }}</a>
                    </h2>
                    <p class="featured-news-excerpt">{{ $featuredNews->content }}</p>
                    <div class="news-meta">
                        <div class="news-author">
                            <i class="fas fa-user"></i>
                            <span>{{ $featuredNews->user->name }}</span>
                        </div>
                        <a href="{{ route('blog.detail', $featuredNews->id) }}" class="news-read-more">
                            Lire la suite <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endif

        <!-- News Grid -->
        <div class="news-grid">
            @foreach($newsArticles as $article)
                <article class="news-card">
                    <div class="news-image">
                        <a href="{{ route('blog.detail', $article->id) }}">
                            <img src="{{ asset('uploads/' .$article->image) }}" alt="{{ $article->title }}">
                        </a>
                        <span class="news-category">{{ $article->category }}</span>
                        <span class="news-date">{{ \Carbon\Carbon::parse($article->published_at)->format('d M Y') }}</span>
                    </div>
                    <div class="news-content">
                        <h3 class="news-title">
                            <a href="{{ route('blog.detail', $article->id) }}" class="text-decoration-none text-dark">{{ $article->title }}</a>
                        </h3>
                        <p class="news-excerpt">{{ Str::limit($article->content, 100) }}</p>
                        <div class="news-meta">
                            <div class="news-author">
                                <i class="fas fa-user"></i>
                                <span>{{ $article->user->name }}</span>
                            </div>
                            <a href="{{ route('blog.detail', $article->id) }}" class="news-read-more">
                                Lire plus <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <!-- Newsletter Box -->
        <div class="newsletter-box">
            <h3 class="text-secondary">Restez Informé</h3>
            <p>Recevez nos dernières analyses juridiques et actualités directement dans votre boîte mail</p>
            <form class="newsletter-form" id="newsletterForm">
                <input type="email" placeholder="Votre adresse email" required>
                <button type="submit">
                    <i class="fas fa-envelope"></i> S'abonner
                </button>
            </form>
        </div>
    </div>
</section>
