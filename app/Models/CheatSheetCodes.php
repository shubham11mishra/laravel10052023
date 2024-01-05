<?php

namespace App\Models;

use Database\Factories\cheatSheet\cheatCodesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheatSheetCodes extends Model
{
    use HasFactory;
    protected static function newFactory()
    {
        return cheatCodesFactory::new();
    }
    function cheatHeaders()
    {
        return $this->belongsTo(CheatSheetHeaders::class);
    }
    function searchTags()
    {
        return $this->belongsToMany(CheatSheetSearchTags::class);
    }
}
