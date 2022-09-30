<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/listings', function (Request $request) {

    $listingData = Listing::all();

    $res = [];
    foreach ($listingData as $data) {
        $res[] = [
            'id' => $data->id,
            'title' => $data->title,
            'tags' => $data->tags,
            'company' => $data->company,
            'location' => $data->location,
            'email' => $data->email,
            'website' => $data->website,
            'description' => $data->description
        ];
    }

    return response()->json($res);
});

Route::post('login', [\App\Http\Controllers\Api\AuthController::class, 'login']);
Route::post('register', [\App\Http\Controllers\Api\AuthController::class, 'register']);


 Route::get('listings/self', [\App\Http\Controllers\Api\ListingPostController::class, 'self']);


