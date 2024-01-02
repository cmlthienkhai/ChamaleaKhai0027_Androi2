<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bài Viết</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('images/logo0.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/vendor/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/vendor/MagnificPopup/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/css//style.css') }}">

    <!-- Các custom style của frontend -->
    <link rel="stylesheet" href="{{ asset('themes/cozastore/css/custom-styles.css') }}">

    <!-- Các custom style dành riêng cho từng view -->
    @yield('custom-css')
@include('layouts.home.header')

</head>

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layouts.master` --}}


{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layouts.master` --}}
{{-- Thay thế nội dung vào Placeholder `main-content` của view `frontend.layouts.master` --}}
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{ asset('dist/img/1.png') }}');">
    <h2 class="ltext-105 cl0 txt-center" style="color:#33FFFF ;">
        Bài Viết
    </h2>
</section>


<!-- Content page -->
<section class="bg0 p-t-75 p-b-120">
    <div class="container">
        <div class="row p-b-148">
            <div class="col-md-7 col-lg-8">
                <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                    <h3 class="mtext-111 cl2 p-b-16">
                        Puma - mẫu áo mùa giải mới của Man City
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                       Trước thềm mùa giải 2019-2020, thế giới đã chứng kiến một sự kiện, 
                       một cơ duyên đầy ý nghĩa giữa Puma – Một thương hiệu thể thao hàng đầu đến từ nước Đức và Man City – Một câu lạc bộ bóng đá hùng mạnh bậc nhất làng thể thao Vua.
                       Hai cái tên danh giá này đã tạo nên một liên kết vô cùng đặc biệt.Với bề dày kinh nghiệm và uy tín của mình, Puma đã trở thành nhà sản xuất áo đấu chính thức cho Man City.
                    </p>

                    <p class="stext-113 cl6 p-b-26">
                        Hãy cùng Obito Sport đào sâu chi tiết bản hợp đồng “khủng” này nhé! Với mẫu áo clb Man City 23/24 mới được thiết kế bởi Puma,
                        Man City chắc chắn sẽ gây ấn tượng mạnh với người hâm mộ, mang đến sự tự tin và động lực cho các cầu thủ trong mùa giải sắp tới. 
                        Sự hợp tác giữa Puma và Man City là một chặng đường mới đầy hứa hẹn, nơi mà niềm đam mê và thành công gặp nhau, đồng hành trong hành trình chinh phục những danh hiệu đỉnh cao.
                    
                    </p>

                    <p class="stext-113 cl6 p-b-26">
                       
                    </p>
                </div>
            </div>

            <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor1 ">
                    <div class="hov-img0">
                        <img src="{{ asset('images/post/puma-mau-ao-mua-giai-moi-cua-man-city.jpg') }}" alt="IMG">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                    <h3 class="mtext-111 cl2 p-b-16">
                        Nike - Hợp động trọn đời với CR7
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                        Ronaldo tiếp tục đón tin vui tiếp theo khi Nike cũng thông báo sẽ gia hạn hợp đồng với ngôi sao mà họ đã gắn bó từ 2003. 
                        Được biết, bản hợp đồng này có thời hạn "trọn đời" và sẽ giúp CR7 bỏ túi tới 1 tỷ đô la.
                    </p>

                    <div class="bor16 p-l-29 p-b-9 m-t-22">
                        <p class="stext-114 cl6 p-r-40 p-b-11">
                          Được biết, trong nhiều năm qua, Ronaldo là gương mặt đại diện cho Nike ở dòng giày Mercurial chuyên dành cho những cầu thủ ưa tốc độ. 
                          Anh cũng giúp Nike thu về nhiều triệu bảng khi cho ra mắt dòng sản phẩm thể thao mang tên Ronaldo.
                        </p>

                        <span class="stext-111 cl8">
                           
                        </span>
                    </div>
                </div>
            </div>

            <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
                <div class="how-bor2">
                    <div class="hov-img0">
                        <img src="{{ asset('images/post/nike-hop-dong-tron-doi-voi-cr7.jpg') }}" alt="IMG">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
@endsection