<?php $heroImage = get_field('hero_image'); 
$heroVideo = get_field('background_video');
$heroMobile = get_field('mobile_video');
$heroPoster = get_field('video_poster');?>
<?php $heroSwitch = get_field('hero_type');
            if ($heroSwitch == 'video'): ?>


<div class="hero">
    <video playsinline autoplay muted loop poster="<?php echo $heroPoster['url'];?>" id="bgvideo">
        <?php if ($heroMobile): ?>
        <source src="<?php echo $heroMobile['url'];?>" type="video/mp4" media="all and (max-width: 480px)">
        <?php endif; ?>
        <source src="<?php echo $heroVideo['url'];?>" type="video/mp4">
    </video>
    <div class="row header__text-box">
        <h1 class="heading-<?php the_field('header_size'); ?>">
            <span class="heading-<?php the_field('header_size'); ?>--main"><?php the_field('header'); ?></span>
            <span class="heading-<?php the_field('header_size'); ?>--sub"><?php the_field('sub_header'); ?></span>
        </h1>
    </div>
    <div class="down_arrow">
        <div class="arrow bounce">
            <a class="fal fa-chevron-down fa-4x" href="#content"></a>
        </div>
    </div>

</div>

<?php elseif ($heroSwitch == 'image'):?>
<div class="hero" style="background-image: url(<?php echo $heroImage['url']; ?>)">

    <div class="row header__text-box">
        <h1 class="heading-<?php the_field('header_size'); ?> fmtop">
            <span class="heading-<?php the_field('header_size'); ?>--main"><?php the_field('header'); ?></span>
            <span class="heading-<?php the_field('header_size'); ?>--sub"><?php the_field('sub_header'); ?></span>
        </h1>
    </div>
    <div class="down_arrow">
        <div class="arrow bounce">
            <a class="fal fa-chevron-down fa-4x" href="#content"></a>
        </div>
    </div>

</div>
<?php endif;?>