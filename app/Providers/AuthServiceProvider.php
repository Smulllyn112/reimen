<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\DepartmentSection' => 'App\Policies\DepartmentSectionPolicy',
        'App\DepartmentMenu' => 'App\Policies\DepartmentMenuPolicy',
        'App\Article' => 'App\Policies\ArticlePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::resource('department_section','App\Policies\DepartmentSectionPolicy');
        Gate::resource('department_menu','App\Policies\DepartmentMenuPolicy');
        Gate::resource('article','App\Policies\ArticlePolicy');

    }
}
