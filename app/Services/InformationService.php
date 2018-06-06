<?php

namespace App\Services;

use App\Repository\InformationReposity;
use App\Repository\LoggerReposity;

class InformationService{

    public function getAllInformation($request)
    {
        $data = InformationReposity::getAllInformation();

        try {
            $from_ip = \Request::ip();
            LoggerReposity::logVisit($from_ip);
        } catch (Exception $e) {
            // pass
        }

        return $data;
    }

}
