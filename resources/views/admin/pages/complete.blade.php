@extends('admin.layout.index')

@section('content')
@endsection
<style>
    table,
    th,
    td {
        border: 3px solid black;
        border-collapse: collapse;
    }

    

    h3 {
        text-align: center;

    }

    h4 {
        padding-top: 10px;
    }
    table{
        text-align: center;
    }
    .xuatxu,
    .ngaylaymau,
    .lydo,
    .ghichu ,{
        display: flex;
    }
</style>

<body>



    <div class="header">
        <h3>CÔNG TY THÍ NGHIỆM ĐIỆN VIỆT NAM</h3><br>
        <hr>
        <br>
        <br>
        <h3>KẾT QUẢ QUAN TRẮC GÓC ĐẦU CÁCH ĐIỆN</h3> <br><br>
    </div>

    <div class="container">
        <h4>I ĐỐI TƯỢNG THỬ</h4>
        <H4> IITHÔNG SỐ KỸ THUẬT</H4>
        <div class="xuatxu">
            <p>Xuất xứ: Mỹ Tho</p>

        </div>
        <div class="ngaylaymau">
            <p>Ngày lấy mẫu: 20-10</p>
            <p>Nhận mẫu: 30-10</p>
            <p>Thử mẫu:01-11</p>

        </div>
        <div class="lydo">
            <p>Phụ trách lấy mẫu (TM-BCN):<strong> Trần Anh Khoa</strong></p>
        </div>
        <div class="ghichu">
            <p>Ghi chú</p>
        </div>
        <h4>III SỐ LIỆU THÍ NGHIỆM</h4>
        <div class="table">
            <table>
                <tr>
                    <th rowspan="2">STT</th>
                    <th rowspan="2">ĐẶC TÍNH</th>
                    <th rowspan="2">PHƯƠNG PHÁP</th>
                    <th colspan="3">KẾT QUẢ QUAN TRẮC GÓC</th>

                    <th rowspan="2">NHÂN VIÊN THÍ NGHIỆM</th>

                </tr>
                <tr>
                    <td>PHA A</td>
                    <td>PHA B</td>
                    <td>PHA C</td>

                <tr>
                    <td>1</td>
                    <td>Điện áp chọc thủng(kV)/2,5mm</td>
                    <td> IEC<br>  60156:1995</td>
                    <td>18<input type="text"></td>
                    <td>19<input type="text"</td>
                    <td>20<input type="text"</td>
                    <td><strong>Trần Anh Khoa</strong ></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Tg góc tổn thất điện môi ở 90°C(%) </td>
                    <td>IEC <br>  60247:2004</td>
                    <td>11<input type="text"</td>
                    <td>14<input type="text"</td>
                    <td>13<input type="text"</td>
                    <td><strong>Trần Thị Thương Linh</strong></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Hàm lượng nước (ppm)</td>
                    <td>IEC <br>  60814:1997</td>
                    <td>13<input type="text"</td>
                    <td>14<input type="text"</td>
                    <td>15<input type="text"</td>
                    <td><strong>Nguyễn Quốc Phong</strong></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Hàm lượng nước (ppm)</td>
                    <td>IEC <br>  ASTM D664-11a</td>
                    <td>18<input type="text"</td>
                    <td>19<input type="text"</td>
                    <td>20<input type="text"</td>
                    <td><strong>Bùi Hữu Phúc</strong></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Trị số acid (mg KOH/g dầu)</td>
                    <td> <br> ASTMD93-15a</td>
                    <td>21<input type="text"</td>
                    <td>22<input type="text"</td>
                    <td>23<input type="text"</td>
                    <td><strong>Hồ Quang Long</strong></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Trị số acid (mg KOH/g dầu)</td>
                    <td> <br>ASTM D445-15a</td>
                    <td>21<input type="text"</td>
                    <td>22<input type="text"</td>
                    <td>23<input type="text"</td>
                    <td><strong>Hồ Quang Long</strong></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Trị số acid (mg KOH/g dầu)</td>
                    <td> <br> ASTM D974-14</td>
                    <td>21<input type="text"</td>
                    <td>22<input type="text"</td>
                    <td>23<input type="text"</td>
                    <td><strong>Hồ Quang Long</strong></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Trị số acid (mg KOH/g dầu)</td>
                    <td> <br> ASTM D2273-12</td>
                    <td>21<input type="text"</td>
                    <td>22<input type="text"</td>
                    <td>23<input type="text"</td>
                    <td><strong>Hồ Quang Long</strong></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Trị số acid (mg KOH/g dầu)</td>
                    <td> <br> ASTM D1275-15</td>
                    <td>21<input type="text"</td>
                    <td>22<input type="text"</td>
                    <td>23<input type="text"</td>
                    <td><strong>Hồ Quang Long</strong></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Trị số acid (mg KOH/g dầu)</td>
                    <td> <br> EPA</td>
                    <td>21<input type="text"</td>
                    <td>22<input type="text"</td>
                    <td>23<input type="text"</td>
                    <td><strong>Hồ Quang Long</strong></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Trị số acid (mg KOH/g dầu)</td>
                    <td> <br> ASTM D2112-15</td>
                    <td>21<input type="text"</td>
                    <td>22<input type="text"</td>
                    <td>23<input type="text"</td>
                    <td><strong>Hồ Quang Long</strong></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Trị số acid (mg KOH/g dầu)</td>
                    <td> <br>ASTM D5837-15</td>
                    <td>21<input type="text"</td>
                    <td>22<input type="text"</td>
                    <td>23<input type="text"</td>
                    <td><strong>Hồ Quang Long</strong></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Trị số acid (mg KOH/g dầu)</td>
                    <td> <br>ASTM D3612-09</td>
                    <td>21<input type="text"</td>
                    <td>22<input type="text"</td>
                    <td>23<input type="text"</td>
                    <td><strong>Hồ Quang Long</strong></td>
                </tr>

            </table>
            

        </div>
        <br>
        <button with="100px" height="50px">Submit</button>
    </div>

    <div class="footer">
        <p>M02 - QTTN 01 - HD</p>
        <hr>

        <div class="mm">
            Add: 22bis Phan Đăng Lưu. Q.Bình Thạnh,Tp HCM <br>
            Tell: 028 3841 4903 | Fax: 028 3551 1689
        </div>
        <div class="link">
            http://www.etc2.vn <br>
            Email: etc2@ect2.vn
        </div>
    </div>





</body>

</html>