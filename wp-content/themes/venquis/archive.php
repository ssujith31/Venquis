<?php
    get_header();
    the_field('category-text');
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    

?>


<section class="bg-section casestudy-contentbox-wrapper" id="section-2">
    <div class="container-lg container-md h-100">
        <div class="row h-100">
            <div class="col-lg-12">
                <div class="casestudy-block">
                    <div class="row mt-5">
        <!-- gets post or page content -->
		<?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                    // gets template part from template-parts.php folder
                    
                    get_template_part('template-parts/content', 'archive');

                }
            }
               
        ?>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section>
    
<?php
 }
}
get_footer();
?>