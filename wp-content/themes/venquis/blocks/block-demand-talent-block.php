<section class="bg-section demand-wrapper" id="section-8">
    <!-- <span class="shape-1"></span> -->
    <span class="shape-1"></span>
    <!-- <span class="shape-3"></span> -->
    <div class="container-lg container-md h-100">
      <div class="row h-100">
         <div class="col-lg-12">
           <h1><?php block_field( 'heading' ); ?></h1>
         </div>
      </div>
      <div class="row mt-5 mb-5">
        <div class="col-lg-3 mb-5">
          <h4 class="list-group-title"><?php block_field( 'talent-head-1' ); ?></h4>
          <ul class="list-group">
          <?php
            while ( block_rows( 'talent-detail-1' ) ) :
                block_row( 'talent-detail-1' );
                ?>
            <li class="list-group-item"><?php block_sub_field( 'talent' ); ?></li>
            <?php
      endwhile;
      ?>
          </ul>
        </div>
          <div class="col-lg-3 mb-5">
            <h4 class="list-group-title"><?php block_field( 'talent-head-2' ); ?></h4>
          <ul class="list-group">
          <?php
            while ( block_rows( 'talent-detail-2' ) ) :
                block_row( 'talent-detail-2' );
                ?>
            <li class="list-group-item"><?php block_sub_field( 'talent' ); ?></li>
            <?php
      endwhile;
      ?>
          </ul>
        </div>
        <div class="col-lg-3 mb-5">
          <h4 class="list-group-title"><?php block_field( 'talent-head-3' ); ?></h4>
          <ul class="list-group">
          <?php
            while ( block_rows( 'talent-detail-3' ) ) :
                block_row( 'talent-detail-3' );
                ?>
            <li class="list-group-item"><?php block_sub_field( 'talent' ); ?></li>
            <?php
      endwhile;
      ?>
          </ul>
        </div>
        <div class="col-lg-3 mb-5">
          <h4 class="list-group-title"><?php block_field( 'talent-head-4' ); ?></h4>
          <ul class="list-group">
          <?php
            while ( block_rows( 'talent-detail-4' ) ) :
                block_row( 'talent-detail-4' );
                ?>
            <li class="list-group-item"><?php block_sub_field( 'talent' ); ?></li>
            <?php
      endwhile;
      ?>
          </ul>
        </div>
        <div class="col-lg-3 mb-5">
          <h4 class="list-group-title"><?php block_field( 'talent-head-5' ); ?></h4>
          <ul class="list-group">
          <?php
            while ( block_rows( 'talent-detail-5' ) ) :
                block_row( 'talent-detail-5' );
                ?>
            <li class="list-group-item"><?php block_sub_field( 'talent' ); ?></li>
            <?php
      endwhile;
      ?>
          </ul>
        </div>
        <div class="col-lg-3 mb-5">
          <h4 class="list-group-title"><?php block_field( 'talent-head-6' ); ?></h4>
          <ul class="list-group">
          <?php
            while ( block_rows( 'talent-detail-6' ) ) :
                block_row( 'talent-detail-6' );
                ?>
            <li class="list-group-item"><?php block_sub_field( 'talent' ); ?></li>
            <?php
      endwhile;
      ?>
          </ul>
        </div>
        <div class="col-lg-3 mb-5">
          <h4 class="list-group-title"><?php block_field( 'talent-head-7' ); ?></h4>
          <ul class="list-group">
          <?php
            while ( block_rows( 'talent-detail-7' ) ) :
                block_row( 'talent-detail-7' );
                ?>
            <li class="list-group-item"><?php block_sub_field( 'talent' ); ?></li>
            <?php
      endwhile;
      ?>
          </ul>
        </div>
        <div class="col-lg-3 mb-5">
          <h4 class="list-group-title"><?php block_field( 'talent-head-8' ); ?></h4>
          <ul class="list-group">
          <?php
            while ( block_rows( 'talent-detail-8' ) ) :
                block_row( 'talent-detail-8' );
                ?>
            <li class="list-group-item"><?php block_sub_field( 'talent' ); ?></li>
            <?php
      endwhile;
      ?>
          </ul>
        </div>
      </div>
    </div>
  </section>