<?php /* Template Name: Blank Page */


require get_stylesheet_directory() . '/php/teams.php';
function get_player_row($name, $val)

{
    echo "<tr><td class='field_name'>" . $name . "</td><td>" . $val . "</td></tr>";
}

get_header(); ?>

    <div id="primary" class="front_page featured-content content-area">
        <main id="main" class="site-main">



            <?php get_template_part('template-parts/content', 'single'); ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
wp_enqueue_style('custom-page-css', get_theme_file_uri('css/front_page.css'));
//get_sidebar();
get_footer();

