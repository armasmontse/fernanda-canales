<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$languages = icl_get_languages('skip_missing=0');
$images = get_field('gallery');

?>

<section class="splash">
	<div class="grid__container">
		<div class="grid__row">
			<a class="splash__page-link" href="<?php BLOGURL ?>proyectos">
				<div class="splash__col">

					<div class="splash__content50">
						<div class="splash__logo">
							<?php include get_stylesheet_directory() . '/images/logo.php'; ?>
						</div>
					</div>


					<?php if( $images ): ?>
					    <div class="swiper-container">
						   <div class="swiper-wrapper">
							  <?php $i = 0; foreach( $images as $image ): ?>
								 <div class="swiper-slide">
								     <img src="<?php echo get_thumbnail_image_url($image['ID']) ; ?>" alt="">
								 </div>
							  <?php $i++; endforeach; ?>
						   </div>
					    </div>
					<?php endif; ?>
				</div>
			</a>

		</div>
	</div>
</section>

<?php get_footer(); ?>
