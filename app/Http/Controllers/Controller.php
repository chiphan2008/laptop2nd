<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function get_json($filename){
  		  $content = file_get_contents('./asset/json/'.$filename.'.json');
  		  return  json_decode($content,true);
    }
	  public function put_json($filename,$data){
		    file_put_contents('./asset/json/'.$filename.'.json',json_encode($data));
    }
}
