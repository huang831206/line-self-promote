<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GG;
use App\Services\HandwriteService;

class HandwriteController extends Controller
{
    protected $handwriteService;

    public function __construct(HandwriteService $handwriteService)
    {
        $this->handwriteService = $handwriteService;
    }

    public function verify(Request $request)
    {
        $predict_digit = $this->handwriteService->process($request->image);
        $answer = $request->q;

        $response = [
            'success' => false
        ];

        if ( $predict_digit === $answer ) {
            $response['success'] = true;
        }
        $response['prediction'] = $predict_digit;

        return response()->json($response);
    }

    public function get()
    {
        $goal = $this->handwriteService->generate();
        return response()->json([
            'goal' => $goal
        ]);
    }
}
