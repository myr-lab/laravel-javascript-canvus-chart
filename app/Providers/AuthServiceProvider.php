<?php

namespace App\Providers;

use App\Post;
use App\Policies\PostPolicy;
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
       // Post::class => PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

       // define a admin user role 
        Gate::define('isAdmin', function($user) {
           return $user->role == 'admin';
        });
        
        //define a author user role 
        Gate::define('isAuthor', function($user) {
            return $user->role == 'author';
        });
    
        // define a editor role 
        Gate::define('isEditor', function($user) {
            return $user->role == 'editor';
        });
    }
}
