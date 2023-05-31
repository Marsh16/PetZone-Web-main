<?php

namespace App\Http\Controllers;

use App\Models\UserLog;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function announcement() {
        UserLog::create([
            'log_type' => 0
        ]);
        
        return view('announcement');
    }
}
