<?php $bgColor = get_sub_field('bg_colour');
$noMobile = get_sub_field('hide_on_mobile');?>
<section id="<?php the_sub_field('section_id'); ?>" class="section-title <?php if($bgColor == true): echo 'alt-bg'; endif; ?> <?php the_sub_field('margin_size'); ?> <?php if($noMobile == true): echo 'no-mob'; endif; ?>">

    <div class="row w40">

        <h2 class="heading-<?php the_sub_field('header_size'); ?> heading-<?php the_sub_field('header_size'); ?>--main <?php

if(get_sub_field('white_text'))
{
	echo 'alt-text';
}

?>"><?php the_sub_field('title'); ?></h2>



    </div>
    <div class="slash">&#183;</div>
</section>