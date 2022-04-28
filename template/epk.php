<?php /* Template Name: EPK Page */

require get_stylesheet_directory() . '/sitevars.php';

$sv = get_sv("epk");

function get_img($name)
{
    return get_theme_file_uri("/img/epk/$name");
}

function get_album($name, $info, $url=null)
{
    $url = $url ?? "https://open.spotify.com/artist/6ifvVPSqJvJ6vm64wWZ9bu";
    $id = "al-" . explode('.', $name)[0];
    echo '
        <div class="album-section">
            <a target="_blank" href="' . $url . '">
                <img class="album-image" id=' . $id . ' alt=' . $name . ' src="' . get_img($name) . '"/>
            
            <div class="album-info">' . $info . '</div>
        </a>
        </div>';
}

function get_album_info($title, $description, $release)
{
    return '  <div class="album-title">' . $title . '</div>
                <div class="album-description">' . $description . '</div>
                <div class="album-release">' . $release . '</div>';
}

get_header(); ?>
    <div id="primary" class="featured-content content-area">
        <main id="main" class="site-main">

            <div class="epk-page epk-onesheet"
                 style="background-image: url('<?php echo get_img('osna.webp'); ?>')">
                <div class="album-display">
                    <div class="album-col">
                        <?php
                        get_album('darkness.jpg', get_album_info("I Think The Darkness", 'LP Skindog - <br/>due release:', 'June 2022'));
                        get_album('flesh_and_wire.jpg', get_album_info("Flesh and WireLP/CD", 'feat. Laura Jane Grace', 'Skindog -2014'),'https://open.spotify.com/album/29Fj3pzn4JTXtACZ19khiY?fbclid=IwAR0GpONQCq7WMRN3upbZm9zYzRcl01MJPvqKFLNbUKNuKLLdbdAGaIz3agw');
                        get_album('trashed.jpg', get_album_info("Trashed & <br/>Brokenhearted", '', 'Skindog -2006'),'https://open.spotify.com/playlist/5OlYO1TbMGuK6a63CR9pzz?fbclid=IwAR3iQqEoFs7v5OXYzG5_KHKvvrdwayZ72ga318uor1XNDUwls6v_zDmwWwA');
                        get_album('creature.jpg', get_album_info("CREATURE", '', 'Skindog -2002'),'https://open.spotify.com/album/4AGWcZ73QiFypZmBKkIIf2?si=BxBCgiDHSfe--Q68TMhsXA');
                        get_album('dolls.jpg', get_album_info("Dolls With Balls", '', 'Skindog -2001'),'https://open.spotify.com/album/1c5Kq2LrCHFgrqNliQlH9J');
                        get_album('queens_and_angels.jpg', get_album_info("Queens & Angels", '', 'Twin Tone Records <br/>1998'));
                        get_album('animal_angst.jpg', get_album_info("Animal Angst(LP)", '', 'Straight Face -1984'));
                        ?>
                    </div>

                    <div class="album-col">
                        <?php
                        get_album('10_bones.jpg', get_album_info("10BONESLP/CD", '', 'Skindog -2012'),'https://open.spotify.com/artist/6ifvVPSqJvJ6vm64wWZ9bu?si=RUCC-jluQt6SwbAVgALspw');
                        get_album('venus_of_mars.jpg', get_album_info("Venus of Mars", 'CD/DVD', 'Skindog -2004'), 'http://www.venusofmars.com/');
                        get_album('ruin.jpg', get_album_info("Ruin", '', 'Skindog -2000'),'https://open.spotify.com/album/1Ds4dGLt9bkgRRSQRObxcq?si=orVc3QM5Q4S6Cc4vrAopOg');
                        get_album('atph.jpg', get_album_info("A.T.P.H", '', 'Skindog -1995'));
                        ?>
                    </div>
                </div>

            </div>

            <div class="epk-page epk-bio"
                 style="background-image: url('<?php echo get_img('bio_bg_only.webp'); ?>')">
                <div id="bio-logo">
                    <img src="<?php echo get_img('logo.webp'); ?>"/>
                </div>
                <span class="bb">BIO:</span>
                <br><br> <i>- Influences: <span class="bb">David Bowie & Sex Pistols</span>, add heavy guitar &
                    outrageous
                    costumes.</i>
                <br><br> Led by transgender, performance artist <span class="bb">Venus de Mars</span>, band <span
                        class="bb">All The Pretty Horses</span>
                is a quartet, self-described as "glam-punk."
                <br><br> This Minneapolis based trans-band [<span class="bb">ATPH</span>,] formed in 1993 with then
                drummer
                <span class="bb">Bill Bailey</span> & bassist <span class="bb">Edward Ford.</span> Their self-title
                debut was
                issued in 1994.
                <br><br> <span class="bb">Matt Bachelor</span> replaced <span class="bb">Bill</span> for their second
                album,
                "<span class="bb">Queens and Angels</span>" (<span class="bb">TRG Twin Tone</span>) along with the
                addition of
                backup singer <span class="bb">Jonnycakes (Tiffany Tieche.)</span>
                <br><br> A failed record deal with a German label in 1998 led to the band re-evaluating the need to do
                serious
                roadwork, at which point <span class="bb">Ford</span> and <span class="bb">Batchelor</span> left the
                fold. <span
                        class="bb">De Mars</span> built a touring band including drummer <span class="bb">Jendeen Forberg</span>
                (from local jazz outfit <span class="bb">Wolverines</span>) and <span
                        class="bb">Pandora (LeeAnn MacDougall)</span> on bass. The new unit released "<span
                        class="bb">Ruin</span>" (2000.)
                <br><br> <span class="bb">Eden Taylor</span> joined on bass, as <span class="bb">ATPH</span> began
                working with
                <span class="bb">Super Buddha</span>'s <span class="bb">Barb Morrison</span> as producer ("<span
                        class="bb">CREATURE</span>"
                2002.)
                <br><br> <span class="bb">Tempest</span> replaced <span class="bb">Eden</span> (2004) and toured with
                the band
                in support of rock-doc "<span class="bb">Venus of Mars</span>" (<span class="bb">Emily Goldberg</span>
                2003.)
                <br><br> In 2006 <span class="bb">de Mars</span> put the band on hiatus, and released a solo-electric
                album:
                "<span class="bb">Trashed and Broken Hearted</span>" (2006 producer <span
                        class="bb">Barb Morrison</span>.)
                <br><br> In 2008 <span class="bb">de Mars</span> reformed as "<span class="bb">Venus de Mars & All The Pretty Horses</span>"
                bringing <span class="bb">T-Rev (Trevor Hawley)</span> in as drumer, <span
                        class="bb">LeFreak (J Evan)</span> as
                bassist, and adding <span class="bb">Raymond Breed</span> as 2nd guitar.
                <br><br> Drummer <span class="bb">Jazz Stafford</span> replaced <span class="bb">T-Rev</span> for their
                next
                album "<span class="bb">10 Bones</span>" (2011 <span class="bb">Barb Morrison</span>) & remained through
                a tour
                with "<span class="bb">Laura Jane Grace and Against Me!</span>" (2014.) After which <span
                        class="bb">de Mars</span> released her debut solo-acoustic album "<span class="bb">Flesh and Wire</span>"
                feat. <span class="bb">Laura Jane Grace</span> on single "<span class="bb">Take My Shoulder</span>"
                (2014 <span
                        class="bb">Barb Morrison</span>)
                <br><br> In 2015 <span class="bb">de Mars</span> returned to <span class="bb">ATPH</span> adding <span
                        class="bb">Susanna Sweet (Susanna Mae Schlagen)</span> to replace <span
                        class="bb">Raymond Breed</span>
                as the band's 2nd guitar. <span class="bb">Mercy Victor</span> replaced <span class="bb">LeFreak</span>
                on bass.
                <span class="bb">T-Rev</span> re-joined as drummer.
                <br><br> In 2020 <span class="bb">Danimae Vossen</span> replaced <span class="bb">Mercy Victor</span> on
                bass.
                <br><br> As of June 2022, <span class="bb">de Mars</span> will release her 11th album; "<span
                        class="bb">I Think The Darkness</span>"
                as "<span class="bb">Venus de Mars & All The Pretty Horses</span>" (<span class="bb">Barb Morison</span>)
            </div>


            <div class="epk-page epk-bio" style="display: none;"
                 style="background-image: url('<?php echo get_img('bio_bg_only.webp'); ?>')">
                <div id="bio-logo"><?php echo wp_get_attachment_image($sv['pages'][2], "epk-one"); ?></div>
                <span class="bb">LINKS:</span>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
wp_enqueue_style('custom-ekp-css', get_theme_file_uri('css/epk.css'));

get_footer();

