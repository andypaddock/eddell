<?php
/**
 * ============== Template Name: Terms and Privacy
 *
 * @package ridgeway
 */
get_header();?>
<section class="post-content">
    <div class="row w60">
        <div class="flex-container">
            <?php
 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        // the_content();
        get_template_part('template-parts/postcontent');
        endwhile;
        else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
        endif;

        ?>

        </div>
    </div>
</section>

<?php get_footer();?>