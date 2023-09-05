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
				<div class="card text-center p-0 shadow mb-5" data-aos="zoom-in" style="width: 18rem;">
					<img class="card-img-top" src="http://sorrisodambrosio.local/wp-content/uploads/2023/09/GIUSEPPE.jpg" alt="Card image cap">
					<div class="card-body m-2">
						<h5 class="card-title ">Dott. Giuseppe D’Ambrosio</h5><hr>
						<p class="card-text">-Laurea in Odontoiatria presso l’Università de L’Aquila</br>– Ha frequentato corsi a Parigi e Milano sulla Chirurgia Implantare e osseo-ricostruttiva. Lorem ipsum</br></p>
						<a href="#" class="btn btn-primary">Prende un appuntamento</a>
					</div>
				</div>
				<div class="card text-center p-0 shadow mb-5" data-aos="zoom-in" style="width: 18rem;">
					<img class="card-img-top" src="http://sorrisodambrosio.local/wp-content/uploads/2023/09/sty.jpeg" alt="Card image cap">
					<div class="card-body m-2">
						<h5 class="card-title text-center">Dott.ssa Stefania D’Ambrosio</h5><hr>
						<p class="card-text">-Laurea cum laude in Odontoiatria presso l’Università di Roma Tor Vergata</br>– Master in Ortodonzia fissa Linguale presso l’Università di Padova.</p>
						<a href="#" class="btn btn-primary">Prende un appuntamento</a>
					</div>
				</div>
				<div class="card p-0 text-center shadow mb-5" data-aos="zoom-in" style="width: 18rem;">
					<img class="card-img-top" src="http://sorrisodambrosio.local/wp-content/uploads/2023/09/AGA_5074.jpg" alt="Card image cap">
					<div class="card-body m-2">
						<h5 class="card-title text-center">Dott.ssa Nicoletta D’Ambrosio</h5><hr>
						<p class="card-text">– Laurea in Odontoiatria presso l’Università di Roma Tor Vergata</br>Si dedica all’ortodonzia</br>Attualmente si occupa di parodontologia ed estetica del sorriso</p>
						<a href="#" class="btn btn-primary">Prende un appuntamento</a>
					</div>
				</div>
			</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
