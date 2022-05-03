<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return  [
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
        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
