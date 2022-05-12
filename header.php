<?php
/**
 * Header
 *
 * @package Eddell
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $excerpt; ?>">
    <meta name="keywords" content=" ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo the_title(); ?></title>
    <script src="https://kit.fontawesome.com/bb03dd166d.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php if (!is_page_template('page-templates/holding.php')):?>
    <div class="nav-right">
        <div class="navbutton" id="btn">
            <div class="bar top"></div>
            <div class="bar middle"></div>
            <div class="bar bottom"></div>
        </div>
    </div>
    <?php endif; ?>

    <main>
        <?php if (!is_page_template('page-templates/holding.php')):?>


        <div class="logo-mobile"><a
                href="<?php echo site_url(); ?>"><?php get_template_part("inc/img/eddelllogo"); ?></a>
        </div>
        <div class="nav-right">
            <div class="navbutton" id="btn">
                <div class="bar top"></div>
                <div class="bar middle"></div>
                <div class="bar bottom"></div>
            </div>
        </div>

        <div class="top-navbar">
            <?php $logoSwitch = get_field('logo_color','options');
         if ($logoSwitch == 'light'): ?>
            <div class="logo"><a href="<?php echo site_url(); ?>"><?php get_template_part("inc/img/eddelllogo"); ?></a>
            </div>
            <?php elseif ($logoSwitch == 'dark'):?>
            <div class="logo"><a href="<?php echo site_url(); ?>"><?php get_template_part("inc/img/eddelllogo"); ?></a>
            </div>
            <?php endif;?>
            <nav class="main-nav">
                <menu>
                    <?wp_nav_menu( array( 
                        'theme_location' => 'main-menu',
                    ) ); ?>
                </menu>
            </nav>
        </div>


        <header class="header">
            <?php if (is_single()):?>
            <?php get_template_part('template-parts/posthero');?>
            <?php else:?>
            <?php get_template_part('template-parts/hero');?>
            <?php endif; ?>
        </header>






        <?php endif; ?>

        <!--closes in footer.php-->