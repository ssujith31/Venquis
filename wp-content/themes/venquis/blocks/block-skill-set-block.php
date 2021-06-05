<section class="bg-section skill-hiring-wrapper" id="section-2">
    <div class="container-lg container-md h-100">
      <div class="row h-100">
         <div class="col-lg-12">
           <h1><?php block_field( 'heading' ); ?></h1>
         </div>
      </div>
      <div class="row mt-5 mb-5">
                  
      <?php
      echo '<div class="col-lg-3">
      <ul class="list-group">';
      $count = 1;
      while ( block_rows( 'skill-column' ) ) :
        block_row( 'skill-column' );
        block_row_count( 'skill-column' );
        
        
    echo '<li class="list-group-item">';
    block_sub_field( 'skill' );
    echo '</li>';
    if ($count % block_field( 'skill-rows', false ) == 0 && $count<block_row_count( 'skill-column', false ))
    {
        echo '</ul>
        </div>
        <div class="col-lg-3">
         <ul class="list-group">';
    }
    $count++;
    
    endwhile;
    echo '</ul>
        </div>';
      ?>
      </div>
      <div class="row h-100">
        <div class="box-wrapper w-100">
              <div class="col-lg-12">
              <div class="jumbotron my-4 bg-gradient-2">
                  <h1 class="display-3 text-white"><?php block_field( 'banner-header' ); ?></h1>
                  <p class="lead text-white"><?php block_field( 'banner-text' ); ?></p>
                  <a href="<?php block_field( 'button-link' ); ?>" type="button" class="btn btn-secondary"><?php block_field( 'button-text' ); ?></a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>