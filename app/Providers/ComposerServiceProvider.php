<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot() {
        \View::creator('layout.default', 'App\Http\ViewComposers\LayoutDefaultComposer');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        //
    }

}
