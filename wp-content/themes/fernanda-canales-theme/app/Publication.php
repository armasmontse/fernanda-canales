<?php 

namespace App;

use Illuminate\CustomPostType;

class Publication extends CustomPostType
{
    const nombre_plural = 'Publicaciones';
    const nombre_singular = 'publicación';
    const slug = 'publicaciones';

    protected static $supports = array( 'title' , 'thumbnail', 'editor');
    protected static $menu_icon = 'dashicons-admin-page';

    public function setMetas()
    {

    }
}