<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $casts = [
        'published' => 'boolean'
    ];

    // protected $append = [];


    //    protected $fillable = ['title','body'];
    protected $guarded = [];

    //    public function getRouteKeyName()
    //    {
    //        return 'slug';
    //    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class)
            //            ->whereNull('parent_id')
            ->where('published', '=', 1);
    }

    public function Tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
    public function getPublisherAtHumanAttribute(): string
    {
        return Carbon::parse($this->published_at)->diffForHumans();
    }


    //    public  function getRouteKeyName()
    //    {
    //        return 'slug';
    //    }


    //    public function comments(): HasMany
    //    {
    //        return $this->hasMany(Comment::class);
    //    }

    //    public function users(): BelongsToMany
    //    {
    //        return $this->belongsToMany(User::class, 'post_user', 'post_id', 'user_id');
    //    }

    //    public function getTitleUpperCaseAttribute(): string
    //    {
    //        return strtoupper($this->title);
    //    }
    //
    ////    public function setTitleAttribute($value)
    ////    {
    ////        $this->attributes['title'] = strtoupper($value);
    ////    }
    //
    //    protected function title(): Attribute
    //    {
    //        return Attribute::make(
    //            set: fn(string $value) => strtoupper($value)
    //        );
    //    }
}
