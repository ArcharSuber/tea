<?php
namespace App\Http\Controllers;
use Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;  
class LoginController extends Controller
{
	//登录首页
    public function index(){
        
    	return view("login/login");
    	//return view("layout/main");
    }
    //判断是否用户名与密码登录正确
    public function panduan(Request $request){
        
        $user = $request->input('user');
        $pass = $request->input('pass'); 
        if(strlen($user) == 11) 
        {
        $res = DB::table('user')->where('tel','=',$user)->first();//获取user数据库数据

        }else
        {
        $res = DB::table('user')->where('username','=',$user)->first();//获取user数据库数据

        }
      // $student=DB::table("vipinfo")->whereRaw('vip_ID> ? and vip_fenshu >= ?',[2,300])->get(); //多个条件  
        if($res)
        { 
            if($res->password == $pass)
            {   
                Session::put('user_id',$res->user_id);
                Session::put('user',$user);
            	$data['error']=1;
            	$data['msg'] = '登录成功!';
            }else{
            	$data['error']=0;
            	$data['msg'] = '密码错误,请重新输入!';

            }

        }
        else
        {
             $data['error']=0;
             $data['msg']='对不起,用户名有误!';
        }
        return response()->json($data);
    }
    
    public function loginout(Request $request)
    {
        $request->session()->flush();
        $sessions = $request->session()->all();
        if(empty($sessions))
        {
           return redirect("login");
        }
    }
    public function qq()
    {
         return Socialite::with('qq')->redirect();
    }
    public function qqlogin()
    {  
        // http://www.shops.com/qqCallback
        $code=request('code');
        $access_token=file_get_contents("https://graph.qq.com/oauth2.0/token?grant_type=authorization_code&client_id=101445016&client_secret=ebd13d7be7a43deea19ddcbcefe959d2&code=$code&redirect_uri=www.shops.com/qqCallback");

        $len = strpos($access_token,"&expires_in");

        $access_token=substr($access_token,13,$len-13);

       echo $str = file_get_contents("https://graph.qq.com/oauth2.0/me?access_token=$access_token");
    }
    
}