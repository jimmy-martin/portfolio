 <!-- ======= Portfolio Section ======= -->
 <section id="work" class="portfolio-mf sect-pt4 route sect-mt4">
   <div class="container">
     <div class="row">
       <div class="col-sm-12">
         <div class="title-box text-center">
           <h3 class="title-a">
             Quelques projets
           </h3>
           <p class="subtitle-a">
             Voici la liste de mes 6 derniers projets
           </p>
           <div class="line-mf"></div>
         </div>
       </div>
     </div>
     <div class="row">
       <?php foreach($portfolioPreview as $project) : ?>
       <!-- Project start-->
       <div class="col-md-4">
         <div class="work-box">
           <a href="<?= $project->getImageUrl() ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
             <div class="work-img">
               <img src="<?= $project->getImageUrl() ?>" alt="" class="img-fluid">
             </div>
           </a>
           <div class="work-content">
             <div class="row">
               <div class="col-sm-8">
                 <h2 class="w-title"><?= $project->getName() ?></h2>
                 <div class="w-more">
                   <a class="w-ctegory" href="#"><?= $project->getMainLanguage() ?></a>
                 </div>
               </div>
               <div class="col-sm-4">
                 <div class="w-like">
                   <a href="<?= $router->generate('main-portfolio') . '#' . array_search($project, $portfolioPreview)?>"> <span class="bi bi-plus-circle"></span></a>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <!-- Project end-->
       <?php endforeach; ?>
     </div>
   </div>
 </section><!-- End Portfolio Section -->