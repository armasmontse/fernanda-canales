<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

?>

<section class="splash">
	<div class="grid__container">
		<div class="grid__row">
			<div class="splash__col">
				<div class="splash__logo">
					<?php include get_stylesheet_directory() . '/images/logo.php'; ?>
				</div>
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<?php for ($i=1; $i < 13; $i++): ?>
							<div class="swiper-slide">
								<img src="<?php echo THEMEURL; ?>images/<?php echo $i; ?>-min.jpg" alt="">
							</div>
						<?php endfor; ?>
					</div>
				</div>
				<div class="splash__contact">
					<h3 class="splash__contact-ttl">Contacto</h3>
					<p class="splash__contact-content">
						<a href="mailto:fernandacanales@gmail.com">fernandacanales@gmail.com</a> <br>
						<a href="tel:+525555208037">+52 (55) 5520 8037</a> <br>
						<a href="https://goo.gl/maps/JCAdS5uwA3M2">Campos Eliseos 199-302, Polanco, Ciudad de México, 11550</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
