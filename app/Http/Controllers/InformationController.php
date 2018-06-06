<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\InformationService;

class InformationController extends Controller
{
    protected $infoService;

    // dependency inject on construct
    public function __construct(InformationService $infoService) {
        $this->infoService = $infoService;
    }

    public function all(Request $request)
    {
        $data = $this->infoService->getAllInformation($request);
        return json_encode($data);
    }
}
