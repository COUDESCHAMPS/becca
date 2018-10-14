<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */


get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="side-menu">
				<div class="menu-trabajos">
						<h2>Work</h2>
					<ul>
				
				<!-- MOSTRANDO ENTRADAS EN MENU -->

	<?php if ( have_posts() ) {
	while ( have_posts() ) { ?>

	<ul class="lateral">

	<li>	
	<?php the_post(); ?>
	       <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
	</li>

	<?php } // end while
} // end if
?>		
	</ul>	



						<li><a><?php the_title(); ?></a></li>
					</ul>
				</div>
				

			</div>
			<div class="artwork-area">

					<?php if ( have_posts() ) { while ( have_posts() ) { ?>
				<div class="art-cover">
					<a href="<? the_shortlink(); ?>" class="art-link">
					<?php the_post(); ?>
					<?php the_post_thumbnail(); ?>
				</a>
					
				</div>
					<?php } // end while 
					} // end if
					?>	
			</div>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
