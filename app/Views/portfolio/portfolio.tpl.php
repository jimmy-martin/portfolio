<!-- ======= Portfolio Section ======= -->
<section id="work" class="portfolio-mf sect-pt4 route sect-mt4">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="title-box text-center">
          <h3 class="title-a">
            Portfolio
          </h3>
          <p class="subtitle-a">
            Voici la liste complète de tous mes projets
          </p>
          <div class="line-mf"></div>
        </div>
      </div>
    </div>
    <?php foreach ($portfolio as $project) : ?>
      <!-- Project start-->
      <div id="<?= array_search($project, $portfolio) ?>" class="row mb-4">
        <div class="card mb-3 work-box pb-2">
          <div class="row g-0">
            <div class="col-xxl-4 text-center">
              <a href="<?= $project->getImageUrl() ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="<?= $project->getImageUrl() ?>" alt="..." class="img-fluid">
                </div>
              </a>
            </div>
            <div class="col-xxl-8">
              <div class="work-content">
                <h5 class="w-title"><?= $project->getName() ?></h5>
                <p class="card-text"><small class="text-muted"><?= $project->getSubtitle() ?></small></p>
                <div class="w-more">
                  <p class="card-text"><?= $project->getDesc() ?></p>
                  <a class="w-ctegory" href="#"><?= $project->getMainLanguage() ?></a>
                </div>
                <div class="w-like">
                  <?php if ($project->getGithubLink() !== '') : ?>
                    <a class="" href="https://github.com/jimmy-martin/pokedex" target="_blank"> <span class="bi bi-github"></span></a>
                  <?php endif; ?>
                  <?php if ($project->getSiteLink() !== '') : ?>
                    <a class="" href="https://github.com/jimmy-martin/pokedex" target="_blank"> <span class="bi bi-three-dots"></span></a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Project end-->
    <?php endforeach; ?>
  </div>
</section><!-- End Portfolio Section -->