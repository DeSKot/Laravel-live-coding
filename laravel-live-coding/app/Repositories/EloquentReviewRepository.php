<?php

namespace App\Repositories;

use App\Interfaces\ReviewRepositoryInterface;
use App\Models\ReviewsGeneral;
use Illuminate\Database\Eloquent\Collection;

class EloquentReviewRepository implements ReviewRepositoryInterface
{

    /**
     * @param string $locale
     * @return Collection
     */
    public function getReviewsByLocale(string $locale): Collection
    {
        return ReviewsGeneral::with(['reviews_translation' => function ($query) use ($locale){
            $query->whereHas('local', function ($query) use ($locale){
                $query->where('locale', $locale);
            });
        }])->get();
    }
}
