<?php get_header(); ?>

	<div id="showcase">

		<?php

			if ( function_exists( 'get_smooth_slider' ) ) { get_smooth_slider(); }

		?>

	</div>

	<div class="article-wrap group">

		<div id="primary">

		<?php

			if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<div class="article-inner-wrap group">

					<div class="article-thumbnail">
		
						<a href="<?php the_permalink() ?>"><?php echo the_post_thumbnail( 'thumbnail' ); ?></a>
		
					</div>

					<div class="article-details">
		
						<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			
						<div class="entry">

							<?php the_excerpt(); ?>

							<p class="more"><a href="<?php the_permalink() ?>">Read More</a></p>

						</div>

					</div>

				</div>
	
			</article>
	
		<?php endwhile; ?>
	
		<?php include (TEMPLATEPATH . '/-/inc/nav.php' ); ?>
	
		<?php else : ?>
	
			<h2>Not Found</h2>
	
		<?php endif; ?>
	
		</div>
	
		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>
