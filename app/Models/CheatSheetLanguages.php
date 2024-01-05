<?php

namespace App\Models;

use Database\Factories\cheatSheet\languagesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheatSheetLanguages extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return languagesFactory::new();
    }
    public function languageVersions()
    {
        return $this->hasMany(CheatSheetLanguageVersion::class);
    }
}
