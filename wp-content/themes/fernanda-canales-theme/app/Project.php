<?php 

namespace App;

use Illuminate\CustomPostType;

class Project extends CustomPostType
{
    const nombre_plural = 'Proyectos';
    const nombre_singular = 'proyecto';
    const slug = 'proyectos';

    protected static $supports = array( 'title' , 'thumbnail', 'editor');
    protected static $menu_icon = 'dashicons-building';

    public function setMetas()
    {

    }
}