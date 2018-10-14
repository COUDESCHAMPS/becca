<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info"><p>Todos los derechos reservados. &copy; <a href="#">Rebeca Menéndez 2019</p></a>
				<p class="f-right">Powered by Neon Garden CS / <a href="http://www.neongardencs.com">www.neongardencs.com</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<?php wp_register_script( $handle, $src, $deps, $ver, $in_footer ); ?>



<script>

	$(document).ready(function() {
      $(".lateral").hide();	
      $(".lateral_2").hide();	
	
});

</script>


</body>
</html>
