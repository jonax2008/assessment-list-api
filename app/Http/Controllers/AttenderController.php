<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attender;

class AttenderController extends Controller
{
    public function all() 
    {
        $attenders = Attender::select('id', 'name', 'last_name', 'last_second_name', 'voice')->get();
        return response()->json($attenders);
    }
}
