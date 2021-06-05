<section class="bg-section company-hiring-wrapper" id="section-3">
    <div class="container-lg container-md h-100">
      <div class="row h-100">
         <div class="col-lg-12">
           <h1><?php block_field( 'heading' ); ?></h1>
           <p class="mt-4 mb-5"><?php block_field( 'sub-text' ); ?></p>
         </div>
      </div>
      <?php
      $main_post=block_value( 'main-post' );
$main_post_category= get_the_category($main_post->ID);
$post_img_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $main_post->ID ), 'thumbnail' );
$post_img_alttext = get_post_meta( get_post_thumbnail_id( $main_post->ID ), '_wp_attachment_image_alt', true );

      ?>
      <div class="row h-100 mb-4">
         <div class="col-lg-12">
            <div class="card">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                          <img src="<?php echo $post_img_attributes[0]; ?>" alt="<?php echo $post_img_alttext; ?>" class="img-fluid" alt="icon" style="width:100%">
                    </div>
                    <div class="card-body linear-box">
                       <div class="case-shape"><a href="<?php echo get_permalink( block_value( 'main-post' )->ID ); ?>"><span><?php echo $main_post_category[0]->name; ?></span><br><?php echo $main_post_category[1]->name; ?></a></div>
                        <p class="lead"><?php block_field( 'main-post' ); ?></p>
                    </div>
                </div>
            </div>
         </div>
      </div>
      <div class="row">
      <?php
      while ( block_rows( 'sub-posts' ) ) :
        block_row( 'sub-posts' );

        $sub_post=block_sub_value( 'sub-post' );
$sub_post_category= get_the_category($sub_post->ID);
$sub_post_img_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $sub_post->ID ), 'thumbnail' );
$sub_post_img_alttext = get_post_meta( get_post_thumbnail_id( $sub_post->ID ), '_wp_attachment_image_alt', true );
        ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-image">
                <a href="<?php echo get_permalink( block_sub_value( 'sub-post' )->ID ); ?>"><img class="card-img-top" src="<?php echo $sub_post_img_attributes[0]; ?>" alt="<?php echo $post_img_alttext; ?>"></a>
                <div class="shape case-shape">
                  <a href="<?php echo get_permalink( block_sub_value( 'sub-post' )->ID ); ?>"><span><?php echo $sub_post_category[0]->name; ?></span><br><?php echo $sub_post_category[1]->name; ?></a>
                </div>
              </div>
              <div class="card-body">
               <p class="card-text"><?php block_sub_field( 'sub-post' ); ?></p>
              </div>
            </div>
          </div>
          
          <?php
      endwhile;
      ?>
        </div>
        <div class="row h-100 mt-4 mt-4">
         <div class="col-lg-12">
           <a href="<?php block_field( 'main-category-link' ); ?>" class="active-link"><?php block_field( 'main-category-text' ); ?></a>
         </div>
      </div>
      <div class="row h-100">
        <div class="box-wrapper w-100">
              <div class="col-lg-12">
              <div class="jumbotron my-4 bg-gradient-2">
                  <h1 class="display-3 text-white"><?php block_field( 'banner-header' ); ?></h1>
                  <a href="<?php block_field( 'button-link' ); ?>" type="button" class="btn btn-secondary"><?php block_field( 'button-text' ); ?></a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>