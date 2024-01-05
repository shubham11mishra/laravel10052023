<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheatSheetSearchTags extends Model
{
    use HasFactory;

    function cheatCodes()
    {
        return $this->belongsToMany(CheatSheetCodes::class);
    }
}
