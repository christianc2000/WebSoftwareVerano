<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Web;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return Web::all();
    }
}
