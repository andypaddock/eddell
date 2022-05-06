<?php $bgColor = get_sub_field('bg_colour');
$noMobile = get_sub_field('hide_on_mobile');?>

<section
    class="post-block <?php if($bgColor == true): echo 'alt-bg'; endif; ?> <?php the_sub_field('margin_size'); ?> <?php if($noMobile == true): echo 'no-mob'; endif; ?>"
    <?php if( get_sub_field('section_id') ): ?>id="<?php the_sub_field('section_id'); ?>" <?php endif; ?>>
    <div class="row <?php the_sub_field('column_size'); ?>">
        <?php 
$postImage = get_sub_field('post_image'); ?>
        <div class="split-col">
            <div class="post-image fmleft" style="background-image: url(<?php echo $postImage['url']; ?>)"></div>
            <div class="post-items">
                <h2 class="heading-primary">
                    <span class="heading-primary"><?php the_sub_field('post_title'); ?></span>
                </h2>
                <div class="post-grid">
                    <?php
$loop = new WP_Query(
    array(
        'posts_per_page' => -1,
        'post__not_in' => array( $post->ID )
    )
);
$counter = 0;
while ( $loop->have_posts() ) : $loop->the_post();
$mainImage = get_the_post_thumbnail_url(get_the_ID(),'large');
$counter++;

?>
                    <?php $terms = get_the_category( $post->ID ); ?>

                    <div class="mix quote news-item">
                        <div class="news-image"><a href="<?php echo get_permalink( $post->ID ); ?>">
                                <div class="test-image" style="background-image: url(<?php echo $mainImage; ?>)">
                                </div>
                            </a></div>
                        <div class="news-meta"> <span class="date">
                                <?php echo get_the_date( 'd/m/y' ); ?>
                            </span>
                            <h2 class="heading-tertiary alt-text upper"><?php the_title(  ); ?></h2>
                        </div>
                        <div class="news-link"> <a class="button" href="<?php echo get_permalink( $post->ID ); ?>">Read
                                More</a></div>

                    </div>
                    <?php endwhile;
wp_reset_postdata();
?>
                </div>
                <div class="row arrow-holder">
                    <div class="down_arrow">
                        <div class="arrow bounce">
                            <a class="fal fa-chevron-down fa-3x" href="#contact"></a>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>

</section>