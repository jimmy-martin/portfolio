 <!-- ======= Contact Section ======= -->
 <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        M'envoyer un mail
                      </h5>
                    </div>
                    <div>
                      <form action="<?= $router->generate('main-mail') ?>" method="post" role="form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse email" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet du message" required>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Votre message" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center my-3">
                            <button type="submit" class="button button-a button-big button-rouded">Envoyer votre message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Plus d'infos
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Envie de me contacter via mes r??seaux sociaux ?
                      </p>
                      <p class="lead">
                        Cliquer sur les liens juste en dessous.
                      </p>
                    </div>
                    <div class="socials">
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
    </section><!-- End Contact Section -->