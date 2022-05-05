<?php $bgColor = get_sub_field('bg_colour');
$noMobile = get_sub_field('hide_on_mobile');?>

<section
    class="testimonial-slider <?php if($bgColor == true): echo 'alt-bg'; endif; ?> <?php the_sub_field('margin_size'); ?> <?php if($noMobile == true): echo 'no-mob'; endif; ?>"
    <?php if( get_sub_field('section_id') ): ?>id="<?php the_sub_field('section_id'); ?>" <?php endif; ?>>
    <div class="row <?php the_sub_field('column_size'); ?>">
        <div class="owl-carousel owl-theme testimonial-carousel">

            <?php if( have_rows('short_testimonial','options') ): ?>
            <?php while( have_rows('short_testimonial','options') ): the_row(); ?>

            <div class="quote">
            <h2 class="heading-primary">
            <span class="heading-primary--main"><?php the_sub_field('testimonial');?></span>
        </h2>
        <?php if(!get_sub_field('cite_logo')):?>
            <p class="quote-cite"><?php the_sub_field('name');?></p>
            <?php endif; ?>
            <?php 
$image = get_sub_field('cite_logo');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

            </div>
            <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>

</section>

