<section class="bg-section faq-wrapper" id="section-4">
    <div class="container-lg container-md h-100">
      <div class="row h-100 text-center">
         <div class="col-lg-12">
           <h1><?php block_field( 'heading' ); ?></h1>
         </div>
      </div>
      <div class="row mb-5">
          <div class="col-lg-12">
            <div class="faq-card h-100">
              <div class="faq-container">

<!-- ========== -->
<div class="accordion" id="accordionexample">
<?php
$faqs=1;
      while ( block_rows( 'faqs' ) ) :
        block_row( 'faqs' );
        ?>

  <div class="item">
     <div class="item-header" id="heading<?php echo $faqs;?>">
        <h2 class="mb-0">
           <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
              data-target="#collapse<?php echo $faqs;?>" aria-expanded="true" aria-controls="collapse<?php echo $faqs;?>">
              <span class="faq-title"><?php block_sub_field( 'faq-title' ); ?></span>
              <span class="material-icons">add</span>
           </button>
        </h2>
     </div>
     <div id="collapse<?php echo $faqs;?>" class="collapse" aria-labelledby="heading<?php echo $faqs;?>"
        data-parent="#accordionexample">
        <div class="panel-body">
        <?php block_sub_field( 'faq-text' ); ?>
          </div>
     </div>
  </div>
  <?php
  $faqs++;
      endwhile;
      ?>
</div>
<!-- ========== -->


                </div>
            </div>
          </div>
        </div>
       
      <div class="row">
        <div class="box-wrapper w-100">
            <div class="col-lg-12">
            <div class="jumbotron my-4 bg-gradient-1">
                <h2><?php block_field( 'banner-header' ); ?></h1>
                <p class="lead"><?php block_field( 'banner-text' ); ?></p>
                <a href="<?php block_field( 'button-link' ); ?>" class="btn btn-primary"><?php block_field( 'button-text' ); ?></a>
            </div>
            </div>
          </div>
        </div>
        
    </div>
  </section>