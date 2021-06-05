<footer class="bg-section footer-wrapper" id="section-foo">
    <div class="container-lg container-md h-100">
      <div class="row">
         <div class="col-lg-12">
         <?php
            dynamic_sidebar('footer-left');
        ?>
           
         </div>
      </div>
      <div class="row">
          <div class="col-lg-12">
            <div class="footer-card">
              <div class="footer-container">
                <div class="row">
                  <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                  <?php
            dynamic_sidebar('footer-logo');
        ?>
                    
                  </div>
                  <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                  <?php
                   if(has_nav_menu('footer-1')){
            $menu_obj = venquis_get_menu_by_location('footer-1'); 

            echo "<h5 class='text-uppercase'>".esc_html($menu_obj->name)."</h5>";
            wp_nav_menu(
                array(
                                'menu' => 'footer-1',
                                'container' => '',
                                'theme_location' => 'footer-1',
                                'items_wrap' => '<ul id="" class="list-unstyled mb-0">%3$s</ul>'
                            )
            );
        }
        ?>
                    
                  </div>
                  <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                  <?php
                  if(has_nav_menu('footer-2')){
            $menu_obj = venquis_get_menu_by_location('footer-2'); 

            echo "<h5 class='text-uppercase'>".esc_html($menu_obj->name)."</h5>";
            wp_nav_menu(
                array(
                                'menu' => 'footer-2',
                                'container' => '',
                                'theme_location' => 'footer-2',
                                'items_wrap' => '<ul id="" class="list-unstyled mb-0">%3$s</ul>'
                            )
            );
        }
        ?>
                  </div>
                        <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <?php
                         if(has_nav_menu('footer-3')){
            $menu_obj = venquis_get_menu_by_location('footer-3'); 

            echo "<h5 class='text-uppercase'>".esc_html($menu_obj->name)."</h5>";
            wp_nav_menu(
                array(
                                'menu' => 'footer-3',
                                'container' => '',
                                'theme_location' => 'footer-3',
                                'items_wrap' => '<ul id="" class="list-unstyled mb-0">%3$s</ul>'
                            )
            );
        }
        ?>
                  </div>
                </div>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="box-wrapper w-100">
            <div class="col-lg-12">
            <div class="footer-copy-right">
            <?php
            dynamic_sidebar('footer-copy');
        ?>
                
            </div>
            </div>
          </div>
        </div>
    </div>
  </footer>

  <?php
    wp_footer();
?>

</body>

</html>