<?php

namespace App\Services;

use App\Interfaces\ReviewRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ReviewService
{
    private ReviewRepositoryInterface $reviewRepository;

    public function __construct(ReviewRepositoryInterface $reviewRepository)
    {
        $this->reviewRepository = $reviewRepository;
    }

    /**
     * @param string $locale
     * @return Collection
     */
    public function getLocalisedReviews(string $locale): Collection
    {
        return $this->reviewRepository->getReviewsByLocale($locale);
    }
}
