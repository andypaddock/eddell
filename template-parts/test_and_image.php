<?php $bgColor = get_sub_field('bg_colour');
$noMobile = get_sub_field('hide_on_mobile');?>

<section
    class="test-with-image <?php if($bgColor == true): echo 'alt-bg'; endif; ?> <?php the_sub_field('margin_size'); ?> <?php if($noMobile == true): echo 'no-mob'; endif; ?>"
    <?php if( get_sub_field('section_id') ): ?>id="<?php the_sub_field('section_id'); ?>" <?php endif; ?>>
    <div class="row <?php the_sub_field('column_size'); ?>">
        <?php 
$testImage = get_sub_field('test_image'); ?>
        <div class="split-col">
            <div class="testimonial-container fmleft">
                <h2 class="heading-primary fmtop">
                    <span class="heading-primary--main"><?php the_sub_field('testimonial'); ?></span>
                    <?php if(!get_sub_field('cite_logo')):?>
                    <span class="heading-primary--sub"><?php the_sub_field('cite'); ?></span>
                    <?php endif; ?>
                </h2>

                <?php 
$image = get_sub_field('cite_logo');
if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <div class="down_arrow">
                    <div class="arrow bounce">
                        <a class="fal fa-chevron-down fa-3x" href="#news"></a>
                    </div>
                </div>
            </div>
            <div class="testimonial-image fmright" style="background-image: url(<?php echo $testImage['url']; ?>)">
            </div>
        </div>
    </div>

</section>