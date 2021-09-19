<?php require_once __DIR__ . '/../partials/hero.tpl.php' ?>

<main id="main">
  <!-- ======= About Section ======= -->
  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="assets/img/me.jpeg" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">Nom: </span> <span><?= $me->getLastName() ?></span></p>
                      <p><span class="title-s">Prénom: </span> <span><?= $me->getFirstName() ?></span></p>
                      <p><span class="title-s">Age: </span> <span><?= $me->getAge() ?></span></p>
                      <p><span class="title-s">Profil: </span> <span><?= $me->getProfile() ?></span></p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <p class="title-s">Compétences</p>
                  <?php foreach ($skills as $skill) : ?>
                    <span><?= $skill[0] ?></span> <span class="pull-right"><?= $skill[1] ?>%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: <?= $skill[1] ?>%" aria-valuenow="<?= $skill[1] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      A propos
                    </h5>
                  </div>
                  <p class="lead">
                    <?= $me->getPresentation1() ?>
                  </p>
                  <p class="lead">
                    <?= $me->getPresentation2() ?>
                  </p>
                  <p class="lead">
                    <?= $me->getPresentation3() ?>
                  </p>
                  <p class="lead">
                    <?= $me->getPresentation4() ?>
                  </p>
                  <div class="title-box-2 mt-4">
                    <h5 class="title-left">
                      Contact:
                    </h5>
                  </div>
                  <p><span class="title-s">Email: </span><?= $me->getEmail() ?></p>
                  <div class="socials text-center">
                      <ul>
                        <li><a href="https://www.linkedin.com/in/jimmy-martin-dev/" target="_blank"><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                        <li><a href="https://twitter.com/jimmydev_" target="_blank"><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li>
                      </ul>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End About Section -->

  <?php require_once __DIR__ . '/../portfolio/portfolio-preview.tpl.php'; ?>