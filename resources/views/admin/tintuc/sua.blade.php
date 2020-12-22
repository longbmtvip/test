@extends('admin.layouts.index')

@section('content')
<script src="admin_asset/dist/js/extra.js"></script>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin Tức
                            <small>> {{$tintuc->TieuDe}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    <strong>{{$err}}</strong><br>
                                @endforeach
                            </div>
                        @endif
                        
                        @if(session('error'))
                            <div class="alert alert-danger">
                                <strong>{{session('error')}}</strong>
                            </div>
                        @endif

                        @if(session('message'))
                            <div class="alert alert-success">
                                <strong>{{session('message')}}</strong>
                            </div>
                        @endif
                        <form action="admin/tintuc/sua/{{$tintuc->id}}" method="POST" enctype="multipart/form-data"> <!-- Form bắt buộc phải có thuộc tính enctype thì mới up được file lên -->
                            {{ csrf_field() }}
                            <div class="form-group">
                                <p><label>Chọn Thể Loại</label></p>
                                <select class="form-control input-width catefield" name="cate">
                                    @foreach($theloai as $tl)
                                        <option 
@if($tintuc->loaitin->theloai->id==$tl->id)
{{"selected"}}
@endif

                                        value="{{ $tl->id }}">{{ $tl->Ten }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <p><label>Chọn Loại Tin</label></p>
                                <select class="form-control input-width subcatefield" name="sub_cate">
                                    @foreach($loaitin as $lt)
                                        <option 

@if($tintuc->loaitin->id==$lt->id)
{{"selected"}}
@endif

                                        value="{{ $tl->id }}">{{ $lt->Ten }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <p><label>Tiêu Đề</label></p>
                                <input type="text" class="form-control input-width" name="article_title" placeholder="Nhập Tiêu Đề Tin Tức" value="{{ $tintuc->TieuDe}}" />
                            </div>

                            <div class="form-group">
                                <p><label>Tóm Tắt Nội Dung</label></p>
                                <textarea name="article_desc" id="demo" class="form-control ckeditor" rows="3">
                                    {{ $tintuc->TomTat }}
                                </textarea>
                            </div>

                            <div class="form-group">
                                <p><label>Nội Dung Bài Viết</label></p>
                                <textarea name="article_content" id="demo" class="form-control ckeditor" rows="3">
                                    {{ $tintuc->NoiDung }}
                                </textarea>
                            </div>

                            <div class="form-group">
                                <p><label>Hình Ảnh</label></p>
                                <img width="400px" src="upload/tintuc/{{$tintuc->Hinh}}">
                                <input type="file" class="form-control" name="article_img">
                            </div>

                            <div class="form-group">
                                <p><label> Nổi Bật?</label></p>
                               <label class="radio-inline"> 
                                <input  name="NoiBat" value="0" @if($tintuc->NoiBat==0)
                                {{"checked"}}
@endif

                                type="radio">Không
                            </label>
                                <label class="radio-inline">
                                    <input name="NoiBat" value="1"
                               
                          @if($tintuc->NoiBat==1)
                                {{"checked"}}
@endif

                                type="radio">Có
                            </label>
</div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default btn-mleft">Nhập Lại</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
  

                        </tbody>
                    </table>
                </div>

            </div>
        </div>




@endsection