<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

?>

<section class="splash">
	<div class="grid__container">
		<div class="grid__row">
			<div class="splash__col flex-center">
				<div class="splash__logo">
					<?php include get_stylesheet_directory() . '/images/logo.php'; ?>
				</div>
				<div>
					<h3 class="layout__ttl">404<br> <small>Página no encontrada</small></h3>
					<p class="layout__content"><a href="<?php echo BLOGURL ?>">Regresar a inicio</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
