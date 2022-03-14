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

                <div id="news" class="trans_row">
                    <span class="section-title"><span class="section-hyphen">--</span>NEWS<span class="section-hyphen">--</span></span>
                    <div id="mobile-news">
                    <?php echo do_shortcode('[masterslider alias="front-page-news"]'); ?>
                    </div>
                </div>

            <div id="featured-video" class="trans_row">

<!--                <span class="section-title"><span class="section-hyphen">--</span>Video Release<span class="section-hyphen">--</span></span>-->
<!--                <h2>ATPH releases new recording and video for <a href="https://www.youtube.com/watch?v=NEaXFAln9E4">Mother Fucker</a></h2>-->
<!--                <br/>-->
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/NEaXFAln9E4?autoplay=1&start=10" title="ATPH - MotherFucker" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <h2>New video release - <a href="https://www.youtube.com/watch?v=NEaXFAln9E4">Mother Fucker</a></h2>

            </div>

                <div id="social" class="trans_row">

                    <span class="section-title"><span class="section-hyphen">--</span>Social<span class="section-hyphen">--</span></span>

<!--                    <a class="social-link" href="https://www.facebook.com/VenusdeMarsandAllThePrettyHorses/">Facebook</a>-->
<!--                    <a class="social-link" href="https://www.instagram.com/atphband/">Instagram</a>-->
                    <?php echo do_shortcode('[custom-facebook-feed feed=8]'); ?>

<!--                                        <div id="fb_social" class="social_col">-->
<!--                        <div class="fb-page" data-href="https://www.facebook.com/VenusdeMarsandAllThePrettyHorses"-->
<!--                             data-tabs="timeline"  data-height="665" data-small-header="false"-->
<!--                              data-mobile="false"-->
<!--                             data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"></div>-->
                </div>



<!--                <div id="music" class="trans_row">-->
<!--                    <span class="section-title"><span class="section-hyphen">--</span>Music<span class="section-hyphen">--</span></span>-->
<!--                </div>-->
<!---->
<!--                <div id="events" class="trans_row">-->
<!--                    <span class="section-title"><span class="section-hyphen">--</span>Events<span class="section-hyphen">--</span></span>-->
<!---->
<!--                </div>-->
<!---->
<!--                <div id="bio" class="trans_row">-->
<!--                    <span class="section-title"><span class="section-hyphen">--</span>Bio<span class="section-hyphen">--</span></span>-->
<!--                </div>-->
<!---->
<!--                <div id="members" class="trans_row">-->
<!--                    <span class="section-title"><span class="section-hyphen">--</span>Members<span class="section-hyphen">--</span></span>-->
<!--                </div>-->

                <div id="photos" class="trans_row">
                    <span class="section-title"><span class="section-hyphen">--</span>PHOTOS<span class="section-hyphen">--</span></span>
                    <?php echo do_shortcode('[Best_Wordpress_Gallery id="3"]'); ?>
                </div>

                <div id="contact" class="trans_row">
                    <span class="section-title"><span class="section-hyphen">--</span>Contact<span class="section-hyphen">--</span></span>
                    Please send us a message on
                    <a target="_blank" href="https://www.facebook.com/AllThePrettyHorsesBand">Facebook!</a>
                </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
wp_enqueue_style('custom-page-css', get_theme_file_uri('css/front_page.css'));
//get_sidebar();
get_footer();

