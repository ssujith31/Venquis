<?php
    get_header();
    // get the current taxonomy term
$term = get_queried_object();
//echo get_field('category-text', $term);       

?>
<?php if(have_rows('category_banner', $term)): ?>
    <section class="bg-section casestudy-wrapper" id="section-2">
  <div class="swiper-container mySwiper">
    <div class="swiper-wrapper">
    <?php while( have_rows('category_banner', $term) ): the_row(); ?>
      <div class="swiper-slide">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-lg-12">
              <h1 class="mb-4 banner-title top-title text-white"><?php echo get_sub_field('banner_title', $term); ?></h1>
              <a class="btn btn-save" href="<?php echo get_sub_field('button_link', $term); ?>"><?php echo get_sub_field('button_text', $term); ?></a>
            </div>
          </div>
        </div>
        <img class="img-fluid" src="<?php echo get_sub_field('banner_image', $term); ?>" />
      </div>
      <?php endwhile; ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</section>
<?php endif;  ?>
<section class="bg-section casestudy-contentbox-wrapper" id="section-2">
    <div class="container-lg container-md h-100">
        <div class="row h-100">
            <div class="col-lg-12">
                <div class="casestudy-block">
                    <div class="row mt-5">
        <!-- gets post or page content -->
		<?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                    // gets template part from template-parts.php folder
                    
                    get_template_part('template-parts/content', 'category');

                }
            }
               
        ?>
        </div>
        </div>
        </div>
        </div>
        <?php if(get_field('heading', $term)): ?>
        <div class="row">
        <div class="box-wrapper w-100">
            <div class="col-lg-12">
            <div class="jumbotron my-4 bg-gradient-1">
                <h2><?php echo get_field('heading', $term); ?></h1>
                <p class="lead"><?php echo get_field('sub_text', $term); ?></p>
                <a href="<?php echo get_field('button_link', $term); ?>" class="btn btn-primary"><?php echo get_field('button_text', $term); ?></a>
            </div>
            </div>
          </div>
        </div>
        <?php endif;  ?>
        </div>
        </section>
        

	   
    
<?php

get_footer();
?>