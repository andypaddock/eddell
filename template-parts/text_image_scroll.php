<?php $bgColor = get_sub_field('bg_colour');
$noMobile = get_sub_field('hide_on_mobile');?>

<section
    class="text-image-scroll <?php if($bgColor == true): echo 'alt-bg'; endif; ?> <?php the_sub_field('margin_size'); ?> <?php if($noMobile == true): echo 'no-mob'; endif; ?>"
    <?php if( get_sub_field('section_id') ): ?>id="<?php the_sub_field('section_id'); ?>" <?php endif; ?>>
    <div class="row row-extended <?php the_sub_field('column_size'); ?>">
    <div class="image-scroll-container">
    <?php 
$image = get_sub_field('image'); ?>

        <div class="image-container" style="background-image: url(<?php echo $image['url']; ?>)">
           
        
        </div>
        <div class="scroll-text">
            <div class="scroll-header">
            <h2 class="heading-secondary">
            <span class="heading-secondary--main"><?php the_sub_field('header'); ?></span>
            <span class="heading-secondary--sub"><?php the_sub_field('sub_header'); ?></span>
        </h2>
            </div>
            <div class="scroll-text-content"><?php the_sub_field('scrolling_text'); ?></div>
        </div>
        </div>
    </div>
</section>