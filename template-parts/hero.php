<?php $heroImage = get_field('hero_image'); ?>
<div class="hero">

<div class="hero-text">
    <div class="row header__text-box">
        <h1 class="heading-primary fmtop">
            <span class="heading-primary--main"><?php the_field('header'); ?></span>
            <span class="heading-primary--sub"><?php the_field('sub_header'); ?></span>
        </h1>
        <div class="hero-text-box">
        <?php the_field('header_text'); ?>
        </div>
    </div>
    <div class="down_arrow">
        <div class="arrow bounce">
            <a class="fal fa-chevron-down fa-3x" href="#content"></a>
        </div>
    </div>

    </div>
    <div class="hero-image" style="background-image: url(<?php echo $heroImage['url']; ?>)"></div>
    </div>