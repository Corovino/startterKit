<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\BaseJson;

use App\RolUser;

use Illuminate\Http\Request;

class UserController extends Controller
{
	
    public function index(){
         
         $data = User::all();


         return view('adminlte::usuarios.usuarios')->with('data',$data);

    }

    public function createUser(Request $request)
    {

    	$data = RolUser::all();
    	return view('adminlte::usuarios.postUsuarios')->with('data', $data);

    }

    public function postUser(Request $request)
    {
    	$data = $request->all();
    	$json = new BaseJson;

    	try {

    		if ( !$data['data']['name'] == "" &&  !$data['data']['email'] == "" && !$data['data']['password'] == "" && !$data['data']['id_rol'] == "" )

                 $json::$response['data'] = $data;
      		     $json::$response['message'] = "Seguardaron los datos con éxito";
      		     $json::$response['error'] = "false";
      		     return response()->json($json::$response);

    		
    	} catch (Exception $e) {
    		
    	}


    }

   
}
