<?php

namespace App\Policies;

use App\Models\TaskList;
use App\Models\LoginUser;
use Illuminate\Auth\Access\Response;

class TaskListPolicy
{
    public function updatetasklist(LoginUser $loginUser , TaskList $taskList){
        return $loginUser->id === $taskList->user_id;

    }

    public function deletetasklist(LoginUser $loginUser , TaskList $taskList){
        return $loginUser->id === $taskList->user_id;

    }

    public function viewtasklist(LoginUser $loginUser , TaskList $taskList){
        return $loginUser->id === $taskList->user_id;

    }
}
