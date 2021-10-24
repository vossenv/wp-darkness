<?php /* Template Name: Front Page */


//require get_stylesheet_directory() . '/php/teams.php';
//function get_player_row($name, $val)
//
//{
//    echo "<tr><td class='field_name'>" . $name . "</td><td>" . $val . "</td></tr>";
//}

get_header(); ?>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0"
            nonce="GUOYo3aV"></script>
    <div id="primary" class="front_page featured-content content-area">
        <main id="main" class="site-main">

            <?php

                $args = array(
    //        'post_type' => 'services',
    //        'post_status' => 'publish',
                    'posts_per_page' => 10,
    //        'orderby' => 'title',
    //        'order' => 'ASC',
    //        'cat' => 'home',
                );

                $loop = new WP_Query($args);

                while ($loop->have_posts()) : $loop->the_post();

                    if (has_post_thumbnail()) {
                        $featured_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                        echo $featured_img[0];
                    }
                    print the_title();
                    the_excerpt();
                endwhile;
                wp_reset_postdata();

            ?>


            <div id="tp-slider-home"></div>

            <div id="paintball" class="trans_row">
                <span class="section-title">XXXXX</span>
                <hr>
            </div>

            <div id="soziales" class="trans_row">
                <span class="section-title">Social</span>
                <hr>

                <div id="fb_social" class="social_col">
                    <span class="social-title">Facebook</span><br/>
                    <div class="fb-page" data-href="https://www.facebook.com/VenusdeMarsandAllThePrettyHorses"
                         data-tabs="timeline" data-width="600" data-height="665" data-small-header="false"
                         data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"></div>
                </div>
<!--                <div id="instagram_social" class="social_col">-->
<!--                    <span class="social-title">Instagram</span>-->
<!--                    --><?php //echo do_shortcode('[wdi_feed id="1"]'); ?>
<!--                </div>-->
            </div>
            <div id="events" class="trans_row">
                <span class="section-title">Events</span>
                <hr>
            </div>
            <div id="kontakt" class="trans_row">
                <span class="section-title">Contact</span>
                <hr>
                <br/>
                <p>Contact us</p>
                <?php echo do_shortcode('[wpforms id="281"]'); ?>
            </div>


            <?php get_template_part('template-parts/content', 'single'); ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
wp_enqueue_style('custom-page-css', get_theme_file_uri('css/front_page.css'));
//get_sidebar();
get_footer();

