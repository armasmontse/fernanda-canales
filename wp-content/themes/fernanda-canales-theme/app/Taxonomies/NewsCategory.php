<?php

namespace App\Taxonomies;

use Illuminate\Taxonomy;

class NewsCategory extends Taxonomy
{
    const nombre_plural = 'Categorias de noticias';
    const nombre_singular = 'categoria de noticias';
    const slug = 'categoria-noticias';

    protected static $postypes = ['notice'];

    protected static $initialTerms = [];

}
