<section class="testimonials-section" id="testimonials">
    <div class="container">
        <div class="section-header">
            <h2>Témoignages Clients</h2>
            <p>Ce que nos clients disent de notre expertise et de notre engagement</p>
        </div>
        <div class="testimonials-slider">
            @foreach($testimonials as $index => $testimonial)
                <div class="testimonial-card @if($index == 0) active @endif" @if($index != 0) style="display: none;" @endif>
                    <p class="testimonial-text">{{ $testimonial->content }}</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="{{ $testimonial->author_avatar_icon }}"></i>
                        </div>
                        <div class="author-info">
                            <h4>{{ $testimonial->author_name }}</h4>
                            <p>{{ $testimonial->author_position }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="testimonial-dots">
                @foreach($testimonials as $index => $testimonial)
                    <span class="dot @if($index == 0) active @endif" onclick="changeTestimonial({{ $index }})"></span>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
    let currentTestimonial = 0;
    const testimonials = document.querySelectorAll('.testimonial-card');
    const dots = document.querySelectorAll('.dot');

    function changeTestimonial(index) {
        testimonials[currentTestimonial].style.display = 'none';
        dots[currentTestimonial].classList.remove('active');

        currentTestimonial = index;

        testimonials[currentTestimonial].style.display = 'block';
        dots[currentTestimonial].classList.add('active');
    }

    if(testimonials.length > 0) {
        setInterval(() => {
            const nextIndex = (currentTestimonial + 1) % testimonials.length;
            changeTestimonial(nextIndex);
        }, 5000);
    }
</script>