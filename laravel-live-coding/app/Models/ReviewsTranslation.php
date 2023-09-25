<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReviewsTranslation extends Model
{
    use HasFactory;

    protected $table = 'reviews_translation';

    protected $fillable = [ 'review_id', 'locale_id', 'description', 'summary' ];

    /**
     * @return BelongsTo
     */
    public function review(): BelongsTo
    {
        return $this->belongsTo(ReviewsGeneral::class, 'review_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function local(): BelongsTo
    {
        return $this->belongsTo(Locals::class, 'locale_id', 'id');
    }
}
