<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\LoaiTin;

class LoaiTinController extends Controller

{
    //
    public function getDanhSach()
    {

      $loaitin = LoaiTin::all();
return view('admin.loaitin.danhsach',['loaitin'=>$loaitin]);
    }
    public function getThem()
    {
      $theloai=TheLoai::all();

return view('admin.loaitin.them',['theloai'=>$theloai]);
    }

    public function postThem(Request $request)
    {
      $this->validate($request,[
        'Ten'=>'required|unique:LoaiTin,Ten|min:3|max:100',
        'TheLoai'=>'required'

],[


  'Ten.required'=>'chua nhap ten loai tin',
  'Ten.unique'=>'Tên loại tin đã tồn tại',
  'Ten.min'=>'Vui lòng nhập trên 1 kí tự',
  'Ten.max'=>'Tên quá dài',
  'TheLoai.required'=>'chưa chọn thể loại'

      ]);


      $loaitin=new LoaiTin;
      $loaitin->Ten=$request->Ten;
      $loaitin->TenKhongDau=changeTitle($request->TenKhongDau);
      $loaitin->idTheLoai=$request->TheLoai;
      $loaitin->save();
      return redirect('admin/loaitin/them')->with('thongbao','success');
      
    }

    public function getSua($id)
    {

$theloai=TheLoai::all();
$loaitin=LoaiTin::find($id);
return view('admin.loaitin.sua',['loaitin'=>$loaitin,'theloai'=>$theloai]);

    }
    public function postSua(Request $request,$id)
    {
           
           
    }
public function getXoa($id)
{
  $loaitin=LoaiTin::find($id);
  $loaitin->delete();
  return redirect('admin/loaitin/danhsach')->with('thongbao','Xóa thành công');
}
} 


