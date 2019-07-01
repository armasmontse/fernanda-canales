<?php

namespace App\Taxonomies;

use Illuminate\Taxonomy;

class ProjectCategory extends Taxonomy
{
    const nombre_plural = 'Categorias de proyectos';
    const nombre_singular = 'categoria de proyectos';
    const slug = 'categoria-proyectos';

    protected static $postypes = ['project'];

    protected static $initialTerms = [
        'obras-construidas' => 'Obras construidas',
        'proyectos' => 'Proyectos'
    ];

}
