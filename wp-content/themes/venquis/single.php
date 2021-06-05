<?php
    get_header();
?>
<section class="bg-section casestudy-detail-wrapper" id="section-2">
    <div class="container">
    <?php
            if (have_posts()) {
                
                while (have_posts()) {
                    
                    the_post();
                    
                    // gets template part from template-parts.php folder
                    get_template_part('template-parts/content', 'article');
                    
                    
                }
            }
        ?>
      
    </div>
</section>
	   
    
<?php
get_footer();
?>