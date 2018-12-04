</div> <!-- end main container -->
<div class="container-fluid rsrc-footer">    
	<?php if ( is_active_sidebar( 'alpha-store-footer-area' ) ) { ?>
		<div class="container">
			<div id="content-footer-section" class="row clearfix">
				<?php dynamic_sidebar( 'alpha-store-footer-area' ); ?>
			</div>
		</div>
	<?php } ?>
    <div class="rsrc-copyright">    
		<footer id="colophon" class="container" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
			<div class="row rsrc-author-credits">
				<p class="text-center">
					<?php printf( __( '© Bản quyền thuộc %s', 'alpha-store' ), '<a href="' . esc_url( "http://phukiensieure123.com/" ) . '">PHUKIENSIEURE123.COM 2016</a>' ); ?>
					<!--
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s', 'alpha-store' ), '<a href="' . esc_url( "http://themes4wp.com/theme/alpha-store" ) . '" title="Free WooCommerce WordPress Theme">Alpha Store</a>', 'Themes4WP' ); ?>
					-->
				</p>  
			</div>
		</footer>
		<div id="back-top">
			<a href="#top"><span></span></a>
		</div>
    </div>
</div>
</div>
<!-- end footer container -->

<?php wp_footer(); ?>
</body>
</html>