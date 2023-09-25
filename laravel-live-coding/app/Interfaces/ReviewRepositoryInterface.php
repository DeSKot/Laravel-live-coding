<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface ReviewRepositoryInterface{
    /**
     * Get all reviews with their translations based on the locale
     *
     * @param string $locale
     * @return Collection
     */
    public function getReviewsByLocale(string $locale): Collection;
}
