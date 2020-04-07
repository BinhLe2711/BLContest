<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;

class Authen extends Controller
{
    public function indexLogin(){
        return view('Auth.login');
    }
    public function postLogin(Request $request){
        $credentials = $request->only('email', 'password'); //Check thông tin đăng nhập bằng email
        if (!($token = JWTAuth::attempt($credentials))) {
            $credentials1['username'] = $credentials['email']; //Có thể thông tin nhập vào là username nên check lại 1 lần bằng username
            $credentials1['password'] = $credentials['password'];
            if (($token1 = JWTAuth::attempt($credentials1))) {
                if(Auth::attempt($credentials1)){}
                $saveJwt = User::find(Auth::user()->id);
                $saveJwt -> jwt = $token1;
                $saveJwt -> save(); //Tiến hành lưu lại jwt để tiện xử lí api 
                return redirect()->route('gvDashboard');
            }
            //Nếu qua bước check username vẫn sai thì sai tên đăng nhập hoặc tài khoản
            return view('Auth.login',["error"=>"Sai tài khoản hoặc mật khẩu"]);
        }
        if(Auth::attempt($credentials)){};
        $saveJwt = User::find(Auth::user()->id);
        $saveJwt -> jwt = $token;
        $saveJwt -> save(); //Tiến hành lưu lại jwt để tiện xử lí api
        return redirect()->route('gvDashboard');

    }
    public function indexRegister(){
        return view('Auth.register');
    }
}
