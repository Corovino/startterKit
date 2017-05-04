<?php
namespace App\Http\Controllers;

Class BaseJson{

		public static   $response =[
	            "data" =>[

	            ],
	            "message"=>[
	            ],

	            "error" => ""
	            
	        ];
	    public  static  $error= [
	            "code"=>"",
	            "message" => "",
	            "trace" =>  ""
	    ];
	    public  static  $errorfield=  [
	            "code"=>"2",
	            "field" =>  "",
	            "message" =>  ""
	    ];

}
