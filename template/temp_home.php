<?php /* Template Name: WIP Front Page */


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
                    <span class="section-title">In progress !!</span>
                    <hr><br/><br/>
                    Check back very soon for music, news and more!
<!--                    --><?php //echo do_shortcode('[masterslider id="3"]'); ?>
                </div>


<!--                <div id="photos" class="trans_row">-->
<!--                    <span class="section-title">PHOTOS</span>-->
<!--                    <hr><br/><br/>-->
<!--                    --><?php //echo do_shortcode('[custom-facebook-feed feed=1]'); ?>
<!--                </div>-->
<!---->
                <div id="social" class="trans_row">
                    <span class="section-title">Social</span>
                    <hr>
                    <div id="fb_social" class="social_col">
                        <span class="social-title"><a target="_blank"
                                                      href="https://www.facebook.com/VenusdeMarsandAllThePrettyHorses/">
                                Facebook</a></span><br/>
                        <div class="fb-page" data-href="https://www.facebook.com/VenusdeMarsandAllThePrettyHorses"
                             data-tabs="timeline" data-width="600" data-height="665" data-small-header="false"
                             data-colorscheme="dark" data-mobile="false"
                             data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"></div>
                    </div>
                    <!--                <div id="instagram_social" class="social_col">-->
                    <!--                    <span class="social-title">Instagram</span>-->
                    <!--                    --><?php //echo do_shortcode('[wdi_feed id="1"]'); ?>
                    <!--                </div>-->
<!--                </div>-->
<!--                <div id="music" class="trans_row">-->
<!--                    <span class="section-title">Music</span>-->
<!--                    <hr>-->
<!--                    <br/><br/>-->
<!--                </div>-->
<!--                <div id="events" class="trans_row">-->
<!--                    <span class="section-title">Events</span>-->
<!--                    <hr>-->
<!--                    <br/><br/>-->
<!--                </div>-->
<!--                <div id="bio" class="trans_row">-->
<!--                    <span class="section-title">Bio</span>-->
<!--                    <hr>-->
<!--                </div>-->
<!--                <div id="members" class="trans_row">-->
<!--                    <span class="section-title">Members</span>-->
<!--                    <hr>-->
<!--                </div>-->
                <div id="contact" class="trans_row">
                    <span class="section-title">Contact</span>
                    <hr>
                    <br/>
                    <?php echo do_shortcode('[wpforms id="45"]'); ?>
                </div>
<!--                --><?php //get_template_part('template-parts/content', 'single'); ?>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
wp_enqueue_style('custom-page-css', get_theme_file_uri('css/front_page.css'));
//get_sidebar();
get_footer();

