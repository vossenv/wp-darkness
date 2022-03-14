<?php /* Template Name: EPK Page */

require get_stylesheet_directory() . '/sitevars.php';

$sv = get_sv("epk");


get_header(); ?>
    <div id="primary" class="featured-content content-area">
        <main id="main" class="site-main">

            <div class="epk-page"><?php echo wp_get_attachment_image($sv[0], "epk-one"); ?></div>
            <div class="epk-page epk-bio" style="background-image: url('<?php echo wp_get_attachment_image_url($sv[1], "epk-one"); ?>')">
                <div id="bio-logo"><?php echo wp_get_attachment_image($sv[2], "epk-one"); ?></div>
                <span class="bb">BIO:</span>
                <br><br> <i>- Influences: <span class="bb">David Bowie & Sex Pistols</span>, add heavy guitar & outrageous costumes.</i>
                <br><br> Led by transgender, performance artist <span class="bb">Venus de Mars</span>, band <span class="bb">All The Pretty Horses</span> is a quartet, self-described as "glam-punk."
                    <br><br> This Minneapolis based trans-band [<span class="bb">ATPH</span>,] formed in 1993 with then drummer <span class="bb">Bill Bailey</span> & bassist <span class="bb">Edward Ford.</span> Their self-title debut was issued in 1994.
                <br><br> <span class="bb">Matt Bachelor</span> replaced <span class="bb">Bill</span> for their second album, "<span class="bb">Queens and Angels</span>" (<span class="bb">TRG Twin Tone</span>) along with the addition of backup singer <span class="bb">Jonnycakes (Tiffany Tieche.)</span>
                <br><br> A failed record deal with a German label in 1998 led to the band re-evaluating the need to do serious roadwork, at which point <span class="bb">Ford</span> and <span class="bb">Batchelor</span> left the fold. <span class="bb">De Mars</span> built a touring band including drummer <span class="bb">Jendeen Forberg</span> (from local jazz outfit <span class="bb">Wolverines</span>) and <span class="bb">Pandora (LeeAnn MacDougall)</span> on bass.  The new unit released "<span class="bb">Ruin</span>" (2000.)
                <br><br> <span class="bb">Eden Taylor</span> joined on bass, as <span class="bb">ATPH</span> began working with <span class="bb">Super Buddha</span>'s <span class="bb">Barb Morrison</span> as producer ("<span class="bb">CREATURE</span>" 2002.)
                <br><br> <span class="bb">Tempest</span> replaced <span class="bb">Eden</span> (2004) and toured with the band in support of rock-doc "<span class="bb">Venus of Mars</span>" (<span class="bb">Emily Goldberg</span> 2003.)
                <br><br> In 2006 <span class="bb">de Mars</span> put the band on hiatus, and released a solo-electric album: "<span class="bb">Trashed and Broken Hearted</span>" (2006 producer <span class="bb">Barb Morrison</span>.)
                <br><br> In 2008 <span class="bb">de Mars</span> reformed as "<span class="bb">Venus de Mars & All The Pretty Horses</span>" bringing <span class="bb">T-Rev (Trevor Hawley)</span> in as drumer, <span class="bb">LeFreak (J Evan)</span> as bassist, and adding <span class="bb">Raymond Breed</span> as 2nd guitar.
                <br><br> Drummer <span class="bb">Jazz Stafford</span> replaced <span class="bb">T-Rev</span> for their next album "<span class="bb">10 Bones</span>" (2011 <span class="bb">Barb Morrison</span>) & remained through a tour with "<span class="bb">Laura Jane Grace and Against Me!</span>" (2014.)  After which <span class="bb">de Mars</span> released her debut solo-acoustic album "<span class="bb">Flesh and Wire</span>" feat. <span class="bb">Laura Jane Grace</span> on single "<span class="bb">Take My Shoulder</span>" (2014 <span class="bb">Barb Morrison</span>)
                <br><br> In 2015 <span class="bb">de Mars</span> returned to <span class="bb">ATPH</span> adding <span class="bb">Susanna Sweet (Susanna Mae Schlagen)</span> to replace <span class="bb">Raymond Breed</span> as the band's 2nd guitar. <span class="bb">Mercy Victor</span> replaced <span class="bb">LeFreak</span> on bass. <span class="bb">T-Rev</span> re-joined as drummer.
                <br><br> In 2020 <span class="bb">Danimae Vossen</span> replaced <span class="bb">Mercy Victor</span> on bass.
                <br><br> As of June 2022, <span class="bb">de Mars</span> will release her 11th album; "<span class="bb">I Think The Darkness</span>" as "<span class="bb">Venus de Mars & All The Pretty Horses</span>" (<span class="bb">Barb Morison</span>)
            </div>


            <div class="epk-page epk-bio" style="background-image: url('<?php echo wp_get_attachment_image_url($sv[1], "epk-one"); ?>')">
                <div id="bio-logo"><?php echo wp_get_attachment_image($sv[2], "epk-one"); ?></div>
                <span class="bb">LINKS:</span>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
wp_enqueue_style('custom-ekp-css', get_theme_file_uri('css/epk.css'));

get_footer();

