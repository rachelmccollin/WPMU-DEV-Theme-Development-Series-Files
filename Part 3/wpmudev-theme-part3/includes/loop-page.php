<?php while ( have_posts() ) : the_post(); //Open the loop ?>
			
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<h2 class="entry-title"><?php the_title(); ?></h2>
		
		<section class="entry-content">
			<?php the_content(); ?>
		</section><!-- .entry-content -->	

		<section class="entry-utility">
			<?php comments_template(); ?>
		</section><!-- .entry-utility -->
		
	</article>

<?php endwhile; // End the loop. ?>