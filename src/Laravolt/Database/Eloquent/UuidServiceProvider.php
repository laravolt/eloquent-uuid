<?php

namespace Laravolt\Database\Eloquent;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Laravolt\Contracts\Eloquent\Uuid;

class UuidServiceProvider extends BaseServiceProvider
{

    protected $defer = false;

    public function register()
    {
        $this->registerEvents();
    }

    public function boot()
    {
        //
    }

    public function registerEvents()
    {

        $this->app['events']->listen('eloquent.creating*', function ($model) {

            if ($model instanceof Uuid) {
                $model->fillUuid();
            }

        });

    }

}
