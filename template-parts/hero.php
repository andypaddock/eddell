<?php $heroImage = get_field('hero_image'); ?>
<div class="hero">

    <div class="hero-text">
        <div class="row header__text-box">
            <h1 class="heading-primary fmtop">
                <span class="heading-primary--main"><?php the_field('header'); ?></span>
                <?php if(!get_field('company_logo')):?>
                <span class="heading-primary--sub"><?php the_field('sub_header'); ?></span>
                <?php endif; ?>

                <?php 
$quoteimage = get_field('company_logo');
if( !empty( $quoteimage ) ): ?>
                <img src="<?php echo esc_url($quoteimage['url']); ?>"
                    alt="<?php echo esc_attr($quoteimage['alt']); ?>" />
                <?php endif; ?>
            </h1>
            <div class="hero-text-box">
                <?php the_field('header_text'); ?>
            </div>
        </div>
        <div class="down_arrow">
            <div class="down_arrow">
                <div class="arrow bounce">
                    <a href="<?php the_field('scroll_link'); ?>"><span class="chevron bottom"></span></a>
                </div>
            </div>
        </div>

    </div>
    <div class="hero-image" style="background-image: url(<?php echo $heroImage['url']; ?>)"></div>
</div>