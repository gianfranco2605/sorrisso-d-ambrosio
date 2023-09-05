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
						<p class="card-text">-Laurea in Odontoiatria presso l’Università de L’Aquila</br>– Ha frequentato corsi a Parigi e Milano sulla Chirurgia Implantare e osseo-ricostruttiva. Lorem ipsum Lorem ipsum</br></p>
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
			<!-- ADVANCE CUSTOM FIELD -->
			<section class="tecnologie container">
				<h2 class="text-center">
					<?php the_field('tecnologie') ?>
				</h2>
				<hr>
				<p class="text-center">
				<?php the_field('tecnologie_texto') ?>
				</p>
			</section>
			<section class="techs">
				<div class="tech">
					<?php
					$tech1 = get_field( 'tech_1' );
					$img = $tech1[ 'imagine' ]['sizes']['medium_large'];
					$testo = $tech1[ 'testo' ]
                    ?>
				    <img src="<?php echo esc_attr( $img ); ?>" alt="Imagine <?php esc_attr( $testo ); ?>" />
					<p class="text-center"><?php echo esc_html( $testo ); ?></p>
				</div>
				<div class="tech">
					<?php
					$tech2 = get_field( 'tech_2' );
					$img = $tech2[ 'imagine' ]['sizes']['medium_large'];
					$testo = $tech2[ 'testo' ]
                    ?>
				    <img src="<?php echo esc_attr( $img ); ?>" alt="Imagine <?php esc_attr( $testo ); ?>" />
					<p class="text-center"><?php echo esc_html( $testo ); ?></p>
				</div>
				<div class="tech">
					<?php
					$tech3 = get_field( 'tech_3' );
					$img = $tech3[ 'imagine' ]['sizes']['medium_large'];
					$testo = $tech3[ 'testo' ]
                    ?>
				    <img src="<?php echo esc_attr( $img ); ?>" alt="Imagine <?php esc_attr( $testo ); ?>" />
					<p class="text-center"><?php echo esc_html( $testo ); ?></p>
				</div>
				<div class="tech">
					<?php
					$tech4 = get_field( 'tech_4' );
					$img = $tech4[ 'imagine' ]['sizes']['medium_large'];
					$testo = $tech4[ 'testo' ]
                    ?>
				    <img src="<?php echo esc_attr( $img ); ?>" alt="Imagine <?php esc_attr( $testo ); ?>" />
					<p class="text-center"><?php echo esc_html( $testo ); ?></p>
				</div>
				<div class="tech">
					<?php
					$tech5 = get_field( 'tech_5' );
					$img = $tech5[ 'imagine' ]['sizes']['medium_large'];
					$testo = $tech5[ 'testo' ]
                    ?>
				    <img src="<?php echo esc_attr( $img ); ?>" alt="Imagine <?php esc_attr( $testo ); ?>" />
					<p class="text-center"><?php echo esc_html( $testo ); ?></p>
				</div>
				<div class="tech">
					<?php
					$tech6 = get_field( 'tech_6' );
					$img = $tech6[ 'imagine' ]['sizes']['medium_large'];
					$testo = $tech6[ 'testo' ]
                    ?>
				    <img src="<?php echo esc_attr( $img ); ?>" alt="Imagine <?php esc_attr( $testo ); ?>" />
					<p class="text-center"><?php echo esc_html( $testo ); ?></p>
				</div>
			</section>
		</div>

	</main><!-- #main -->

<?php
get_footer();
