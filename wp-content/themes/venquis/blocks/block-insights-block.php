<section class="bg-section trending-wrapper" id="section-6">
    <div class="container-lg container-md h-100">
      <div class="row h-100">
         <div class="col-lg-12">
           <h1><?php block_field( 'heading' ); ?></h1>
         </div>
      </div>
      <div class="row">
          <?php
          while ( block_rows( 'insight-posts' ) ) :
            block_row( 'insight-posts' );

            $sub_post=block_sub_value( 'posts' );
$sub_post_category= get_the_category($sub_post->ID);
$sub_post_img_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $sub_post->ID ), 'medium' );
$sub_post_img_alttext = get_post_meta( get_post_thumbnail_id( $sub_post->ID ), '_wp_attachment_image_alt', true );
            ?>
          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-image">
                <a href="<?php echo get_permalink( block_sub_value( 'posts' )->ID ); ?>"><img class="card-img-top" src="<?php echo $sub_post_img_attributes[0]; ?>" alt="<?php echo $sub_post_img_alttext; ?>"></a>
              </div>
              <div class="card-body">
                <span>15 minute read</span>
               <p class="card-text mt-3"><?php block_sub_field( 'posts' ); ?></p>
              </div>
            </div>
          </div>
          <?php
      endwhile;
      ?>
        </div>
        <div class="row h-100 mt-4 mt-4">
         <div class="col-lg-12">
           <a href="<?php block_field( 'insight-link' ); ?>" class="active-link"><?php block_field( 'insight-text' ); ?></a>
         </div>
      </div>
      <div class="row h-100">
        <div class="box-wrapper w-100">
              <div class="col-lg-12">
              <div class="jumbotron my-4 bg-gradient-2">
                  <h1 class="display-3 text-white"><?php block_field( 'banners-head' ); ?></h1>
                  <a type="button" class="btn btn-secondary" href="<?php block_field( 'button-link' ); ?>"><?php block_field( 'button-text' ); ?></a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>