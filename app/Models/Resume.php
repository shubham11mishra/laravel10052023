<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;  

class Resume extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'address', 'mobile_number'];

    public function document(): HasOne
    {
        return $this->hasOne(Document::class, 'resume_id', 'id');
    }
}
