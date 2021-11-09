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
        <div class="trans-row-title">
    <div class="page-title-mobile">
        <div class="page-title-mobile-inner-container">

        <div class="title-logo-mobile">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php endif; ?>
        </div>

        <div id="page-title-text-mobile">Venus DeMars & All The Pretty Horses</div>

        <div class="ham-menu">
            <a href="#" id="pull" class="toggle-mobile-menu menu-toggle" aria-controls="secondary-menu"
               aria-expanded="false"></a>
        </div>
        </div>
    </div>

    <div class="page-title-desktop">
        <div class="page-title-desktop-inner-container">
            <div id="page-title-text-desktop">Venus DeMars</div>
            <div class="title-logo-desktop">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php endif; ?>
            </div>
            <div id="page-title-text-desktop">All The Pretty Horses</div>
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
        </div>
    <div class="header-div" >
        <img id="header-img" src="<?php echo esc_url((get_header_image())); ?>"/>
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
