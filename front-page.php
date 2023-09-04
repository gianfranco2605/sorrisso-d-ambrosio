<?php
/**
 * The template for display home page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sorrisodambrosio
 */

get_header();
?>

	<main id="primary" class="site-main">
	<?php sorrisodambrosio_post_thumbnail(); ?>
		
		<div class="entry-content container">
		<?php
		the_content();
		?>
	    </div><!-- .entry-content -->
		<div class="container">
			<div class="row d-flex justify-content-around">
				<div class="card text-center" style="width: 18rem;">
					<img class="card-img-top" src="http://sorrisodambrosio.local/wp-content/uploads/2023/09/GIUSEPPE.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title ">Dott. Giuseppe D’Ambrosio</h5>
						<p class="card-text">
						</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="..." alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="..." alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
