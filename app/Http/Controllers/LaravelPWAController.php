<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Services\ManifestService;
use Illuminate\Support\Facades\Log;

class LaravelPWAController extends Controller
{
    public function manifestJson()
    {
        $output = (new ManifestService)->generate();
        return response()->json($output);
    }

    public function offline()
    {
        return view('laravelpwa::offline');
    }
}