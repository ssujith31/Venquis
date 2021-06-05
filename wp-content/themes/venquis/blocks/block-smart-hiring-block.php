  <!-- smart hiring -->
  <section class="bg-section smart-hiring-wrapper" id="section-1">
    <div class="container-lg container-md h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-7">
          <h1 class="mt-sm-3 mt-5 mb-sm-5 mb-5 section-title short-title"><?php block_field( 'heading' ); ?></h1>
          <p class="lead"><?php block_field( 'intro-text' ); ?></p>
        </div>
      </div>

        <div class="row mt-5">
        <div class="col-lg-4">
         <div class="icon-content first-content">
          <div class="content">
            <h2 class="service-first-box"><?php block_field( 'sub-heading' ); ?></h2>
          </div>
        </div>
      </div>
      <?php
      while ( block_rows( 'talents-detail' ) ) :
        block_row( 'talents-detail' );
        ?>
      <div class="col-lg-4">
        <div class="icon-content">
          <div class="icon">
           <img src="<?php block_sub_field( 'icon' ); ?>" class="img-fluid" alt="icon">
          </div>
          <div class="content">
          <h3 class="title"><?php block_sub_field( 'talent-title' ); ?></h3>
          <p  class="description"><?php block_sub_field( 'talent-text' ); ?></p>
          </div>
        </div>
      </div>
      <?php
      endwhile;
      ?>
     
      </div>

      <div class="row">
        <div class="box-wrapper w-100">
            <div class="col-lg-12">
            <div class="jumbotron my-4 bg-gradient-1">
                <h2><?php block_field( 'hiring-banner-header' ); ?></h2>
                <p class="lead"><?php block_field( 'hiring-banner-text' ); ?></p>
                <a href="<?php block_field( 'button-link' ); ?>" class="btn btn-primary"><?php block_field( 'button-text' ); ?></a>
            </div>
            </div>
          </div>
        </div>
    </div>
  </section>