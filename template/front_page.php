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

            <div id="title"><b>ALL THE PRETTY HORSES</b></div>


            <div id="arrow-container">
                <div id="arrow-pulse"></div>
                <div id="arrow-inner">
                    <a href="#tp-slider-home">
                        <img id="arrow-img" src=<?php echo get_theme_file_uri("img/arrow.svg") ?>>
                    </a>
                </div>
            </div>

<!--            <div id="news">-->
<!--                --><?php //echo do_shortcode('[masterslider alias="ms-2"]'); ?>
<!--            </div>-->
<!--            <div id="news-mobile">-->
<!--                --><?php //echo do_shortcode('[masterslider alias="ms-2-2"]'); ?>
<!--            </div>-->

            <div id="tp-slider-home"></div>
            <div id="triggeredpaintz" class="trans_row">
                <span class="section-title">Band</span>
                <hr>
                <h3>ATPH</h3>
            </div>
<!--            <div id="verein" class="trans_row">-->
<!--                <span class="section-title">TP.tz Verein</span><br/>-->
<!--                <hr>-->
<!--            </div>-->

            <div id="paintball" class="trans_row">
                <span class="section-title">XXXXX</span>
                <hr>
            </div>
            <div id="soziales" class="trans_row">
                <span class="section-title">Social</span>
                <hr>

                <div id="fb_social" class="social_col">
                    <span class="social-title">Facebook</span>
                    <div class="fb-page" data-href="https://www.facebook.com/TriggeredPaintz"
                         data-tabs="timeline" data-width="" data-height="665" data-small-header="false"
                         data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
                </div>
                <div id="instagram_social" class="social_col">
                    <span class="social-title">Instagram</span>
                    <?php echo do_shortcode('[wdi_feed id="1"]'); ?>
                </div>
            </div>
            <div id="events" class="trans_row">
                <span class="section-title">Events</span>
                <hr>
            </div>
            <div id="kontakt" class="trans_row">
                <span class="section-title">Kontakt</span>
                <hr>
                <br/>
                <p>Haben wir dein Interesse an unserem Team geweckt? Wir freuen uns auf deine Nachricht!</p>
                <?php echo do_shortcode('[wpforms id="281"]'); ?>
            </div>
<!--            <div id="impressum" class="trans_row">-->
<!--                <span class="section-title">Impressum</span>-->
<!--                <hr>-->
<!--                <div class="impressum-text">-->
<!--                    <table id="impressum-table">-->
<!--                        <tr>-->
<!--                            <td class='field_name'>Rechtsform:</td>-->
<!--                            <td>Eingetragener Verein</td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class='field_name'>Adresse:</td>-->
<!--                            <td>TriggeredPain.tz e.V</td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class='field_name'>Telefon:</td>-->
<!--                            <td>12345868</td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class='field_name'>E-Mail:</td>-->
<!--                            <td><a href="mailto:someone@yoursite.com">vorstand@triggeredpaintz.com</a></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class='field_name'>Register:</td>-->
<!--                            <td>E127491234798</td>-->
<!--                        </tr>-->
<!--                    </table>-->
<!--                </div>-->
<!--            </div>-->

            <?php get_template_part('template-parts/content', 'single'); ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
wp_enqueue_style('custom-page-css', get_theme_file_uri('css/front_page.css'));
//get_sidebar();
get_footer();

