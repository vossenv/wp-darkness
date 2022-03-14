<?php /* Template Name: Front Page */

require get_stylesheet_directory() . '/sitevars.php';
$sv = get_sv("front_page");

get_header(); ?>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0"
            nonce="GUOYo3aV"></script>
    <div id="primary" class="featured-content content-area">
        <main id="main" class="front_page site-main">

<!--                <div id="news" class="trans_row">-->
<!--                    <span class="section-title"><span class="section-hyphen">--</span>NEWS<span class="section-hyphen">--</span></span>-->
<!--                    <div id="mobile-news">-->
<!--                    --><?php //echo do_shortcode('[masterslider alias="front-page-news"]'); ?>
<!--                    </div>-->
<!--                </div>-->

            <div id="featured-video" class="trans_row">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/NEaXFAln9E4?autoplay=1&start=10&mute=1" title="ATPH - MotherFucker" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <h2>New video release - <a href="https://www.youtube.com/watch?v=NEaXFAln9E4">Mother Fucker</a></h2>
            </div>

                <div id="social" class="trans_row">
                    <span class="section-title"><span class="section-hyphen">--</span>Social<span class="section-hyphen">--</span></span>
                    <?php echo do_shortcode('[custom-facebook-feed feed='.$sv['social_id'].']'); ?>
                </div>

                <div id="photos" class="trans_row">
                    <span class="section-title"><span class="section-hyphen">--</span>PHOTOS<span class="section-hyphen">--</span></span>
                    <?php echo do_shortcode('[Best_Wordpress_Gallery id="'.$sv['photos_id'].'"]'); ?>
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
get_footer();

