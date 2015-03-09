<?php namespace Common;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class CommonServiceProvider extends ServiceProvider {
    public function register() {}
    public function boot()
    {
        $this->package('madsen/common');
    }
}