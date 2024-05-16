<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Application extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','name','phone_number','description'];

    public function answer():HasOne
    {
        return $this->hasOne(Answer::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
