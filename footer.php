	<?php
	/**
	 * The template for displaying the footer.
	 *
	 * Contains footer content and the closing of the
	 * #main and #page div elements.
	 *
	 * @package WordPress
	 * @subpackage Twenty_Twelve
	 * @since Twenty Twelve 1.0
	 */
	?>

		<div class="container centered">
			<div class="row">
				<div class="span2"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>  <!-- Left column: Categories -->
				<div class="span2"><?php dynamic_sidebar( 'sidebar-3' ); ?></div>  <!-- Middle column: Archives -->
				<div class="span2"><?php dynamic_sidebar( 'sidebar-4' ); ?></div>  <!-- Right column: Meta -->
			</div>
		</div>

		<div class="pull-right">Design by <a href="<?php echo esc_url('www.linkedin.com/in/aceatienza/'); ?>">Ace Atienza</a> '02</div>
	</div><!-- #page -->
	
	<?php wp_footer(); ?>
	</body>
</html>