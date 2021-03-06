<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blogrid
 */

?>
</div>
</div><!-- #content -->

<footer id="colophon" class="site-footer clearfix">

	<div class="content-wrap">
		<?php if ( is_active_sidebar( 'footerwidget-1' ) ) : ?>
			<div class="footer-column-wrapper">
				<div class="footer-column-three footer-column-left">
					<?php dynamic_sidebar( 'footerwidget-1' ); ?>
				</div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footerwidget-2' ) ) : ?>
				<div class="footer-column-three footer-column-middle">
					<?php dynamic_sidebar( 'footerwidget-2' ); ?>
				</div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footerwidget-3' ) ) : ?>
				<div class="footer-column-three footer-column-right">
					<?php dynamic_sidebar( 'footerwidget-3' ); ?>				
				</div>
			<?php endif; ?>

		</div>

		<div class="site-info footer-text">
            All Rights Reserved - Copyright 1995-2021 <span class="copyright">Skindog Productions &copy</span>
<!--			&copy;--><?php //echo date('Y'); ?><!-- --><?php //bloginfo( 'name' ); ?>
							<!-- Delete below lines to remove copyright from footer -->

            <div class="icons">
                <?php echo '<a target="_blank" href="https://www.facebook.com/VenusdeMarsandAllThePrettyHorses/">
                    <img src="'.get_theme_file_uri('/img/fb_logo.svg').'"/></a>'; ?>
            </div>
				<span class="footer-info-right">
<!--					--><?php //echo __(' | Powered by', 'blogrid') ?><!-- <a href="--><?php //echo esc_url('https://superbthemes.com/', 'blogrid'); ?><!--">--><?php //echo __('SuperbThemes', 'blogrid') ?><!--</a> --><?php //echo __('& WordPress', 'blogrid') ?>
				</span>
				<!-- Delete above lines to remove copyright from footer -->
		</div><!-- .site-info -->
	</div>



</footer><!-- #colophon -->
</div><!-- #page -->

<div id="smobile-menu" class="mobile-only"></div>
<div id="mobile-menu-overlay"></div>

<?php wp_footer(); ?>
</body>
</html>
