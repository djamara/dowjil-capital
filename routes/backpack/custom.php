<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => [
        config('backpack.base.web_middleware', 'web'),
        config('backpack.base.middleware_key', 'admin'),
    ],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('collaborateur', 'CollaborateurCrudController');
    Route::crud('inspiration', 'InspirationCrudController');
    Route::crud('specialite', 'SpecialiteCrudController');
    Route::crud('presentation', 'PresentationCrudController');
    Route::crud('service', 'ServiceCrudController');
    Route::crud('informationgenerale', 'InformationGeneraleCrudController');
    Route::crud('slideaccueil', 'SlideaccueilCrudController');
    Route::crud('clientcomment', 'ClientcommentCrudController');
    Route::crud('introservice', 'IntroServiceCrudController');
}); // this should be the absolute last line of this file