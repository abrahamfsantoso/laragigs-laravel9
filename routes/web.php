<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => "Latest Listings",
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor dignissimos repellendus possimus quidem iure porro illum consequuntur nihil magnam inventore dolore ullam officia optio, qui cupiditate? Dolorem architecto nam, corporis quia ex perferendis eos corrupti. Optio nemo eos ullam ex, tempore quasi laboriosam non, quis ea perferendis commodi? Sapiente, illo!"
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor dignissimos repellendus possimus quidem iure porro illum consequuntur nihil magnam inventore dolore ullam officia optio, qui cupiditate? Dolorem architecto nam, corporis quia ex perferendis eos corrupti. Optio nemo eos ullam ex, tempore quasi laboriosam non, quis ea perferendis commodi? Sapiente, illo!"
            ]
        ]
    ]);
});
