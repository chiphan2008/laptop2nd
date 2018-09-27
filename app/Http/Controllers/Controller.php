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
  		  $content = file_get_contents('./public/asset/json/'.$filename.'.json');
  		  return  json_decode($content,true);
    }
	  public function put_json($filename,$data){
		    file_put_contents('./public/asset/json/'.$filename.'.json',json_encode($data));
    }

    public function vn_str_filter ($str){
       $unicode = array(

           'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',

           'd'=>'đ',

           'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

           'i'=>'í|ì|ỉ|ĩ|ị',

           'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

           'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

           'y'=>'ý|ỳ|ỷ|ỹ|ỵ',

           'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

           'D'=>'Đ',

           'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

           'I'=>'Í|Ì|Ỉ|Ĩ|Ị',

           'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

           'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

           'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
       );
      $chars = array('~','^','&','*','_','__','`','@','#','$','%','!',' !',' ?','?','"','“','”',':','+','/','(',')','--','.',',','=','™');

      foreach($unicode as $nonUnicode=>$uni){
    		$str = preg_replace("/($uni)/i", $nonUnicode, trim($str));
        $str = trim(str_replace($chars,' ',$str));
    		$str = str_replace(' ','-',$str);

      }
       return strtolower($str);
   }

   public function rname_url_hinh($str){
     $str = $this->vn_str_filter($str);
     switch(substr($str,-3)){
       case 'peg':
       case 'jpg':	$str = str_replace('-jpg','.jpg',$str);break;
       case 'png':	$str = str_replace('-png','.png',$str);break;
       case 'gif':	$str = str_replace('-gif','.gif',$str);break;
       case 'pdf':	$str = str_replace('-pdf','.pdf',$str);break;
     }

     return $str;
   }

}
