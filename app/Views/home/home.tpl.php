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
                      <p><span class="title-s">Nom: </span> <span>Martin</span></p>
                      <p><span class="title-s">Prénom: </span> <span>Jimmy</span></p>
                      <p><span class="title-s">Age: </span> <span>21 ans</span></p>
                      <p><span class="title-s">Profil: </span> <span>Développeur PHP / Symfony</span></p>
                      <p><span class="title-s">Email: </span> <span>jimmy.martin952@gmail.com</span></p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <p class="title-s">Compétences</p>
                  <span>PHP</span> <span class="pull-right">90%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>Symfony</span> <span class="pull-right">90%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>Bootstrap</span> <span class="pull-right">70%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>JavaScript</span> <span class="pull-right">65%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>HTML</span> <span class="pull-right">75%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>CSS</span> <span class="pull-right">75%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
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
                    Hello, moi, c'est Jimmy, j'habite en région parisienne.
                  </p>
                  <p class="lead">
                    Passionné d'informatique, j'ai d'abord entrepris un BTS SIO (Services Informatiques aux Organisations option SLAM (Solutions Logicielles et Applications Métier)) que j'ai arrêté car la pédagogie de l'école et le programme ne me convenaient pas.              
                  </p>
                  <p class="lead">
                    Après 2 années à travailler dans un tout autre domaine (la restauration), j'ai décidé de reprendre mes études en passant par une formation Développeur Web et Web Mobile que propose l'école O'clock dans laquelle je suis actuellement et qui se finit en Décembre 2021.
                  </p>
                  <p class="lead">
                    Après cette formation, j'aimerais continuer mes études par le moyen de l'alternance. Ainsi, si mon profil vous intéresse, je vous laisse utiliser le formulaire de contact ou bien mes liens vers mes différents réseaux sociaux afin de me contacter.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End About Section -->

  <?php require_once __DIR__ . '/../portfolio/portfolio-preview.tpl.php'; ?>