<div class="row justify-content-center align-items-center casestudy-detail">
        <div class="col-lg-10 col-xl-6">
          <h1 class="mb-4 banner-title"><?php the_title(); ?></h1>
          <div class="avatar-details d-flex align-items-center justify-content-between w-100">
          <div class="d-flex align-items-center">
            <a href="#">
            <?php echo get_avatar( get_the_author_meta('ID'), $args['96'], '', 'avatar', array('class' => 'avatar mr-2') ); ?>
            </a>
            <div>
              <div><a href="#"><?php the_author(); ?></a></div>
              <div class="text-small text-muted"><?php the_date(); ?></div>
            </div>
          </div>
          <div class="team-social">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg">
            </a>
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg">
            </a>
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg">
            </a>
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/share.svg">
            </a>
            </div>
            </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center position-relative">
        <div class="col-lg-12 col-xl-12">
          <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="Image" class="img-fluid rounded">
        </div>
      </div>
      <div class="row justify-content-center mt-5 case-contents">
        <div class="col-xl-7 col-lg-8 col-md-10">
          <article class="article">
          <?php
          
    the_content();
    ?>
          </article>
        </div>
      </div>
        <?php
    //comments_template();
    ?>