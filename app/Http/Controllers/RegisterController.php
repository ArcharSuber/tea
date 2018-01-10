<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
class RegisterController extends Controller
{
	//注册首页
    public function index(){
        
    	return view("register/register");
    	//return view("layout/main");
    }

    //普通注册
     public function add(Request $request){
         $validator = \Validator::make($request->input(),[
            'username' => 'required|min:2|max:20',
            'password' => 'required|min:6|max:20|confirmed',
            'password_confirmation' => 'required|min:6|max:20',
            'email' => 'required',
            ],[
            'required' => ':attribute 为必填项!',
            'min' => ':attribute 长度不符合要求!',
            'max' => ':attribute 长度最多为20位!',
            'confirmed' => ':attribute 密码不一致!'
            ],[
              'username' => '姓名',
              'password' => '密码',
              'password_confirmation' => '确认密码',
              'email' => '邮箱',

            ]);
            if($validator->fails())
            {    
                 return redirect()->back()->withErrors($validator)->withInput();
            }  
            $data = $request->input();
            // $userInput = \Request::get('code');
            if (Session::get('milkcaptcha') == $data['code']) {
                //用户输入验证码正确
                $data['registerTime'] = time();
                $id=DB::table("user")->insertGetId(['user_id'=>null,'username'=>$data['username'],'password'=>$data['password'],'email'=>$data['email'],'registerTime'=>$data['registerTime']]); 
                if($id != "")
                {  
                    session::put('user_id',$id);
                    session::put('user',$data['username']);
                    echo "<script>alert('注册成功!');location.href='/'</script>";
                }
            }else{
                //用户输入验证码错误
                echo "<script>alert('您输入的验证码错误!');location.href='/register'</script>";
            }


        }

    //手机号注册
        public function sudo(Request $request){
               $data = $request->input();
               $data['registerTime'] = time();
               $id = DB::table('user')->insertGetId(['user_id'=>null,'tel'=>$data['tel'],'password'=>123456,'registerTime'=>$data['registerTime']]);
                 if($id)
                 {
                      session::put('user_id',$id);
                      session::put('user',$data['tel']);
                      echo "<script>alert('注册成功!');location.href='/'</script>";
                 }else{
                      echo "<script>alert('注册失败!');location.href='/register'</script>";
                 }

        }
        //判断手机号是否存在
        public function phone(Request $request){
                    $dataa = $request->input();
              
                    $res = DB::table('user')->where('tel','=',$dataa['tel'])->first();
                    // var_dump($res);die;
                    if($res)
                    {
                      $data['error'] = 1;
                    }else{
                      $data['error'] = 2;
                    }
                    return response()->json($data);
                    
               
               // else if($dataa['tel'] == ""){
               //     $data['error'] = 2;
               //     $data['msg'] = '不得为空!';
               // }else{
               //     $data['error'] =3;
               //     $data['msg'] = '格式不正确!';
               // }

        }

    
    
}