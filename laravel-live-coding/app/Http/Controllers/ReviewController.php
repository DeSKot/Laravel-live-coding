<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReviewResource;
use App\Services\ReviewService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    private ReviewService $reviewService;

    public function __construct(ReviewService $reviewService)
    {
        $this->reviewService = $reviewService;
    }


    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
       $locale = $request->header('Accept-Language');
       $reviews = $this->reviewService->getLocalisedReviews($locale);
       return ReviewResource::collection($reviews)->response();
    }
}
