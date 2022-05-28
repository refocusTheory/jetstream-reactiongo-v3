<?php

namespace Modules\Jetstream\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FilemanagerController extends Controller
{

    /**
     * Display File manager App
     * @return Renderable
     */

    public function index()
    {
        
        $pageConfigs = [
            'pageHeader' => false

        ];

        return view('jetstream::file-manager', ['pageConfigs' => $pageConfigs]);
    }
    
}
