<?php get_header(); ?>

	<!-- C o n t a c t o -->
	<section class="contacto">
		<div class="archive__row">
			<div class="archive__container">
				<div class="archive__wrapper wrapper-min">
					<div class="archive__box header">

						<!-- H E A D E R -->
						<?php get_template_part('views/general/header'); ?>

					</div>
					<div class="archive__box sidebar">

						<!-- N A V -->
						<?php get_template_part('views/general/nav'); ?>

					</div>
					<div class="archive__box content">

						<div class="archive__columns">

							<div class="archive__col-1-3">
								<!-- F o t o -->
								<div class="foto">

									<div class="foto__box--aspect">
										<img class="foto__box--imagen" src="<?php echo get_thumbnail_image_url(); ?>" alt="">
									</div>

									<!-- R e d e s -->
									<div class="redes">
	                                    <?php if($contacto->social_net['mail']): ?>
										    <a class="redes__mail" href="mailto:<?php echo $contacto->social_net['mail']; ?>"><?php echo $contacto->social_net['mail']; ?></a>
	                                    <?php endif; ?>
										<?php if($contacto->social_net['twitter']['label'] && $contacto->social_net['twitter']['url']): ?>
	                                        <a class="redes__twitter" href="<?php echo $contacto->social_net['twitter']['url']; ?>" target="_blank">twitter: <?php echo $contacto->social_net['twitter']['label']; ?></a>
	                                    <?php endif; ?>
									</div>

								</div>
							</div>
							<div class="archive__col70">

								<!-- D e s c r i p c i ó n -->
								<div class="descripcion">

									<div class="descripcion__lugar"><?php the_field('subtitle'); ?></div>
									<div class="descripcion__contenido">

										<div class="descripcion__contenido--col">
                                            <?php the_field('content'); ?>
										</div>

										<div class="descripcion__contenido--col">
											<?php the_field('content_1'); ?>
										</div>

									</div>

								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
