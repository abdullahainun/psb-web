<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use CRUDBooster;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ApiLoginController extends Controller
{
    public function hello()
    {
    	echo "hello";
    }

    public function postLogin()
    {
    	// response()->json(['api_status'=>true,'api_message'=>'success','token'=>$tokenCode])->send();
    	return oke;
    }
}
