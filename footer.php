<?php
/**
 * The template for displaying the footer
 * @package Rad Propulsion
 */
?>
<footer class="footer" id="contact">
    <?php if (!is_page_template('page-templates/holding.php')):?>
    <?php $footerImage = get_field('footer_image','options'); ?>
    <div class="gradient-footer">
        <div class="footer-hero"
            style="background-image: linear-gradient(180deg, rgba(34, 27, 11,1) 0%, rgba(34, 27, 11,0) 30%), url(<?php echo $footerImage['url']; ?>)">
            <div class="footer-text-container">

                <div class="row">
                    <div class="footer-contact">
                        <div class="contact-block">
                            <div class="contact-title">
                                <h2 class="heading-primary">
                                    <?php the_field('footer_main_text','options'); ?>

                                    <div class="slash">&#183;</div>
                                </h2>
                            </div>
                            <div class="contact-address">
                                <div class="address-block"><?php the_field('contact_block','options'); ?></div>
                                <div class="footer-newsletter">


                                    <div class="form-holder">
                                        <?php
        if ( get_field('footer_shortcode','options') ) {
            echo do_shortcode( get_field('footer_shortcode','options') );
        }
        ?></div>
                                    <?php the_field('newsletter_text','options'); ?>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer-link-container">
                <div class="row">

                    <menu class="footer-menu">
                        <?wp_nav_menu( array( 
                        'theme_location' => 'footer-menu',
                    ) ); ?>
                    </menu>

                </div>


                <div class="row footer-privacy">
                    <div class="copyright"><?php the_field('copy_text','options'); ?></div>
                    <div class="silverless centered">

                        <a href="<?php echo site_url(); ?>"><?php get_template_part("inc/img/eddelllogo"); ?></a>

                    </div>
                    <div class="silverless right"><a href="https://silverless.co.uk">

                            <?php get_template_part('inc/img/silverless', 'logo');?>

                        </a></div>
                </div>
            </div>
        </div>
    </div>






    <?php endif; ?>
</footer>
</main>
<?php if (!is_page_template('page-templates/holding.php')):?>
<div class="sidebar">
    <?wp_nav_menu( array( 
                        'theme_location' => 'mobile-menu',
                        'container' => false,
                        'menu_class' => 'sidebar-list',
                        'list_item_class'  => 'sidebar-item',
    'link_class'   => 'sidebar-anchor'
					) ); ?>
</div>
<?php endif; ?>
<?php wp_footer(); ?>
</body>

</html>