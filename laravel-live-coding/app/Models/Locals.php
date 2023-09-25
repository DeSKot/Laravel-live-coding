<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Locals extends Model
{
    use HasFactory;

    protected $table = 'locals';

    protected $fillable = ['locale'];

    /**
     * @return HasMany
     */
    public function locals_translation(): HasMany
    {
        return $this->hasMany(ReviewsTranslation::class);
    }
}
