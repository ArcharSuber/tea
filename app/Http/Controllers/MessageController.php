<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
class MessageController extends Controller
{
     public function index(){
            $tel=$_GET['tel'];
		    $code=$_GET['code'];
            
            $host = "http://dingxin.market.alicloudapi.com";
		    $path = "/dx/sendSms";
		    $method = "POST";
		    $appcode = "36c403672b974ed9a4d55049ce9373c2";
		    $headers = array();
		    array_push($headers, "Authorization:APPCODE " . $appcode);
		    $querys = "mobile=$tel&param=code%3A$code&tpl_id=TP1711063";
		    $bodys = "";
		    $url = $host . $path . "?" . $querys;

		    $curl = curl_init();
		    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
		    curl_setopt($curl, CURLOPT_URL, $url);
		    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		    curl_setopt($curl, CURLOPT_FAILONERROR, false);
		    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		    curl_setopt($curl, CURLOPT_HEADER, true);
		    if (1 == strpos("$".$host, "https://"))
		    {
		        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		    }

		    $data=curl_exec($curl);
		    preg_match('#{.*}#', $data,$res);
		    return $res[0];

     }

}