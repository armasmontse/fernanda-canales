<?php 

namespace App;

use Illuminate\CustomPostType;

class Book extends CustomPostType
{
    const nombre_plural = 'Libros';
    const nombre_singular = 'libro';
    const slug = 'libros';

    protected static $supports = array( 'title' , 'thumbnail', 'editor');
    protected static $menu_icon = 'dashicons-book';

    public function setMetas()
    {

    }
}