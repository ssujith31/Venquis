<section class="bg-section testimonal-wrapper carousel-bg" id="section-7">
    <div class="container-fluid h-100">
      <div class="row h-100">
         <div class="col-lg-12">
           <h1><?php block_field( 'heading' ); ?></h1>
         </div>
      </div>
      <div class="slider-content">
        <div class="slider single-item">
            <?php
            while ( block_rows( 'testimonials' ) ) :
                block_row( 'testimonials' );
                ?>
          <div class="quote-container">
            <div class="quote">
              <blockquote>
                <p><?php block_sub_field( 'quotes' ); ?></p>
                <cite>
                  <p class="author-name"><?php block_sub_field( 'name' ); ?></p>
                  <span class="author-des"><?php block_sub_field( 'designation' ); ?></span>
                  <img src="<?php block_sub_field( 'company-logo' ); ?>">
                </cite>
              </blockquote>
            </div>
          </div>
          <?php
      endwhile;
      ?>
          
        </div>
      </div>
    </div>
  </section>