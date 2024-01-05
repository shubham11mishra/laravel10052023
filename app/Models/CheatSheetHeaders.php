<?php

namespace App\Models;

use Database\Factories\cheatSheet\headersFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheatSheetHeaders extends Model
{
    use HasFactory;
    protected static function newFactory()
    {
        return headersFactory::new();
    }
    function language_version()
    {
        return $this->belongsTo(CheatSheetLanguageVersion::class);
    }
    function cheat_sheet()
    {
        return $this->hasMany(CheatSheetCodes::class);
    }
}
