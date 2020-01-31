<?php

namespace App\Hooks;

use Themosis\Hook\Hookable;
use Themosis\Support\Facades\PostType;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Facades\Field;
use Themosis\Support\Section;
use Themosis\Support\Facades\Taxonomy;
use Themosis\Support\Facades\Page;
use Illuminate\Support\Facades\View;


class Offres extends Hookable
{
    /**
     * Extend WordPress.
     */
    public function register()
    {

        PostType::make('offres', 'Offres', 'Offres')
        ->setLabels([
            'add_new'            => 'Ajouter une offre',
            'add_new_item' => _x('Ajouter une offre', 'post_type', 'textdomain'),
            'edit_item'          => 'Editer une offre',
            'new_item'           => 'Nouvel offre',
            'view_item'          => 'Voir l\'offre',
            'all_items'          => 'Toutes les offres'
        ])
        ->setArguments([
            'public' => true,
            'menu_position' => 20,
            'supports' => ['title', 'editor', 'thumbnail', 'post_tag', 'revisions'],
            'rewrite' => false,
            'query_var' => false
        ])
        ->set();

        Taxonomy::make('types', 'offres', 'Types', 'Type')->set([
            'public'       => true,
            'rewrite'      => false,
            'query_var'    => false,
            'hierarchical' => true
        ]);

        
    }
}
