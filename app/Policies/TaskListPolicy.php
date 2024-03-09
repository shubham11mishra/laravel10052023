<?php

namespace App\Policies;

use App\Models\TaskList;
use App\Models\LoginUser;
use Illuminate\Auth\Access\Response;

class TaskListPolicy
{
    public function updatetasklist(LoginUser $loginUser , TaskList $taskList){
        return $loginUser->id === $taskList->user_id && $loginUser->hasPermission('update-task');

    }

    public function deletetasklist(LoginUser $loginUser , TaskList $taskList){
        return $loginUser->id === $taskList->user_id && $loginUser->hasPermission('delete-task');
        // return $loginUser->hasPermission('delete-task');

    }

    public function viewtasklist(LoginUser $loginUser , TaskList $taskList){
        return $loginUser->id === $taskList->user_id && $loginUser->hasPermission('edit-task');
        // return $loginUser->hasPermission('edit-task');

    }
}
