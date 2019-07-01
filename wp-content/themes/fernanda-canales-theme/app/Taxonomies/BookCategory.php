<?php

namespace App\Taxonomies;

use Illuminate\Taxonomy;

class BookCategory extends Taxonomy
{
    const nombre_plural = 'Categorias de libros';
    const nombre_singular = 'categoria de libros';
    const slug = 'categoria-libros';

    protected static $postypes = ['book'];

    protected static $initialTerms = [
        'autoria' => 'Autoría',
        'coautoria' => 'Coautoría'
    ];

}
