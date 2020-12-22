<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="trangchu">Trang chủ</a>
                    </li>
                    <li>
                        <a href="#">     </a>
                    </li>
                </ul>

                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav pull-right">
                 <li>
@if(Auth::guard('user_custom')->check())
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                        <span class="usr-name">{{ Auth::guard('user_custom')->user()->name }}</span>  
                        <i class="fa fa-caret-down"></i>
                    </a>
                 </li>
                 @endif
                 <li>
                        <a href="admin/theloai/them">Tạo bảng mới </a> 
                    </li>
                    
                    <li>
                        <a href="#"> Kho lưu trữ</a>
                    </li>
                    <li>
                        <a>
                            <span class ="glyphicon glyphicon-user"></span>
                        </a>
                    </li>
                    <li>
                        <a href="logout">Đăng xuất</a>
                    </li>
                    
                </ul>
            </div>
@yield('content')
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>