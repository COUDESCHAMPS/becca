<?php /* Template Name: InfoTemplate */ ?>

<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">




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
				<h1>Hola!</h1>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus convallis lectus eleifend tellus porta commodo.
Phasellus vehicula massa non dignissim tempus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
posuere cubilia Curae; Pellentesque nec justo eget turpis interdum rutrum. Etiam tincidunt vitae turpis quis
sollicitudin. Vivamus lacinia pulvinar auctor. Fusce hendrerit magna eu nibh varius euismod.</p>

				<p>Curabitur libero enim, lacinia vel efficitur in, iaculis nec tortor. Pellentesque quis purus ultricies, consequat dolor sit
amet, tempor orci. Nulla ultricies ipsum at urna consectetur aliquet. Integer non dolor egestas, hendrerit enim a,
malesuada tortor.
Ut fermentum sagittis nibh eget convallis. Vivamus sapien lorem, ullamcorper vel mattis nec, facilisis in ipsum.
Curabitur egestas orci sed erat malesuada, ac bibendum lacus vulputate. Vestibulum dui es.</p>

				<a href="http://www.linkdeinteresytal.com/" class="info-link">www.linkdeinteresytal.com</a>

				<p>Quisque tellus ex, tincidunt eget magna quis, porttitor lacinia odio. Fusce ullamcorper iaculis malesuada. Nunc
suscipit dolor ut diam eleifend tincidunt non et sapien. Aliquam tristique mollis urna sed condimentum. Cras lorem
purus, aliquet vel nunc et, posuere sodales eros. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
per inceptos himenaeos. Cras ac risus ex.</p>

				<p>Vivamus malesuada suscipit augue, quis varius lectus fringilla quis. Nulla dictum magna aliquam gravida ultrices.
Donec et dictum lacus. Integer a dui laoreet, vestibulum elit non, accumsan ipsum. Aliquam auctor lobortis eros
quis vulputate. Nulla sed ante volutpat, suscipit massa vitae, euismod augue. Curabitur id pulvinar ligula. Morbi sit
amet purus varius, placerat nibh vitae, ornare ligula. Curabitur tempus vulputate turpis vel gravida. Vestibulum ante
ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lorem dui, rutrum ut maximus non,
elementum nec arcu. Duis laoreet diam sem, nec lacinia lacus accumsan at.</p>

				
				<a href="http://www.rebecamenendez.com/" class="info-link">www.rebecamenendez.com</a>
				<p>Vivamus malesuada suscipit augue, quis varius lectus fringilla quis. Nulla dictum magna aliquam gravida ultrices.
Donec et dictum lacus. Integer a dui laoreet, vestibulum elit non, accumsan ipsum. Aliquam auctor lobortis eros
quis vulputate.</p>

				<a href="http://www.neongardencs.com/" class="info-link">www.neongardencs.com</a>
			</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
get_footer();
?>