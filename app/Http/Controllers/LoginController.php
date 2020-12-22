<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getDangnhap()
{
    return view('admin.pages.dangnhap');
}
public function postDangnhap(Request $request)
{
 {
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
    }
    if (Auth::guard('user_custom')->attempt($arr)) {

           return redirect('admin/theloai/danhsach');
        } 
        else {

return  view('admin.pages.dangnhap');
        }
    
    }}
