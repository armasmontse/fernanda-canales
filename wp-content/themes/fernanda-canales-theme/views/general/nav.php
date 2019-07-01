<?php

$post_types = [
    'project' => [
        'name' => __('Proyectos', TRANSDOMAIN),
        'show_terms' => true,
    ],
    'book' => [
        'name' => __('Libros', TRANSDOMAIN),
        'show_terms' => true,
    ],
    'publication' => [
        'name' => __('Publicaciones', TRANSDOMAIN),
        'show_terms' => true,
    ],
    'notice' => [
        'name' => __('Noticias', TRANSDOMAIN),
        'show_terms' => false,
    ]
];

?>
<nav class="navbar__sidebar">
     <ul class="header__navbar--list">

        <?php foreach($post_types as $post_type => $args): ?>

            <li class="header__item <?php if(get_post_type() == $post_type): echo 'active'; endif; ?>" style="border:  0px; padding:  0px;">

                <?php if ($post_type != 'book'): ?>
                    <a href="<?php echo get_post_type_archive_link($post_type); ?>"><?php echo $args['name']; ?></a>
                <?php else: ?>
                    <?php $term = get_term_by('slug', 'autoria', 'book_category'); ?>
                    <a href="<?php echo get_term_link($term); ?>"><?php echo $args['name']; ?></a>
                <?php endif; ?>

                <?php if($args['show_terms']): ?>

                    <ul class="navbar__dropdown">

                        <!-- <li class="navbar__dropdown-item navbar__dropdown-mobile <?php if(is_post_type_archive($post_type)): echo 'select'; endif; ?>">
                            <a href="<?php echo get_post_type_archive_link($post_type ); ?>"><?php echo __('Todo', TRANSDOMAIN); ?></a>
                        </li> -->

                        <?php foreach(get_object_taxonomies($post_type) as $taxonomy): ?>

                            <?php $terms = get_terms(['taxonomy' => $taxonomy]); ?>

                            <?php foreach($terms as $term): ?>

                                <li class="navbar__dropdown-item <?php if(has_term($term, $taxonomy) && !is_post_type_archive($post_type)): echo 'select'; endif; ?>">

                                    <a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>

                                    <?php if(has_term($term, $taxonomy) && !is_post_type_archive($post_type) && $post_type == 'project'): ?>

                                        <?php

                                        $args = [
                                            'post_type' => $post_type,
                                            'posts_per_page' => -1,
                                            'tax_query' => [
                                                [
                                                    'taxonomy' => $taxonomy,
                                                    'terms' => [$term->term_id]
                                                ]
                                            ]
                                        ];

                                        $query = new WP_Query($args);

                                        if($query->have_posts()): ?>
                                            <ul class="navbar__dropdown proyectos">
                                                <?php while($query->have_posts()): $query->the_post(); ?>
                                                    <li class="navbar__dropdown-item <?php if(is_single(get_the_ID())): echo 'select'; endif; ?>"> <a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?> <?php echo the_field('year'); ?></a> </li>
                                                <?php endwhile; ?>
                                            </ul>
                                        <?php endif; wp_reset_postdata(); ?>

                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>

        <li class="header__item <?php if(is_page('contacto')): echo 'active'; endif; ?>" style="border:  0px; padding:  0px;"><a href="<?php echo apply_filters( 'wpml_permalink', specialPagePermalink('contacto')); ?>"><?php echo __('Acerca', TRANSDOMAIN); ?></a></li>
     </ul>
</nav>
