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
        <div class="col-1-of-3">
            <div class="card  <?php the_sub_field('enter_point');?>">
                <div class="card__side card__side--front">
                    <div class="card__picture card__picture--1">

                        <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />

                    </div>
                    <div class="card__title no-mob">
                        <h2 class="heading-tertiary alt-text"><?php the_sub_field('content_title');?></h2>
                        <p><?php the_sub_field('position');?></p>
                    </div>
                </div>
                <div class="card__side card__side--back card__side--back-1">
                    <div class="card__cta">
                        <div class="content-text"><?php the_sub_field('content_text');?>
                        </div>

                        <div class="rotate no-mob"><i class="fa-solid fa-reply fa-rotate-180"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; endif;?>
    </div>
</section>