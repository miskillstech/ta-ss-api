<?php

namespace App\Http\Controllers\ptFrontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function testPatients(){
    	return array('fff'=>'fff','eee'=>'ggg');
    }
}
