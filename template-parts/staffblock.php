<?php $bgColor = get_sub_field('bg_colour');
$noMobile = get_sub_field('hide_on_mobile');?>

<section
    class="staff-block <?php if($bgColor == true): echo 'alt-bg'; endif; ?> <?php the_sub_field('margin_size'); ?> <?php if($noMobile == true): echo 'no-mob'; endif; ?>"
    <?php if( get_sub_field('section_id') ): ?>id="<?php the_sub_field('section_id'); ?>" <?php endif; ?>>
    <div class="row <?php the_sub_field('column_size'); ?>">

        <?php
                if( have_rows('staff_members') ):?>

        <?php while ( have_rows('staff_members') ) : the_row();?>
        <?php $image = get_sub_field('content_image'); ?>
        <div class="staff-member">

            <div class="staff-image fmleft">



                <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>" />





            </div>

            <div class="staff-details fmright">

                <h2 class="heading-tertiary alt-text"><?php the_sub_field('content_title');?></h2>
                <p><?php the_sub_field('position');?></p>
                <div class="content-text"><?php the_sub_field('content_text');?></div>

            </div>

        </div>
        <?php endwhile; endif;?>
    </div>
    <div class="row">
        <div class="down_arrow">
            <div class="arrow bounce">
                <a class="fal fa-chevron-down fa-3x" href="#experience"></a>
            </div>
        </div>
        <div>
</section>