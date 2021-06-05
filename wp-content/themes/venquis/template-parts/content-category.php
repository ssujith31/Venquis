<?php $post_category = get_the_category( $post->ID );
//print_r($post_category);
?>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-4">
                    <div class="card h-100">
                      <div class="card-image">
                        <a href="<?php the_permalink(); ?>"><img class="card-img-top" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt=""></a>
                        <div class="shape case-shape">
                          <a href="<?php the_permalink(); ?>"><span><?php echo $post_category[0]->name; ?></span><br><?php echo $post_category[1]->name; ?></a>
                        </div>
                      </div>
                      <div class="card-body pl-0 pr-0">
                       <p class="card-text"><?php the_title(); ?></p>
                      </div>
                    </div>
                  </div>
                  
