<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CABINET MURHWA & CHERUBALA CONSEIL - Avocats d\'Affaires')</title>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap CSS (example, adjust version as needed) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
</head>
<body>
    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <div class="loader"></div>
    </div>

    <!-- Header -->
    <header id="header">
        <div class="container">
            <nav>
                <a href="{{ route('home') }}" class="logo">
                    <i class="fas fa-balance-scale"></i>
                    <span>Murhwa & Cherubala</span>
                </a>
                <ul class="nav-links">
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li><a href="#about">À Propos</a></li>
                    <li><a href="#practice">Services</a></li>
                    <li><a href="#team">Équipe</a></li>
                    <li><a href="#news">Actualités</a></li>
                    <li><a href="#testimonials">Témoignages</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="mobile-menu" id="mobileMenuBtn">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Mobile Navigation -->
    <div class="mobile-nav" id="mobileNav">
        <div class="mobile-nav-header">
            <h3>Menu</h3>
            <div class="mobile-nav-close" id="mobileNavClose">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <ul class="mobile-nav-links">
            <li><a href="{{ route('home') }}" class="mobile-link">Accueil</a></li>
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

    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3>Cabinet Murhwa & Cherubala</h3>
                <p>Excellence juridique au service de vos ambitions. Nous défendons vos intérêts avec expertise et
                    intégrité.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-column">
                <h3>Services Juridiques</h3>
                <ul>
                    <li><a href="#practice">Droit des Affaires</a></li>
                    <li><a href="#practice">Contrats & Litiges</a></li>
                    <li><a href="#practice">Droit Fiscal</a></li>
                    <li><a href="#practice">Droit Pénal</a></li>
                    <li><a href="#practice">Droit Social</a></li>
                    <li><a href="#practice">Droit Immobilier</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Liens Utiles</h3>
                <ul>
                    <li><a href="#about">À Propos</a></li>
                    <li><a href="#team">Notre Équipe</a></li>
                    <li><a href="#testimonials">Témoignages</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#">Mentions Légales</a></li>
                    <li><a href="#">Politique de Confidentialité</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Newsletter</h3>
                <p>Inscrivez-vous pour recevoir nos actualités juridiques et conseils d\'experts.</p>
                <form style="margin-top: 1rem;">
                    <input type="email" placeholder="Votre email"
                        style="width: 100%; padding: 0.8rem; border-radius: 5px; border: none; margin-bottom: 0.5rem;">
                    <button type="submit"
                        style="width: 100%; padding: 0.8rem; background: var(--secondary-color); color: var(--white); border: none; border-radius: 5px; cursor: pointer; font-weight: 600;">S\'inscrire</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Cabinet Murhwa & Cherubala Conseil. Tous droits réservés.</p>
            <div class="made-by">
                Conçu avec passion par <a href="https://huggingface.co/spaces/akhaliq/anycoder"
                    target="_blank">anycoder</a>
            </div>
        </div>
    </footer>

    <!-- Success Message -->
    <div class="success-message" id="successMessage">
        <i class="fas fa-check-circle"></i>
        <div>
            <h4>Message Envoyé!</h4>
            <p>Nous vous répondrons dans les plus brefs délais.</p>
        </div>
    </div>

    <!-- Bootstrap JS (optional, for certain components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        // Preloader
        window.addEventListener(\'load\', () => {
            setTimeout(() => {
                document.getElementById(\'preloader\').classList.add(\'hide\');
            }, 1000);
        });

        // Header scroll effect
        window.addEventListener(\'scroll\', () => {
            const header = document.getElementById(\'header\');
            if (window.scrollY > 50) {
                header.classList.add(\'scrolled\');
            } else {
                header.classList.remove(\'scrolled\');
            }
        });

        // Mobile menu
        const mobileMenuBtn = document.getElementById(\'mobileMenuBtn\');
        const mobileNav = document.getElementById(\'mobileNav\');
        const mobileNavClose = document.getElementById(\'mobileNavClose\');
        const mobileLinks = document.querySelectorAll(\'\.mobile-link\');

        if(mobileMenuBtn) {
            mobileMenuBtn.addEventListener(\'click\', () => {
                mobileNav.classList.add(\'active\');
            });
        }

        if(mobileNavClose) {
            mobileNavClose.addEventListener(\'click\', () => {
                mobileNav.classList.remove(\'active\');
            });
        }

        mobileLinks.forEach(link => {
            link.addEventListener(\'click\', () => {
                mobileNav.classList.remove(\'active\');
            });
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll(\'a[href^="#"]").forEach(anchor => {
            anchor.addEventListener(\'click\', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute(\'href\'));
                if (target) {
                    target.scrollIntoView({
                        behavior: \'smooth\',
                        block: \'start
                    });
                }
            });
        });

        // Counter animation for stats
        const animateCounters = () => {
            const counters = document.querySelectorAll(\'\.number\');
            const speed = 200;

            counters.forEach(counter => {
                const animate = () => {
                    const target = +counter.getAttribute(\'data-target\');
                    const count = +counter.innerText;
                    const increment = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(animate, 1);
                    } else {
                        counter.innerText = target;
                    }
                };
                animate();
            });
        };

        // Trigger counter animation when stats section is in view
        const statsSection = document.querySelector(\'\.stats-section\');
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        if (statsSection) {
            statsObserver.observe(statsSection);
        }

        // Testimonial slider
        let currentTestimonial = 0;
        const testimonials = document.querySelectorAll(\'\.testimonial-card\');
        const dots = document.querySelectorAll(\'\.dot\');

        function changeTestimonial(index) {
            testimonials[currentTestimonial].style.display = \'none\';
            dots[currentTestimonial].classList.remove(\'active\');

            currentTestimonial = index;

            testimonials[currentTestimonial].style.display = \'block\';
            dots[currentTestimonial].classList.add(\'active\');
        }

        if(testimonials.length > 0) {
            // Auto-rotate testimonials
            setInterval(() => {
                const nextIndex = (currentTestimonial + 1) % testimonials.length;
                changeTestimonial(nextIndex);
            }, 5000);
        }


        // Contact form submission
        const contactForm = document.getElementById(\'contactForm\');
        const successMessage = document.getElementById(\'successMessage\');

        if(contactForm) {
            contactForm.addEventListener(\'submit\', (e) => {
                e.preventDefault();

                // Show success message
                successMessage.classList.add(\'show\');

                // Reset form
                contactForm.reset();

                // Hide success message after 5 seconds
                setTimeout(() => {
                    successMessage.classList.remove(\'show\');
                }, 5000);
            });
        }


        // Newsletter form
        const newsletterForm = document.querySelector(\'\.footer-column form\');
        if(newsletterForm) {
            newsletterForm.addEventListener(\'submit\', (e) => {
                e.preventDefault();
                const email = e.target.querySelector(\'input[type=\"email\"]\').value;
                if (email) {
                    successMessage.querySelector(\'h4\').textContent = \'Inscription Réussie!\';
                    successMessage.querySelector(\'p\').textContent = \'Merci de vous être inscrit à notre newsletter.\';
                    successMessage.classList.add(\'show\');
                    e.target.reset();
                    setTimeout(() => {
                        successMessage.classList.remove(\'show\');
                        successMessage.querySelector(\'h4\').textContent = \'Message Envoyé!\';
                        successMessage.querySelector(\'p\').textContent = \'Nous vous répondrons dans les plus brefs délais.\';
                    }, 5000);
                }
            });
        }


        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: \'0px 0px -50px 0px
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = \'1\';
                    entry.target.style.transform = \'translateY(0)\'
                }
            });
        }, observerOptions);

        // Observe all sections
        document.querySelectorAll(\'section\').forEach(section => {
            section.style.opacity = \'0\';
            section.style.transform = \'translateY(30px)\';
            section.style.transition = \'opacity 0.6s ease, transform 0.6s ease\';
            observer.observe(section);
        });

        // Add hover effect to cards
        document.querySelectorAll(\'\.area-card, \.team-member\').forEach(card => {
            card.addEventListener(\'mouseenter\', function () {
                this.style.transform = \'translateY(-10px)\';
            });

            card.addEventListener(\'mouseleave\', function () {
                this.style.transform = \'translateY(0)\';
            });
        });

        // Parallax effect for hero section
        window.addEventListener(\'scroll\', () => {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector(\'\.hero\');
            if (parallax) {
                parallax.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });
    </script>
</body>
</html>