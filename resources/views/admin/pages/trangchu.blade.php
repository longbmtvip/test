@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
    <div class="container">
      @include('admin.layout.slide')
        <div class="space20"></div>
        <div class="row main-left">
@include('admin.layout.menu')
            <div class="col-md-9">
                <div class="panel panel-default">            
                    <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;"></h2>
                    </div>

                    <div class="panel-body">    
                        @foreach($theloai as $tl)
                        @if(count($tl->loaitin)>0)
                        <!-- item -->
                        <div class="row-item row">
                            <h3>
                                <a href="category.html">{{$tl->Ten}}</a> |
                                @foreach($tl->loaitin as $lt)
                                <small>
                                    <a href="category.html"><i>{{$lt->Ten}}</i></a>/</small>
                               @endforeach
                            </h3>
                            <?php
                            $data= $tl->tintuc->where('NoiBat',1)->sortByDesc('create_at')->take(100);
                            $tin1 =$data->shift()
                            ?>
                            <div class="col-md-8 border-right">
                                <div class="col-md-5">
                                    <a href="trangnhap">
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <h3>{{$tin1['TieuDe']}}</h3>
                                    <a class="btn btn-primary" href="trangnhap">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                            </div>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->
                        @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
@endsection