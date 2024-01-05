<?php

namespace App\Models;

use Database\Factories\cheatSheet\versionsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheatSheetLanguageVersion extends Model
{
    use HasFactory;
    protected static function newFactory()
    {
        return versionsFactory::new();
    }
    public function languageName()
    {
        return $this->belongsTo(CheatSheetLanguages::class);
    }
    public function cheatHeaders()
    {
        return $this->hasMany(CheatSheetHeaders::class);
    }
}
