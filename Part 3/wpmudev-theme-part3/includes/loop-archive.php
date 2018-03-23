<?php while ( have_posts() ) : the_post(); //Open the loop ?>
			
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

		<section class="entry-meta">
			<?php echo get_the_date(); ?>
		</section><!-- .entry-meta -->
		
		<section class="entry-content">
			<?php the_content(); ?>
		</section><!-- .entry-content -->	
		
	</article>

<?php endwhile; // End the loop. ?>