<?php namespace Algolia\AlgoliasearchLaravel;

use Illuminate\Support\ServiceProvider;
use Vinkla\Algolia\AlgoliaManager;
use Vinkla\Algolia\Factories\AlgoliaFactory;

class AlgoliaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->setupConfig();
    }

    protected function setupConfig()
    {
        $source = realpath(__DIR__.'/../config/algolia.php');

        $this->publishes([$source => config_path('algolia.php')]);

        $this->mergeConfigFrom($source, 'algolia');
    }

    public function register()
    {
        $this->registerManager();

        \Event::subscribe('\Algolia\AlgoliasearchLaravel\EloquentSuscriber');
    }

    private function registerManager()
    {
        $this->app->register('Vinkla\Algolia\AlgoliaServiceProvider');
    }

    public function provides()
    {
        return [
            'algolia',
            'algolia.factory'
        ];
    }
}
