<nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?php if($currentPage === ''): ?>active<?php endif; ?>" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto <?php if($currentPage === ''): ?>active<?php endif; ?>" href="#about">A propos</a></li>
          <li><a class="nav-link scrollto <?php if($currentPage === 'portfolio/portfolio'): ?>active<?php endif; ?>" href="<?= $router->generate('main-portfolio') ?>">Portfolio</a></li>
          <li><a class="nav-link scrollto <?php if($currentPage === 'partials/contact'): ?>active<?php endif; ?>" href="<?= $router->generate('main-contact') ?>">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->