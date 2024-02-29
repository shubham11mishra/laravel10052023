<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\LoginUser;
use App\Models\TaskList;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        Gate::define('view-tasklist', function (LoginUser $loginUser, TaskList $taskList) {
            return $loginUser->id === $taskList->user_id;
        });

        Gate::define('update-tasklist', function (LoginUser $loginUser, TaskList $taskList) {
            return $loginUser->id === $taskList->user_id;
        });

        Gate::define('delete-tasklist', function (LoginUser $loginUser, TaskList $taskList) {
            return $loginUser->id === $taskList->user_id;
        });
    }
}
