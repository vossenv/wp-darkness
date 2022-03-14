<?php /* Template Name: EPK Page */

require get_stylesheet_directory() . '/sitevars.php';

$sv = get_sv("epk");

function get_img($name)
{
    return get_theme_file_uri("/img/albums/$name");
}

function get_album($name, $info)
{
    echo '
        <div class="album-section">
            <img class="album-image" id=' . $name . ' alt=' . $name . ' src="' . get_img($name) . '"/>
            <div class="album-info">' . $info . '</div>
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



            <div class="epk-page epk-onesheet">
                <div class="epk-one-bg">
                    <?php echo wp_get_attachment_image($sv['pages'][0], "epk-one"); ?>
                </div>
                <div class="album-col-1">
                    <?php
                    get_album('darkness.jpg', get_album_info("I Think The Darkness", 'LP Skindog - due release:', 'June 2022'));
                    get_album('flesh_and_wire.jpg', get_album_info("Flesh and WireLP/CD", 'feat. Laura Jane Grace', 'Skindog -2014'));
                    get_album('trashed.jpg', get_album_info("Trashed & Brokenhearted", '', 'Skindog -2006'));
                    get_album('creature.jpg', get_album_info("CREATURE", '', 'Skindog -2002'));
                    get_album('dolls.jpg', get_album_info("Dolls With Balls", '', 'Skindog -2001'));
                    get_album('queens_and_angels.jpg', get_album_info("Queens & Angels", '', 'Twin Tone Records -1998'));
                    get_album('animal_angst.jpg', get_album_info("AnimalAngst(LP)", '', 'Straight Face -1984'));
                    ?>
                </div>

                <div class="album-col-2">
                    <?php
                    get_album('10_bones.jpg', get_album_info("10BONESLP/CD", '', '10BONESLP/CD'));
                    get_album('venus_of_mars.jpg', get_album_info("Venusof Mars", 'CD/DVD', 'Skindog -2004'));
                    get_album('ruin.jpg', get_album_info("Ruin", '', 'Skindog -2000'));
                    get_album('atph.jpg', get_album_info("A.T.P.H", '', 'Skindog -1995'));
                    ?>
                </div>

            </div>

            <div class="epk-page epk-bio"
                 style="background-image: url('<?php echo wp_get_attachment_image_url($sv['pages'][1], "epk-one"); ?>')">
                <div id="bio-logo"><?php echo wp_get_attachment_image($sv['pages'][2], "epk-one"); ?></div>
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


            <div class="epk-page epk-bio"
                 style="background-image: url('<?php echo wp_get_attachment_image_url($sv['pages'][1], "epk-one"); ?>')">
                <div id="bio-logo"><?php echo wp_get_attachment_image($sv['pages'][2], "epk-one"); ?></div>
                <span class="bb">LINKS:</span>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
wp_enqueue_style('custom-ekp-css', get_theme_file_uri('css/epk.css'));

get_footer();

