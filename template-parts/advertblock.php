<section id="<?php the_sub_field('section_id'); ?>" class="section-advertblock">
    <div class="row advert-container">
        <div class="row">
            <?php
                if( have_rows('advertboxes') ):?>

            <?php while ( have_rows('advertboxes') ) : the_row();?>
            <?php $image = get_sub_field('content_image'); ?>
            <div class="col-1-of-3">
                <div class="card  <?php the_sub_field('enter_point');?>">
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--1">
                            <i class="fa-solid fa-reply fa-rotate-180"></i>
                        </div>
                        <div class="content-title no-mob">
                            <h2 class="heading-tertiary alt-text"><?php the_sub_field('content_title');?></h2>
                        </div>
                        <div class="slash no-mob"><i class="fa-solid fa-reply fa-rotate-180"></i></div>
                        <div class="card__details">

                        </div>
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
                            <div class="slash no-mob"><i class="fa-solid fa-reply fa-rotate-180"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; endif;?>
        </div>
        <div class="large-advert">
            <?php if( have_rows('large_advert_block') ): ?>
            <?php while( have_rows('large_advert_block') ): the_row(); ?>

            <div class="advert">
                <div class="advert-text">
                    <?php get_template_part("inc/img/bulb"); ?>
                    <div class="heading-secondary"><?php the_sub_field('advert_title');?></div>
                    <div class="slash">/</div>
                    <p><?php the_sub_field('advert_text');?></p>
                    <?php 
$link = get_sub_field('advert_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
                    <a class="button" href="<?php echo esc_url( $link_url ); ?>"
                        target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
                <?php $mediaSwitch = get_sub_field('media_type');
            if ($mediaSwitch == 'image'): ?>

                <?php $advertImage = get_sub_field('advert_large_image');?>
                <div class="advert-image" style="background-image: url(<?php echo $advertImage['url']; ?>)"></div>

                <?php elseif ($mediaSwitch == 'video'):?>

                <?php $advertVideo = get_sub_field('video');
                $advertPoster = get_sub_field('video_poster');?>
                <div class="advert-video">
                    <video playsinline muted autoplay loop id="advertvideo">

                        <source src="<?php echo $advertVideo['url'];?>" type="video/mp4">
                    </video>
                </div>
                <?php endif; ?>

            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>