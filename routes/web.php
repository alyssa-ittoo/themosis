<?php

/**
 * Application routes.
 */
Route::any('home', function() {
    return view('blog.archive');
});