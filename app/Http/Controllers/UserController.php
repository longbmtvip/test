<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
    use App\UserCustom;


class UserController extends Controller
{
    //
    
public function getDangnhapAdmin()
{
    return view('admin.pages.dangnhap');
}
public function postDangnhapAdmin(Request $request)
{
 {
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
    }
    if (Auth::guard('user_custom')->attempt($arr)) {

           return redirect('trangchu');
        } 
        else {

return  view('admin.pages.dangnhap');
        }
  if(Auth::check())
  {
    view()->share('user',Auth::user_custom());
  }  
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('dangnhap');
      }
}
