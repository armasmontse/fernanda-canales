<?php 

namespace App\Providers;

class TaxonomyServiceProvider
{
    protected $taxonomies = [
        \App\Taxonomies\BookCategory::class,
        \App\Taxonomies\PublicationCategory::class,
        \App\Taxonomies\ProjectCategory::class,
        \App\Taxonomies\NewsCategory::class,
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        foreach($this->taxonomies as $taxonomy){
            $taxonomy::registerTaxonomy();
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}