<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blogrid
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#primary"><?php _e('Skip to content', 'blogrid'); ?></a>

<div id="page" class="site">
    <header id="masthead" class="sheader site-header clearfix">
    <div class="header-inner-mobile">
        <div class="dark-logo-container">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php endif; ?>
        </div>

        <div class="header-title-container">
            <div id="h-title-text"><b>Venus DeMars & All The Pretty Horses</b></div>
        </div>
        <div class="ham-menu">
            <a href="#" id="pull" class="toggle-mobile-menu menu-toggle" aria-controls="secondary-menu"
               aria-expanded="false"></a>
        </div>
    </div>

    <div class="header-div" style="background-image:url(<?php echo esc_url((get_header_image())); ?>)">
        <div class="header-contents">
        <!--        <div class="dark-logo-container">-->
        <!--            --><?php //if (has_custom_logo()) : ?>
        <!--                --><?php //the_custom_logo(); ?>
        <!--            --><?php //endif; ?>
        <!--        </div>-->

        <div class="header-title-container">
            <div id="h-title-text"><b>Venus DeMars<br>&<br>All The Pretty Horses</b></div>
        </div>
        <nav id="primary-site-navigation" class="primary-menu main-navigation clearfix">
            <a href="#" id="pull" class="smenu-hide toggle-mobile-menu menu-toggle" aria-controls="secondary-menu"
               aria-expanded="false"><?php esc_html_e('Menu', 'blogrid'); ?></a>
            <div class="top-nav-wrapper">
                <div class="menu-content-wrap">
                    <div class="center-main-menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'menu_id' => 'primary-menu',
                            'menu_class' => 'pmenu'
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </nav>
        </div>

    </header>

    <div class="content-wrap">


        <!-- Upper widgets -->
        <div class="header-widgets-wrapper">
            <?php if (is_active_sidebar('headerwidget-1')) : ?>
                <div class="header-widgets-three header-widgets-left">
                    <?php dynamic_sidebar('headerwidget-1'); ?>
                </div>
            <?php endif; ?>

            <?php if (is_active_sidebar('headerwidget-2')) : ?>
                <div class="header-widgets-three header-widgets-middle">
                    <?php dynamic_sidebar('headerwidget-2'); ?>
                </div>
            <?php endif; ?>

            <?php if (is_active_sidebar('headerwidget-3')) : ?>
                <div class="header-widgets-three header-widgets-right">
                    <?php dynamic_sidebar('headerwidget-3'); ?>
                </div>
            <?php endif; ?>
        </div>

    </div>

    <div id="content" class="site-content clearfix">
        <div class="content-wrap">
