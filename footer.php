</section>
<footer class="row">
	<div class="small-12 medium-6 large-7 columns"><?php //wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?> </div>
	<div class="small-12 medium-6 large-5 columns"><?php do_action( 'foundationpress_before_footer' ); ?>
	<?php dynamic_sidebar( 'footer-widgets' ); ?>
	<?php do_action( 'foundationpress_after_footer' ); ?> </div>
 </footer>
<a class="exit-off-canvas"></a>
	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
