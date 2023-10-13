<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class todo extends Model
{
    use HasFactory;

    protected $casts = [
        'body_json' => 'array'
    ];
//    protected $fillable = [];
    protected $guarded = [];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);

    }
}
