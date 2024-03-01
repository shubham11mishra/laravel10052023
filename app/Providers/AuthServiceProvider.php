<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Http\Controllers\TaskController;
use App\Models\LoginUser;
use App\Models\TaskList;
use App\Policies\TaskListPolicy;
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
        TaskList::class => TaskListPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        // Gate::define('viewtasklist', function (LoginUser $loginUser, TaskList $taskList) {
        //     return $loginUser->id === $taskList->user_id;
        // });

        // Gate::define('updatetasklist', function (LoginUser $loginUser, TaskList $taskList) {
        //     return $loginUser->id === $taskList->user_id;
        // });

        // Gate::define('deletetasklist', function (LoginUser $loginUser, TaskList $taskList) {
        //     return $loginUser->id === $taskList->user_id;
        // });
    }
}
