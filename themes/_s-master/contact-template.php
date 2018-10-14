<?php /* Template Name: ContactTemplate */ ?>

<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="side-menu">
				
			</div>



	<div class="side-menu">
		<div class="menu-trabajos">
			<h2>Trabajo</h2>


			<div class="foto">
				<h4 id="photo-toggle"><a href="#" onclick="toggleNavigation()">Fotografía</a></h4>

				<!-- MOSTRANDO ENTRADAS EN MENU -->

					<?php query_posts('category_name=Fotografía&posts_per_page=10'); ?>		
					<?php if ( have_posts() ) {
					while ( have_posts() ) { ?>

	<ul class="lateral"><li><?php the_post(); ?><a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
	</li>

	<?php } // end while
} // end if
?>		
	</ul>
	</div> <!-- .foto -->


	<div class="ilus">
		<h4 id="ilus-toggle"><a href="#" onclick="toggleNavigation()">Ilustración</a></h4>

				<!-- MOSTRANDO ENTRADAS EN MENU -->



	<ul class="lateral_2"><li>
		<?php query_posts('category_name=graphic&posts_per_page=10'); ?>	
					<?php if ( have_posts() ) {
					while ( have_posts() ) { ?>

		<?php the_post(); ?><a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
	</li>

	<?php } // end while
} // end if
?>		
	</ul>
	</div> <!-- .ilus -->






	
		</div><!-- .menu-trabajos -->		
	</div><!-- .side-menu -->







			

			<div class="artwork-area">
			<?php echo do_shortcode( '[contact-form-7 id="83" title="Contact Rebeca"]' ); ?>

			</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
get_footer();
?>