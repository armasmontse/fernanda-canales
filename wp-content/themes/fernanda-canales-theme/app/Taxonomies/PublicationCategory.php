<?php

namespace App\Taxonomies;

use Illuminate\Taxonomy;

class PublicationCategory extends Taxonomy
{
    const nombre_plural = 'Categorias de publicaciones';
    const nombre_singular = 'categoria de publicaciones';
    const slug = 'categoria-publicaciones';

    protected static $postypes = ['publication'];

    protected static $initialTerms = [
        'ensayos' => 'Ensayos',
        'prensa' => 'Prensa'
    ];

}
