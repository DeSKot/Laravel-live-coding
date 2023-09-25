<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ReviewsGeneral extends Model
{
    use HasFactory;

    protected $table = 'reviews_general';
    protected $fillable = [
        'name',
        'email',
        'photo',
    ];

    /**
     * @return HasMany
     */
    public function reviews_translation(): HasMany
    {
        return $this->hasMany(ReviewsTranslation::class, 'review_id', 'id');
    }
}
