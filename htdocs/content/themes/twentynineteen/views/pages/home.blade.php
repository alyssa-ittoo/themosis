@extends('layouts.main')

@section('site-content')
    <section id="primary" class="content-area">
        <main id="main" class="site-main">
            <!-- Contenu page d'accueil -->
            @while(have_posts())
                @php(the_post())
                {!! Loop::content() !!}
            @endwhile
            
            <!-- Post Types Offres avec taxonomy domiciliation -->
            @query(['post_type' => 'offres', 'tax_query' => [['taxonomy' => 'types', 'field'    => 'slug', 'terms'    => 'domiciliation']]])
                <h1>{{ Loop::title() }}</h1>
                <div>
                    {{ Loop::content() }}
                </div>
            @endquery


            <!-- Post Types Offres avec taxonomy freelance -->
            @query(['post_type' => 'offres', 'tax_query' => [['taxonomy' => 'types', 'field'    => 'slug', 'terms'    => 'freelance']]])
                <h1>{{ Loop::title() }}</h1>
                <div>
                    {{ Loop::content() }}
                </div>
            @endquery

        </main>
    </section>
@endsection