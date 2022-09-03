<?php get_header(); ?>
  <div class="container col-xxl-8 px-4">
    <div class="row flex-lg-row align-items-center g-5 py-5">
      <div class="col-12 col-lg-6">
        <img src="/wp-content/uploads/2022/03/EZ-Janitor-Bond-Logo-500px-PNG.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Getting started is as easy as 1... 2... 3...</h1>
        <ol class="lead">
          <li>Select 5 or less or 6 or more employees.</li>
          <li>Click on the limit and premium that’s right for you.</li>
          <li>Provide basic details about your business and payment.</li>
        </ol>
        <p class="lead">
          Then in few short minutes, your bond will arrive directly into your inbox, and just 
          like that, your employees are bonded.
        </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <ul class="nav nav-pills mt-3">
            <li class="nav-item">
              <a class="nav-link active" href="https://dopazoinsurance.propeller.insure/axelerator-public/RQ100004B70?bond_id=1621">Bid Bonds</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="https://dopazoinsurance.propeller.insure/axelerator-public/RQ100004B70?bond_id=1495">Contract Bonds</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid col-xxl-8 px-4 py-5 ez-light">
    <div class="row flex-lg-row align-items-center g-5 py-5">
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Why Choose EZJanitorialBonds.com</h1>
        <p class="lead">
          It's a fast and easy way to get your employees bonded.  Bonds are issued by A.M. Best
          Rated "A" insurance carriers and through Dopazo Insurance, a family run
          independent insurance agency in South Florida with over 20 years of experience with
          helping small businesses just like yours with their bonding and insurance needs.
          Click on the video to learn me.
        </p>
      </div>
      <div class="col-12 col-sm-12 col-lg-6">
        <img class="video vimeo-700987763" width="100%" height="66%"
          src="/wp-content/uploads/2022/05/black-video-e1651365008989.jpeg">
      </div>
    </div>
  </div>
  <?php
    if ( have_posts() ) :
      while ( have_posts() ) :
        the_post();
        ?>
          <div class="container-fluid col-xxl-8">
            <?php the_content(); ?>
          </div>
        <?php
      endwhile;
  endif;
  get_footer();
