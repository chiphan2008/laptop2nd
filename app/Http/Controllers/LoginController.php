<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            session()->put('key',Auth::user()->id);
            session()->put('user',Auth::user());
            return redirect()->route('dashboard');
        }
        return back()->with('err',"Sai tên đăng nhập hoặc mật khẩu");
    }

    public function postChangePwd(Request $request){
      $user = session()->get('user');

      if($request->new_pwd==$request->confirm_pwd){
        //return strlen($request->new_pwd);
        if(strlen($request->new_pwd)<6){
          return back()->with('err',"Mật khẩu tối thiểu phải 6 ký tự");
        }else{
          DB::table('users')->where(['id'=>$user->id])->update([
            'password' => bcrypt($request->new_pwd)
          ]);
          return back()->with('success',"Cập nhật mật khẩu mới thành công");
        }
      }else {
        return back()->with('err',"Xác nhận mật khẩu không đúng.");
      }
      // echo $request->new_pwd.'<br>';
      // echo $user->id.'<br>';

      //print_r(session()->get('user'));
      //echo $request->confirm_pwd;
      // return User::create([
      //     'name' => $data['name'],
      //     'email' => $data['email'],
      //     'password' => bcrypt($data['password']),
      // ]);
    }
}
