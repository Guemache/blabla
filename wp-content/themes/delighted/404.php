<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package deLighted
 */

?> <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-8078771615282317" data-ad-slot="3844979014"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script><br /><?php get_header(); ?>

	<div id="primary" class="content-area full-width">

		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<header class="page-header">

					<div class="page-title entry-title title">
						<h1><?php _e( 'Oops! That page can&rsquo;t be found', 'delighted' ); ?></h1>
					</div>

				</header><!-- .page-header -->

				<div class="page-content">
				
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try the search below?', 'delighted' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->

			</section><!-- .error-404 -->

		</main><!-- #main -->

	</div><!-- #primary -->

<?php ?> <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-8078771615282317" data-ad-slot="3844979014"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script><br /><?php get_footer(); ?>