            <div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active">
Lưu trữ                    </li>
@foreach($theloai as $tl)
                    <li href="#" class="list-group-item menu1">
{{$tl->Ten}}
                    </li>
                    <ul>
                        @foreach($tl->loaitin as $lt)
                        <li class="list-group-item">
                            <a href="#">{{$lt->Ten}}</a>
                        </li>
                        
                        @endforeach
                    </ul>
@endforeach
                  </ul>
              </div>