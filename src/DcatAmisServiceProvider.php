<?php

namespace Slowlyo\DcatAmis;

use Dcat\Admin\Extend\ServiceProvider;

class DcatAmisServiceProvider extends ServiceProvider
{
	public function init()
	{
		parent::init();

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dcat-amis');

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../public' => public_path('vendor/dcat-admin-extensions/slowlyo/dcat-amis')], 'public');
        }
	}
}
