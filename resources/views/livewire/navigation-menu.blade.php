<div>
	<!-- Header -->
<header id="header">
  <div class="container">
    <nav class="d-flex justify-content-between align-items-center">
      <a href="{{ route('home') }}" class="logo">
        <img src="{{ asset('assets/img/favicon/favicon.ico') }}" alt="Murhwa & Cherubala">
      </a>

      <!-- Bouton hamburger visible uniquement sur mobile -->
      <div class="mobile-menu-btn d-lg-none" id="mobileMenuBtn">
        <i class="fas fa-bars"></i>
      </div>

      <!-- Menu de navigation -->
      <ul class="nav-links d-none d-lg-flex" id="mobileMenu">
        <li><a href="{{ route('home') }}">Accueil</a></li>
        <li><a href="#about">À Propos</a></li>
        <li><a href="#practice">Services</a></li>
        <li><a href="#team">Équipe</a></li>
        <li><a href="#news">Actualités</a></li>
        <li><a href="#testimonials">Témoignages</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('mobileMenuBtn');
    const menu = document.getElementById('mobileMenu');

    btn.addEventListener('click', function () {
      menu.classList.toggle('open');
    });
  });
</script>


</div>