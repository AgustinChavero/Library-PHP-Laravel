<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id';
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = $model->{$model->getKeyName()} ?: (string) Str::uuid();
        });
    }

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'is_admin',
        'is_deleted'
    ];

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
