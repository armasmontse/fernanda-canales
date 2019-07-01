<?php

get_header();

$args = [
    'posts_per_page' => -1,
];

$args = array_merge($args, $wp_query->query);

$query = new WP_Query($args);

?>

	<section class="proyectos">
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
						<div class="archive__wrapper-cuadricula">

							<?php while($query->have_posts()): $query->the_post(); ?>

								<div class="archive__box-cuadricula">

									<div class="post <?php echo implode(' ', pluck(get_terms_of_post(0, 'project_category'), 'slug')); ?>">
										<a href="<?php the_permalink(); ?>">
											<div class="post__aspect">
												<img class="post__aspect--imagen" src="<?php echo get_thumbnail_image_url(0, 'medium-large'); ?>" alt="">
											</div>
											<p class="post__titulo"><?php the_title(); ?><?php echo date_i18n(', Y', get_timestamp(get_field('date'))); ?></p>
										</a>
									</div>

								</div>

							<?php endwhile; ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
