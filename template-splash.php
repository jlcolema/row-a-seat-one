<?php

/* Template Name: Splash Page Template */

?>

<?php get_header(); ?>

	<div id="primary">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">

				<div class="quote-wrap">
				
					<div class="quote">
					
						<span class="left-quote">&ldquo;</span><?php the_content(); ?><span class="right-quote">&rdquo;</span>
						
					</div>

					<p class="author">&ndash; <span class="pink">B</span>e<span class="pink">B</span>e <span class="pink">J</span>ones</p>

				</div>

				<h2><a href="/home">&ndash; <span class="welcome">Welcome!</span><span class="enter">Enter Site</span> &ndash;</a></h2>

			</div>

		</article>

		<?php endwhile; endif; ?>

	</div>

<?php get_footer(); ?>
