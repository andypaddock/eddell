<?php
/**
 * ============== Template Name: Holding Page
 *
 * @package eddell
 */
get_header();?>
<?php $heroImage = get_field('background_image','options'); ?>

<section class="holding-page" style="background-image: url(<?php echo $heroImage['url']; ?>)">
    <div class="company-info">
        <?php $logoType = get_field('company_info_type','options');
                        if ($logoType == 'text'): ?>
        <h1 class="heading-secondary">
            <span class="heading-secondary--main"><?php the_field('company_info','options'); ?></span>
            <span class="heading-secondary--sub"><?php the_field('company_info_sub','options'); ?></span>
        </h1>
        <?php elseif ($logoType == 'image') :?>

        <?php $logoImage = get_field('logo','options'); ?>

        <img class="fmtop" src="<?php echo $logoImage['sizes']['large']; ?>"
            alt="<?php echo $logoImage['caption']; ?>" />



        <?php endif;?>
    </div>
    <div class="holding-message">
        <h2 class="heading-primary">
            <span class="heading-primary--main"><?php the_field('holding_message','options'); ?></span>
            <span class="heading-primary--sub"><?php the_field('holding_message_sub','options'); ?></span>
        </h2>

    </div>
    <div class="holding-links">
        <p class="upper"><?php the_field('contact_message','options'); ?></p>

        <?php if( have_rows('contact_details','options') ): ?>
        <ul class="links">
            <?php while( have_rows('contact_details','options') ): the_row(); ?>
            <li>
                <?php 
$link = get_sub_field('link','options');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
                <a href="<?php echo esc_url( $link_url ); ?>"
                    target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>
    </div>

</section>


<?php get_footer();?>