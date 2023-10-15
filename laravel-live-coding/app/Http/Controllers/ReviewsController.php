<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{
    public function reviews(Request $request){
        $locale_id = (int) $request->header('Accept-Language');
        $columns = match($locale_id){
            1 => [
                    'reviews_general.name', 
                    'reviews_general.link',
                    'reviews_general.photo',
                    'reviews_translation.description',
                    'reviews_translation.summary'
                 ],
            2 => [
                    'reviews_general.name',
                    'reviews_general.link',
                    'reviews_translation.description'
                 ],
        };

        $reviews = DB::table('reviews_general')->join('reviews_translation', function(JoinClause $join) use ($locale_id){
            $join->on('reviews_general.id', '=', 'reviews_translation.review_id')->where('locale_id', '=', $locale_id);
        })->select($columns)->get();

        return $reviews;
    }
}
