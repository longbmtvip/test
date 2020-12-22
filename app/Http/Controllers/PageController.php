<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\TheLoai;


class PageConTroller extends Controller
{
   function trangchu()
   {
          $theloai = TheLoai::all();

    return view('admin.pages.trangchu',['theloai'=>$theloai]);
   }
}
