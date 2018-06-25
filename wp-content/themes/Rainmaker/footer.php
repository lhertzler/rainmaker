<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package asd
 */

?>

	</div><!-- #content -->
		<footer id="colophon" class="site-footer">
<div class="container">

		<div class="three columns">
			<h5>Our Story</h5>
			<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
		</div>
		<div class="three columns">
			<h5>Let's Connect</h5>
			<i class="fab fa-facebook-square"></i>
			<i class="fab fa-twitter-square"></i>
			<i class="fab fa-facebook-messenger"></i>
			<i class="fab fa-skype"></i>
		</div>
		<div class="three columns">
			<h5>Latest Blogs</h5>
			<?php // WP_Query arguments
					$args = array(
						'post_status'            => array( 'published' ),
						'posts_per_page'         => '3',
					);

					// The Query
					$fquery = new WP_Query( $args );

					// The Loop
					if ( $fquery->have_posts() ) {
						while ( $fquery->have_posts() ) {
							$fquery->the_post();
							the_title();
							echo '<p>' . get_the_date('F j, Y') . '</p>';
						}
					} else {
						// no posts found
					}

					// Restore original Post Data
					wp_reset_postdata(); ?>
		</div>
		<div class="three columns">
			<h5>Contact</h5>
			<?php echo do_shortcode('[contact-form-7 id="8" title="Contact form footer"]'); ?>
		</div>

</div>
<div class="site-info">
	<a href="/"><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/06/bottom-logo.png"></a><p>Copyright © 2018 All Rights Reserved</p>
</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
