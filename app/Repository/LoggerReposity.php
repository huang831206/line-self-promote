<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class LoggerReposity
{
    public static function logVisit($ip){
        DB::table('logger')->insert([
            'ip' => $ip,
            'at_time' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }

}
