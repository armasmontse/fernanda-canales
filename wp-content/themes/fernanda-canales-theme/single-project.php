<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<!-- S i n g l e   p r o y e c t o -->
		<div class="single-proyecto">

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
								<div class="archive__col70">

									<!-- S l i d e r   g a l e r í a -->

                                    <?php $images = get_field('gallery'); ?>

                                    <div class="slider__aspect">

                                        <?php if( $images ): ?>
                                            <div class="slider">
                                                <?php $i = 0; foreach( $images as $image ): ?>
                                                    <div>
                                                        <div class="slider__box--aspect">
                                                            <img class="slider__box--imagen" src="<?php echo get_thumbnail_image_url($image['ID']) ; ?>" alt="<?php echo $image['alt']; ?>">
                                                        </div>

                                                    </div>
                                                <?php $i++; endforeach; ?>
                                            </div>
                                            <!-- Counter -->
											<!-- <div class="counter slider__numero">
                                            	<span id="currentSlide">1 </span> / <span> <?php // echo $i; ?></span>
											</div> -->
                                        <?php endif; ?>

                                    </div>
								</div>

								<div class="archive__col-1-3">

									<!-- D e t a l l e s -->
									<div class="detalles">

										<div class="detalles--flex">
											<!-- <span class="detalles__filtro">
		                                        <?php //foreach(get_post_taxonomies(get_the_ID()) as $taxonomy): ?>
		                                            <?php // the_terms_of_post(0, $taxonomy); ?>
											    <?php //endforeach; ?>
											</span> -->

											<span class="detalles__nombre" style="padding-right: 4px;">
												<?php the_title(); ?> 
											</span>

											<span class="detalles__lugar">
												<?php the_field('place'); ?><?php echo date_i18n(', Y', get_timestamp(get_field('date'))); ?>
											</span>
										</div>
										<div class="detalles__extracto">
											<?php the_content(); ?>
										</div>
                                        <?php get_template_part('views/single-project/share'); ?>
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
