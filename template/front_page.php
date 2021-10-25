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
    <div id="primary" class="featured-content content-area">
        <main id="main" class="front_page site-main">
            <div class="xfront_page">

            <div id="news" class="trans_row">
                <span class="section-title">NEWS</span>
                <hr><br><br>
<!--                --><?php //echo do_shortcode('[masterslider id="2"]'); ?>

                <div class="centered">
                    <section class="cards">
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
                                    echo '<article class="card">';
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail();
//                                            $featured_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
//                                            echo '<img class="card-img" src='.$featured_img[0].'/>';
                                        }

                                        echo '<div class="card-title">';
                                            the_title();
                                        echo '</div>';
                                    echo '<div class="card-text">';
                                        the_excerpt();
                                    echo '</div>';
                                    echo '</article>';
                                endwhile;
                                wp_reset_postdata();
                            ?>
                    </section>
                </div>


            </div>
                <div id="photos" class="trans_row">
                    <span class="section-title">PHOTOS</span>
                    <hr><br/><br/>
<!--                    --><?php
//                $album = fpf_fetch_album_content( '1385515945064914', array('cols'=>6, 'max'=>14) );
//                echo $album['content'];
//                 ?>

<!--                <br/><br/><br/>-->
<!---->
            <?php echo do_shortcode('[custom-facebook-feed feed=1]'); ?>
            </div>

            <div id="social" class="trans_row">
                <span class="section-title">Social</span>
                <hr>

                <div id="fb_social" class="social_col">
                    <span class="social-title"><a target="_blank" href="https://www.facebook.com/VenusdeMarsandAllThePrettyHorses/">Facebook</a></span><br/>
<!--                    --><?php //echo do_shortcode('[fb_plugin page href="https://www.facebook.com/BBCCulture/" colorscheme="dark" height="600" width="500" tabs="timeline,events,messages" ]'); ?>
<!--                    --><?php //echo do_shortcode('[fb_plugin page href="https://www.facebook.com/VenusdeMarsandAllThePrettyHorses" colorscheme="dark"  height="665" width="500" tabs="timeline" skin="dark"]'); ?>
<!--                    --><?php //echo do_shortcode('[embedfb https://www.facebook.com/VenusdeMarsandAllThePrettyHorses/photos_by social_plugin=false ]'); ?>
                    <div class="fb-page" data-href="https://www.facebook.com/VenusdeMarsandAllThePrettyHorses"
                         data-tabs="timeline" data-width="600" data-height="665" data-small-header="false" data-colorscheme="dark" data-mobile="false"
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
            <div id="bio" class="trans_row">
                <span class="section-title">Bio</span>
                <hr>
            </div>
            <div id="members" class="trans_row">
                <span class="section-title">Members</span>
                <hr>
            </div>
            <div id="contact" class="trans_row">
                <span class="section-title">Contact</span>
                <hr>
                <br/>
                <p>Contact us</p>
                <?php echo do_shortcode('[wpforms id="281"]'); ?>
            </div>


            <?php get_template_part('template-parts/content', 'single'); ?>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
wp_enqueue_style('custom-page-css', get_theme_file_uri('css/front_page.css'));
//get_sidebar();
get_footer();

