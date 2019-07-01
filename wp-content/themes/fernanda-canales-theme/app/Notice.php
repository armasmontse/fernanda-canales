<?php 

namespace App;

use Illuminate\CustomPostType;

class Notice extends CustomPostType
{
    const nombre_plural = 'Noticias';
    const nombre_singular = 'noticia';
    const slug = 'noticias';

    protected static $supports = array( 'title' , 'thumbnail');
    protected static $menu_icon = 'dashicons-megaphone';

    public function setMetas()
    {

    }
}