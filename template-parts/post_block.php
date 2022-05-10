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


                    <?php if( have_rows('news_links') ): ?>

                    <?php while( have_rows('news_links') ): the_row(); 
        $mainImage = get_sub_field('news_image');
        $link = get_sub_field('news_link');
        $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
                    <div class="mix quote news-item">
                        <div class="news-image"><a href="<?php echo esc_url( $link_url ); ?>"
                                target="<?php echo esc_attr( $link_target ); ?>">
                                <div class="test-image"
                                    style="background-image: url(<?php echo esc_url($mainImage['sizes']['large']); ?>)">
                                </div>
                            </a></div>
                        <div class="news-meta"> <span class="date">
                                <?php the_sub_field('news_date'); ?>
                            </span>
                            <h2 class="heading-tertiary alt-text upper"><?php the_sub_field('news_headline'); ?></h2>
                        </div>
                        <div class="news-link">

                            <?php 

if( $link ): 
    
    ?>
                            <a class="button" href="<?php echo esc_url( $link_url ); ?>"
                                target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>


                        </div>

                    </div>






                    <?php endwhile; ?>
                    <?php endif; ?>

                </div>
                <div class="row arrow-holder">
                    <div class="down_arrow">
                        <div class="arrow bounce">
                            <a href="<?php the_sub_field('scroll_link'); ?>"><span class="chevron bottom"></span></a>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>

</section>