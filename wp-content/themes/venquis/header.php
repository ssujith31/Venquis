<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <?php
    wp_head();
    ?>

</head>

<body>
  <!-- Navigation -->
  <div class="desktop-nav">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 bg-white">
    <div class="container-fluid">
        <?php
         if (function_exists('the_custom_logo')) {
         the_custom_logo();

         }
?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="material-icons">
        menu
        </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php
                    wp_nav_menu(
            array(
                            'menu' => 'primary-desktop',
                            'container' => '',
                            'theme_location' => 'primary-desktop',
                            'items_wrap' => '<ul id="" class="navbar-nav mr-auto top-nav">%3$s</ul>'
                        )
        );
                ?>
      
      
      <?php
            dynamic_sidebar('top-right');
        ?>
        
      
    </div>
    </div>
  </nav>
</div>

  <div class="mobile-nav fixed-top ">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
      <div class="d-flex">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="menu-toggle">Menu</span>
      </button>
      </div>
    </nav>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php
                    wp_nav_menu(
            array(
                            'menu' => 'primary-mobile',
                            'container' => '',
                            'theme_location' => 'primary-mobile',
                            'items_wrap' => '<ul id="" class="navbar-nav mr-auto top-nav">%3$s</ul>'
                        )
        );
                ?>
    </div>
    <a class="navbar-brand logo" href="#"><img src="<?php echo get_theme_mod( 'venquis_mobile_logo' ); ?>"></a>
    
    <?php
            dynamic_sidebar('top-right');
        ?>
    
  </div>
