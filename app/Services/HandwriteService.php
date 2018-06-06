<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;

class HandwriteService {

    public function process($rawImage) {

        $file_name = uniqid();

        $image = base64_decode(explode(',', $rawImage)[1]);
        Storage::put($file_name . '.png', $image);

        $args = [
            'python3',
            base_path(env('PYTHON_LIB_PATH').'HandWrite.py'),
            storage_path('app/'.$file_name)
        ];

        $process = new Process($args);
        $process->run();
        $prediction = $process->getOutput();

        $predict_digit = intval(trim($prediction));

        return $predict_digit;
    }

    // generate a new digit
    public function generate()
    {
        $randomDigit = mt_rand(0, 9);
        return $randomDigit;
    }
}
