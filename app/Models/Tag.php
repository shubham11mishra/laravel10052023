<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Scout\Searchable;

class Tag extends Model
{
    use HasFactory;
    // use Searchable;


    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }
    // public function shouldBeSearchable()
    // {
    //     return true;
    // }
}
