<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model implements Authenticatable

{
    use HasFactory , Notifiable ;
    use \Illuminate\Auth\Authenticatable;

protected $table = 'users';

protected $casts = [
    'password' =>'hashed'
];

    protected $fillable = ['name','email', 'role_id','password'];

    public function cource():HasMany
    {
        return $this->hasMany(Course::class);
    }

    public function role():BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function news():HasMany
    {
        return $this->hasMany(NewEducation::class);
    }

    public function teacher():HasMany
    {
        return $this->hasMany(Teacher::class);
    }

    public function application():HasMany
    {
        return $this->hasMany(Application::class);
    }
}
