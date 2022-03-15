<?php $bgColor = get_sub_field('bg_colour');
$noMobile = get_sub_field('hide_on_mobile');
$mainImage = get_sub_field('background_image');?>

<section
    class="timeline-slider <?php if($bgColor == true): echo 'alt-bg'; endif; ?> <?php the_sub_field('margin_size'); ?> <?php if($noMobile == true): echo 'no-mob'; endif; ?>"
    style="background-image: linear-gradient(0deg, rgba(34, 27, 11,1) 10%, rgba(34, 27, 11,0.5) 40%,rgba(34, 27, 11,0.2) 80%), url(<?php echo $mainImage['url']; ?>)"
    <?php if( get_sub_field('section_id') ): ?>id="<?php the_sub_field('section_id'); ?>" <?php endif; ?>>
    <div class="row <?php the_sub_field('column_size'); ?>">
        <div class="slider-holder">
            <h2 class="heading-<?php the_sub_field('header_size'); ?> <?php

if(get_sub_field('white_text'))
{
	echo 'alt-text';
}

?>"><?php the_sub_field('title'); ?></h2>
            <div class="slash">&#183;</div>
            <div class="clearfix desktop-carousel desktop-owl timeline owl-carousel owl-theme">

                <?php if( have_rows('timeline_items') ): ?>

                <?php while( have_rows('timeline_items') ): the_row(); ?>
                <div class="timeline-slide">
                    <div class="circle"></div>
                    <div class="timeline-copy">
                        <h3><?php the_sub_field('date'); ?></h3>
                        <p><?php the_sub_field('property'); ?></p>
                        <p class="meta"><?php the_sub_field('county'); ?></p>
                    </div>
                </div>
                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>