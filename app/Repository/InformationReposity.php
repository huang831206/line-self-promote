<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class InformationReposity
{
    public static function getAllInformation(){

        $data = DB::table('information')->first();

        // decode json fields
        $fields = ['about', 'projects', 'skills', 'contact_info'];
        foreach ($fields as $field) {
            $data->{$field} = json_decode($data->{$field});
        }
        return $data;
    }

}
