<section id="<?php the_sub_field('section_id'); ?>" class="section-advertblock">
    <div class="row advert-container <?php the_sub_field('column_size'); ?>">

        <?php
                if( have_rows('advertboxes') ):?>

        <?php while ( have_rows('advertboxes') ) : the_row();?>
        <?php $image = get_sub_field('content_image'); ?>
        <div class="col-1-of-3">
            <div class="card  <?php the_sub_field('enter_point');?>">
                <div class="card__side card__side--front">
                    <div class="card__picture card__picture--1">

                        <?php if( $image ): ?><img src="<?php echo esc_url($image['sizes']['medium']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" /><?php else: ?><?php the_sub_field('fallback_icon');?><?php endif; ?>

                    </div>
                    <div class="content-title no-mob">
                        <h2 class="heading-tertiary alt-text"><?php the_sub_field('content_title');?></h2>
                    </div>
                    <div class="rotate no-mob"><i class="fa-solid fa-reply fa-rotate-180"></i></div>
                </div>
                <div class="card__side card__side--back card__side--back-1">
                    <div class="card__cta">
                        <div class="content-text"><?php the_sub_field('content_text');?>
                        </div>
                        <div class="content-button">
                            <?php 
$link = get_sub_field('content_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
                            <a class="button" href="<?php echo esc_url( $link_url ); ?>"
                                target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                        <div class="rotate no-mob"><i class="fa-solid fa-reply fa-rotate-180"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; endif;?>
    </div>
</section>