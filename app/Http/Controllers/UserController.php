<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use App\joinclass;
use App\classroom;

class UserController extends Controller
{
    public function validateEMAIL($EMAIL) {
        $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
        if (preg_match($pattern, $EMAIL) === 1) {
            return true;
        }
        return false;
    }
    public function validateUsername($d) {
        $pattern = "/^[a-z][a-z0-9_\.]{4,20}$/";
        if (preg_match($pattern, $d) === 1) {
            return true;
        }
        return false;
    }
    public function register(Request $request)
    {
        $params = $request->only('email', 'name', 'password','username','role');
        if(count(User::all()->where('email',$params['email']))!=0){
            return response()->json([
                'status'=>400,
                "message"=>"Already have this email"
            ], Response::HTTP_BAD_REQUEST);
        }
        if(count(User::all()->where('username',$params['username']))!=0){
            return response()->json([
                'status'=>400,
                "message"=>"Already have this username"
            ], Response::HTTP_BAD_REQUEST);
        }
        if(strlen($params['password'])<8){
            return response()->json([
                'status'=>400,
                "message"=>"Mật khẩu phải dài hơn 8 kí tự"
            ], Response::HTTP_BAD_REQUEST);
        }
        if(!($this->validateEMAIL($params['email']))){
            return response()->json([
                'status'=>400,
                "message"=>"Email không đúng định dạng"
            ], Response::HTTP_BAD_REQUEST);
        }

        if($params['role']!="hs"&&$params['role']!="gv"){
            return response()->json([
                'status'=>400,
                "message"=>"Bạn đang mơ hả :>"
            ], Response::HTTP_BAD_REQUEST);
        }
        

        if(strlen($params['username'])<8){
            return response()->json([
                'status'=>400,
                "message"=>"Tên đăng nhập phải dài hơn 8 ký tự"
            ], Response::HTTP_BAD_REQUEST);
        }
        if(!($this->validateUsername($params['username']))){
            return response()->json([
                'status'=>400,
                "message"=>"Tên đăng nhập không hợp lệ"
            ], Response::HTTP_BAD_REQUEST);
        }
        $user = new User();
        $user->email = $params['email'];
        $user->name = $params['name'];
        $user->username = $params['username'];
        $user->role = $params['role'];
        $user->password = bcrypt($params['password']);
        $user->save();

        return response()->json([
            'status'=>200,
            "message"=>"Create user successful !",
            'data'=>$user
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password'); //Check thông tin đăng nhập bằng email
        if (!($token = JWTAuth::attempt($credentials))) {
            $credentials1['username'] = $credentials['email']; //Có thể thông tin nhập vào là username nên check lại 1 lần bằng username
            $credentials1['password'] = $credentials['password'];
            if (($token1 = JWTAuth::attempt($credentials1))) {
                return response()->json(['status'=>200,'token' => $token1], Response::HTTP_OK); //Nếu đúng là username trả về kết quả
            }
            //Nếu qua bước check username vẫn sai thì sai tên đăng nhập hoặc tài khoản
            return response()->json([
                'status' => 400,
                'error' => 'invalid.credentials',
                'msg' => 'Invalid Credentials.'
            ], Response::HTTP_BAD_REQUEST);
        }

        return response()->json(['status'=>200,'token' => $token], Response::HTTP_OK);
    }

    public function user(Request $request)
    {
        $user = Auth::user();

        if ($user) {
            return response($user, Response::HTTP_OK);
        }

        return response(null, Response::HTTP_BAD_REQUEST);
    }

    public function classjoined(Request $request)
    {
        $user = Auth::user();

        $userid = $user->id;
        $joinclass = joinclass::all()->where('idJoiner',$userid);
        $json = [];
        foreach ($joinclass as $value) {

            $json[]=[
                'id'=>$value->id,
                'id_class'=> $value->idClass,
                'name' => classroom::find($value->idClass)->name,
                'creator_name' => user::find(classroom::find($value->idClass)->id_create)->name,
                'member' => count(joinclass::all()->where('idClass',$value->idClass)),
                'info_class' => classroom::find($value->idClass),

            ];
        }
        
        return response($json, Response::HTTP_OK);
        
    }

    /**
     * Log out
     * Invalidate the token, so user cannot use it anymore
     * They have to relogin to get a new token
     *
     * @param Request $request
     */
    public function logout(Request $request) {
        $this->validate($request, ['token' => 'required']);
        
        try {
            JWTAuth::invalidate($request->input('token'));
            return response()->json('You have successfully logged out.', Response::HTTP_OK);
        } catch (JWTException $e) {
            return response()->json('Failed to logout, please try again.', Response::HTTP_BAD_REQUEST);
        }
    }

    public function refresh()
    {
        return response(JWTAuth::getToken(), Response::HTTP_OK);
    }
}