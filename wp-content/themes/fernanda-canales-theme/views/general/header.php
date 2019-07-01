<?php

$languages = icl_get_languages('skip_missing=0');

$post_types = [
    'project' => __('Proyectos', TRANSDOMAIN),
    'book' => __('Libros', TRANSDOMAIN),
    'publication' => __('Publicaciones', TRANSDOMAIN),
    'notice' => __('Noticias', TRANSDOMAIN)
];

?>
<header id="header__JS" class="header">
     <div class="header__container">
          <div class="header__brand">
               <a class="header__logo" href="<?php echo BLOGURL ?>">
                    <h1 class="header__logo-name">FERNANDA CANALES</h1>
                    <h2 class="header__logo-arq"><?php echo __('Arquitectura', TRANSDOMAIN); ?></h2>
               </a>

               <button class="header__btn open header__menu_JS view"> <?php echo __('Menú', TRANSDOMAIN); ?> </button>
               <button class="header__btn close header__menu_JS"> <?php echo __('Cerrar', TRANSDOMAIN); ?> </button>
               <ul class="header__lg">
                    <?php foreach($languages as $language): ?>
                        <li class="header__lenguaje <?php if($language['active']): echo 'active'; endif; ?>">
                              <a href="<?php echo $language['url'] ?>" lang="<?php echo $language['code'] ?>" hreflang="<?php echo $language['code'] ?>">
                                   <?php echo substr($language['native_name'], 0, 3); ?>
                              </a>
                        </li>
                    <?php endforeach; ?>
               </ul>

          </div>

          <!-- MOVIL -->

          <div class="header__navbar" id="header__navbar__JS">
               <nav class="menu-container">
                    <ul class="header__navbar--list">
                        <?php foreach($post_types as $post_type => $name): ?>
                            <?php if ($post_type != 'book'): ?>
                                <li class="header__item"><a href="<?php echo get_post_type_archive_link($post_type); ?>"><?php echo $name; ?></a></li>
                            <?php else: ?>
                                <?php $term = get_term_by('slug', 'autoria', 'book_category'); ?>
                                <li class="header__item"><a href="<?php echo get_term_link($term); ?>"><?php echo $name; ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <li class="header__item"><a href="<?php echo specialPagePermalink('contacto'); ?>"><?php echo __('Acerca', TRANSDOMAIN); ?></a></li>
                    </ul>
               </nav>
               <ul class="header__sm">
                    <?php foreach($languages as $language): ?>
                        <li class="header__lenguaje <?php if($language['active']): echo 'active'; endif; ?>"><a href="<?php echo $language['url'] ?>" lang="<?php echo $language['code'] ?>" hreflang="<?php echo $language['code'] ?>"><?php echo substr($language['native_name'], 0, 3); ?></a></a></li>
                    <?php endforeach; ?>
               </ul>

          </div>
     </div>
</header>
