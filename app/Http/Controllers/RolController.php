<?php

namespace App\Http\Controllers;

use App\RolUser;
use App\Http\Controllers\BaseJson;

use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index()
    {
    	 $data = RolUser::all();
    	 return view('adminlte::rol.roles')->with('data',$data);
   }


   public function createRol(Request $request)
   {
      	
      	$input = $request->all();
      	$json = new BaseJson();

      	try {

      		if( $input['data']['rol'] && $input['data']['slug'] && $input['data']['description'])
      		{
      			 RolUser::firstOrCreate(
      			     ['name' => $input['data']['rol']],
      			     [
      			         'slug' => $input['data']['slug'],
      			         'description' => $input['data']['description'],
      			     ]
      			 );
      			 $rol =RolUser::all();
      		     $json::$response['data'] = $rol->last();
      		     $json::$response['message'] = "Seguardaron los datos con éxito";
      		     $json::$response['error'] = "false";
      		     return response()->json($json::$response);
      		}
      		
      	} catch (PDOException $e) {

      		$json::$response['data'] = "null";
      		$json::$response['error'] = "true";
      		$json::$error["trace"]=$e->getMessage(); 

    		return response()->json( $json::$response );
      		
      	}


   } 	 
}
