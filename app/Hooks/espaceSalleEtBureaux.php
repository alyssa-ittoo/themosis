<?php

namespace App\Hooks;

use Themosis\Hook\Hookable;
use Themosis\Support\Facades\PostType;


class espaceSalleEtBureaux extends Hookable
{
    /**
     * Extend WordPress.
     */
    public function register()
    {

        PostType::make('espaces', 'Espaces salle et bureaux', 'espaces')
        ->setLabels([
            'add_new'            => 'Ajouter un espace',
            'add_new_item' => _x('Ajouter un nouvel espace', 'post_type', 'textdomain'),
            'edit_item'          => 'Editer un espace',
            'new_item'           => 'Nouvel espace',
            'view_item'          => 'Voir l\'espace',
            'all_items'          => 'Tous les espaces'
        ])
        ->setArguments([
            'public' => true,
            'menu_position' => 20,
            'supports' => ['title', 'editor', 'thumbnail', 'post_tag', 'revisions'],
            'rewrite' => false,
            'query_var' => false,
            'menu_icon' => 'dashicons-admin-home'
        ])
        ->set();

    }
}
