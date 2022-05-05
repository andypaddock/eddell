<?php
/**
 * The template for displaying the footer
 * @package Rad Propulsion
 */
?>
<footer class="footer">
    <?php if (!is_page_template('page-templates/holding.php')):?>
    <?php $footerImage = get_field('footer_image','options'); ?>
    <div class="gradient-footer">
        <div class="footer-hero"
            style="background-image: linear-gradient(180deg, rgba(34, 27, 11,1) 0%, rgba(34, 27, 11,0) 30%), url(<?php echo $footerImage['url']; ?>)">
            <div class="footer-text-container">

                <div class="row">
                    <div class="footer-contact">
                        <div class="logo">
                            <div class="contact-block"><?php the_field('contact_block','options'); ?></div>
                        </div>
                        <div class="footer-newsletter">

                            <h2 class="heading-primary">
                                <?php the_field('footer_main_text','options'); ?>
                            </h2>
                            <div class="slash">&#183;</div>
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
            <div class="footer-link-container">
                <div class="row">
                    <div class="footer-navbar">
                        <div class="nav-area">
                            <menu>
                                <?wp_nav_menu( array( 
                        'theme_location' => 'footer-menu',
                    ) ); ?>
                            </menu>
                        </div>
                    </div>
                </div>


                <div class="row footer-privacy">
                    <div class="copyright"><?php the_field('copy_text','options'); ?></div>
                    <div class="silverless">

                    <a
                                href="<?php echo site_url(); ?>"><?php get_template_part("inc/img/eddelllogo"); ?></a>

                    </div>
                    <div class="silverless"><a href="https://silverless.co.uk">

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