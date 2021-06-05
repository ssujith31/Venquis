<section class="bg-section skill-wrapper" id="section-5">
    <div class="container-lg container-md h-100">
      <div class="row h-100">
         <div class="col-lg-12">
           <h1 class="mt-5 mb-5 section-title short-title text-white"><?php block_field( 'heading' ); ?></h1>
           <p class="mt-5 mb-5 small-paragraph text-white"><?php block_field( 'sub-text' ); ?></p>
         </div>
      </div>
     <div class="row no-gutters mt-lg-5 mar-b">
     <?php
      while ( block_rows( 'skills' ) ) :
        block_row( 'skills' );
        ?>
      <div class="col-lg-4">
        <div class="box-card">
          <div class="imgBx">
            <img src="wp-content/themes/venquis/assets/images/shape-right.png" class="img-shape" alt="icon">
            <div class="icon">
              <img src="<?php block_sub_field( 'icon' ); ?>" class="img-fluid" alt="icon">
            </div>
            <div class="content">
                <h3 class="title"><?php block_sub_field( 'title' ); ?></h3>
                <p  class="description"><?php block_sub_field( 'text' ); ?></p>
            </div>
            <div class="arrow-icon">
              <a class="link link--arrowed" href="<?php block_sub_field( 'link' ); ?>"><img src="wp-content/themes/venquis/assets/images/arrow.png" class="img-fluid" alt="icon">
                <circle class="arrow-icon--circle" cx="16" cy="16" r="15.12"></circle>
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php
      endwhile;
      ?>
      
    </div>
  </section>