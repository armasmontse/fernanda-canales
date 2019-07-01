<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<!-- S i n g l e   p u b l i c a c i o n e s -->
		<div class="single-publicaciones">

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
								<div class="archive__col-1-6">

									<div class="single-publicaciones__md">
										<div class="single-publicaciones__title">
											<?php the_title(); ?>
										</div>
										<div class="single-publicaciones__subtitle">
											<!-- <div class="single-publicaciones__filtro">
                                                <?php //foreach(get_post_taxonomies(get_the_ID()) as $taxonomy): ?>
                                                    <?php // the_terms_of_post(0, $taxonomy); ?>
                                                <?php // endforeach; ?>
											</div> -->
											<span class="single-publicaciones__lugar">
												<?php the_field('subtitle'); ?>,
											</span>
											<span class="single-publicaciones__lugar">
                                                <?php echo date_i18n('Y', get_timestamp(get_field('date'))); ?>
											</span>
										</div>
									</div>

									<div class="single-publicaciones__image">
										<div class="single-publicaciones__aspect">
											<img class="single-publicaciones__aspect--image" src="<?php echo get_thumbnail_image_url(); ?>" alt="">
										</div>
									</div>

								</div>

								<div class="archive__offset-1-3"></div>

								<div class="archive__col-1-3">

									<div class="single-publicaciones__container">
										
                                        <div class="single-publicaciones__lg single-proyecto" style="margin-bottom: 20px;">
                                            <!-- single-publicaciones__title -->
											<span class="detalles__nombre">
												<?php the_title(); ?>
											</span>
											<span class="detalles__lugar">
												<?php the_field('subtitle'); ?>
											</span>
											<span class="detalles__lugar">
												<?php echo date_i18n(', Y', get_timestamp(get_field('date'))); ?>
											</span>
										</div>

                                        <div class="single-publicaciones__descripcion">
											<?php the_content(); ?>
										</div>

										
										
                                        <div class="single-publicaciones__links">
                                            <?php if(get_field('url')): ?>
											    <a href="<?php the_field('url'); ?>" target="_blank">Ir a publicación</a>
                                            <?php endif; ?>
                                            <?php if(get_field('download')): ?>
											    <a href="<?php the_field('download'); ?>" target="_blank">Descargar .pdf</a>
                                            <?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>


	<?php endwhile; endif; ?>

<?php get_footer(); ?>
