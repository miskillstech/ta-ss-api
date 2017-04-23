<?php

namespace App\Http\Controllers\waPtFrontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function testPatients(){
    	return array('fff'=>'fff','eee'=>'ggg');
    }
}
