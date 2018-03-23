<?php
/* The main index file */
?>

<!DOCTYPE html>
<!--[if lt IE 7]><html lang="en-US" class="ie6"><![endif]-->
<!--[if IE 7]><html lang="en-US" class="ie7"><![endif]-->
<!--[if IE 8]><html lang="en-US" class="ie8"><![endif]-->
<!--[if IE 9]><html lang="en-US" class="ie9"><![endif]-->
<!--[if gt IE 9]><html lang="en-US"><![endif]-->
<!--[if !IE]><html lang="en-US"><![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<title>WordPress Writer and Instructor | RACHEL McCOLLIN</title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link href="https://fonts.googleapis.com/css?family=Assistant|Oswald" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div class="header-bg">
	
		<header role="banner">
	
			<hgroup class="site-name three-quarters left">
				
				<!-- site name and description - site name is inside a div element on all pages execpt the front page and/or main blog page, where it is in a h1 element -->
				<h1 id="site-title" class="one-half-left">
					<a href="https://rachelmccollin.com/" title="RACHEL McCOLLIN" rel="home">RACHEL McCOLLIN</a>
				</h1>
				
				<h2 id="site-description">Fiction and Technical Writer</h2>
			
			</hgroup>
	
			<div class="right quarter">
								
					<a class="toggle-nav" href="#">&#9776;</a>
					
			</div> <!-- .right quarter -->
		
		</header><!-- header -->
		
	</div><!-- header-bg-->
	
			
	<!-- full width navigation menu -->
	<nav class="menu main">
		  
		<div class="skip-link screen-reader-text"><a href="#content" title="Skip to content">Skip to content</a></div>
						
		<div class="main-nav">
			<ul class="menu">
				<li class="menu-item"><a href="https://rachelmccollin.com/">Home</a></li>
				<li class="menu-item"><a href="https://rachelmccollin.com/about-me/">About Me</a></li>
				<li class="menu-item"><a href="https://rachelmccollin.com/books/">Books</a></li>
				<li class="menu-item"><a href="https://rachelmccollin.com/bookclub/">Book Club</a></li>
				<li class="menu-item"><a href="https://rachelmccollin.com/blog/">Blog</a></li>
				<li class="menu-item"><a href="https://rachelmccollin.com/contact/">Contact</a></li>
			</ul>
		</div>		
		
	</nav><!-- .main -->
		

	<div class="main">
		
		<div id="content" class="two-thirds left">

			<?php while ( have_posts() ) : the_post(); //Open the loop ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
					<section class="entry-meta">
						<?php echo get_the_date(); ?>
					</section><!-- .entry-meta -->
					
					<section class="entry-content">
						<?php the_content(); ?>
					</section><!-- .entry-content -->	
			
					<section class="entry-utility">
						<?php comments_template(); ?>
					</section><!-- .entry-utility -->
					
				</article>
			
			<?php endwhile; // End the loop. ?>


		</div><!-- #content -->

		
		<aside class="sidebar one-third right">

			<aside class="widget-area">
				
				<div class="widget-container">
					
					<h3 class="widget-title">Buy My Book</h3>
					
					<img width="242" height="300" src="https://rachelmccollin.com/wp-content/uploads/2017/09/front-cover-e1506593809874-242x300.jpg" alt="WordPress: Pushing the Limits by Rachel McCollin" style="max-width: 100%; height: auto;" />
					
					<p><em>WordPress: Pushing the Limits</em> will help you become a professional WordPress developer.</p>
	
				</div>
			
			</aside>

		</aside>
		
	</div><!-- .main -->


	<footer>
	
		<div class="fatfooter">
	
			<p>Add footer content here with <a href="#">widget areas</a> - the tutorials will show you how.</p>
	
		</div>

	</footer>
	
	<?php wp_footer(); ?>

</body>
</html>

