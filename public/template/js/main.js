(function ($) {
	"use strict";

	// Spinner
	var spinner = function () {
		setTimeout(function () {
			if ($('#spinner').length > 0) {
				$('#spinner').removeClass('show');
			}
		}, 1);
	};
	spinner();


	// Initiate the wowjs
	new WOW().init();


	// Sticky Navbar
	$(window).scroll(function () {
		if ($(this).scrollTop() > 45) {
			$('.navbar').addClass('sticky-top shadow-sm');
		} else {
			$('.navbar').removeClass('sticky-top shadow-sm');
		}
	});

	// Dropdown on mouse hover
	const $dropdown = $(".dropdown");
	const $dropdownToggle = $(".dropdown-toggle");
	const $dropdownMenu = $(".dropdown-menu");
	const showClass = "show";

	$(window).on("load resize", function () {
		if (this.matchMedia("(min-width: 992px)").matches) {
			$dropdown.hover(
				function () {
					const $this = $(this);
					$this.addClass(showClass);
					$this.find($dropdownToggle).attr("aria-expanded", "true");
					$this.find($dropdownMenu).addClass(showClass);
				},
				function () {
					const $this = $(this);
					$this.removeClass(showClass);
					$this.find($dropdownToggle).attr("aria-expanded", "false");
					$this.find($dropdownMenu).removeClass(showClass);
				}
			);
		} else {
			$dropdown.off("mouseenter mouseleave");
		}
	});


	// Facts counter
	$('[data-toggle="counter-up"]').counterUp({
		delay: 10,
		time: 2000
	});


	// Back to top button
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('.back-to-top').fadeIn('slow');
		} else {
			$('.back-to-top').fadeOut('slow');
		}
	});
	$('.back-to-top').click(function () {
		$('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
		return false;
	});


	// Testimonials carousel
	$(".testimonial-carousel").owlCarousel({
		autoplay: true,
		smartSpeed: 1500,
		dots: true,
		loop: true,
		center: true,
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 1
			},
			768: {
				items: 2
			},
			992: {
				items: 3
			}
		}
	});


	// Vendor carousel
	$('.vendor-carousel').owlCarousel({
		loop: true,
		margin: 45,
		dots: false,
		loop: true,
		autoplay: true,
		smartSpeed: 1000,
		responsive: {
			0: {
				items: 2
			},
			576: {
				items: 4
			},
			768: {
				items: 6
			},
			992: {
				items: 8
			}
		}
	});

	// Header carousel
	// Header carousel
	$(document).ready(function () {
		$(".header-carousel").owlCarousel({
			autoplay: true,
			smartSpeed: 1500,
			items: 1,
			dots: true,
			loop: true,
			nav: true,
			navText: [
				'<i class="bi bi-chevron-left"></i>',
				'<i class="bi bi-chevron-right"></i>'
			]
		});
	});

})(jQuery);


// Preloader
window.addEventListener('load', () => {
	setTimeout(() => {
		document.getElementById('preloader').classList.add('hide');
	}, 1000);
});

// Header scroll effect
window.addEventListener('scroll', () => {
	const header = document.getElementById('header');
	if (window.scrollY > 50) {
		header.classList.add('scrolled');
	} else {
		header.classList.remove('scrolled');
	}
});

// Mobile menu
const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const mobileNav = document.getElementById('mobileNav');
const mobileNavClose = document.getElementById('mobileNavClose');
const mobileLinks = document.querySelectorAll('.mobile-link');

mobileMenuBtn.addEventListener('click', () => {
	mobileNav.classList.add('active');
});

mobileNavClose.addEventListener('click', () => {
	mobileNav.classList.remove('active');
});

mobileLinks.forEach(link => {
	link.addEventListener('click', () => {
		mobileNav.classList.remove('active');
	});
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
	anchor.addEventListener('click', function (e) {
		e.preventDefault();
		const target = document.querySelector(this.getAttribute('href'));
		if (target) {
			target.scrollIntoView({
				behavior: 'smooth',
				block: 'start'
			});
		}
	});
});

// Counter animation for stats
const animateCounters = () => {
	const counters = document.querySelectorAll('.number');
	const speed = 200;

	counters.forEach(counter => {
		const animate = () => {
			const target = +counter.getAttribute('data-target');
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
const statsSection = document.querySelector('.stats-section');
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
const testimonials = document.querySelectorAll('.testimonial-card');
const dots = document.querySelectorAll('.dot');

function changeTestimonial(index) {
	testimonials[currentTestimonial].style.display = 'none';
	dots[currentTestimonial].classList.remove('active');

	currentTestimonial = index;

	testimonials[currentTestimonial].style.display = 'block';
	dots[currentTestimonial].classList.add('active');
}

// Auto-rotate testimonials
setInterval(() => {
	const nextIndex = (currentTestimonial + 1) % testimonials.length;
	changeTestimonial(nextIndex);
}, 5000);

// Contact form submission
const contactForm = document.getElementById('contactForm');
const successMessage = document.getElementById('successMessage');

contactForm.addEventListener('submit', (e) => {
	e.preventDefault();

	// Show success message
	successMessage.classList.add('show');

	// Reset form
	contactForm.reset();

	// Hide success message after 5 seconds
	setTimeout(() => {
		successMessage.classList.remove('show');
	}, 5000);
});

// Newsletter form
const newsletterForm = document.querySelector('.footer-column form');
newsletterForm.addEventListener('submit', (e) => {
	e.preventDefault();
	const email = e.target.querySelector('input[type="email"]').value;
	if (email) {
		successMessage.querySelector('h4').textContent = 'Inscription Réussie!';
		successMessage.querySelector('p').textContent = 'Merci de vous être inscrit à notre newsletter.';
		successMessage.classList.add('show');
		e.target.reset();
		setTimeout(() => {
			successMessage.classList.remove('show');
			successMessage.querySelector('h4').textContent = 'Message Envoyé!';
			successMessage.querySelector('p').textContent = 'Nous vous répondrons dans les plus brefs délais.';
		}, 5000);
	}
});

// Add animation on scroll
const observerOptions = {
	threshold: 0.1,
	rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
	entries.forEach(entry => {
		if (entry.isIntersecting) {
			entry.target.style.opacity = '1';
			entry.target.style.transform = 'translateY(0)';
		}
	});
}, observerOptions);

// Observe all sections
document.querySelectorAll('section').forEach(section => {
	section.style.opacity = '0';
	section.style.transform = 'translateY(30px)';
	section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
	observer.observe(section);
});

// Add hover effect to cards
document.querySelectorAll('.area-card, .team-member').forEach(card => {
	card.addEventListener('mouseenter', function () {
		this.style.transform = 'translateY(-10px)';
	});

	card.addEventListener('mouseleave', function () {
		this.style.transform = 'translateY(0)';
	});
});

// Parallax effect for hero section
window.addEventListener('scroll', () => {
	const scrolled = window.pageYOffset;
	const parallax = document.querySelector('.hero');
	if (parallax) {
		parallax.style.transform = `translateY(${scrolled * 0.5}px)`;
	}
});


