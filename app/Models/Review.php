<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;

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

    @var array
    protected $fillable = [
        'id',
        'review_text',
        'rating',
        'user_id',
        'book_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
        # return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function books(): BelongsTo
    {
        return $this->belongsTo(Book::class);
        # return $this->belongsTo(Book::class, 'book_id', 'id');
    }
}
