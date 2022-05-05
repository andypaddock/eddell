<?php $bgColor = get_sub_field('bg_colour');
$noMobile = get_sub_field('hide_on_mobile');?>

<section
    class="scroll-image <?php if($bgColor == true): echo 'alt-bg'; endif; ?> <?php the_sub_field('margin_size'); ?> <?php if($noMobile == true): echo 'no-mob'; endif; ?>"
    <?php if( get_sub_field('section_id') ): ?>id="<?php the_sub_field('section_id'); ?>" <?php endif; ?>>
    <div class="row <?php the_sub_field('column_size'); ?>">
    <?php 
$scrollImage = get_sub_field('scroll_image'); ?>
        
            <div class="single-image" style="background-image: url(<?php echo $scrollImage['url']; ?>)"></div>
        
    <div>
</section>