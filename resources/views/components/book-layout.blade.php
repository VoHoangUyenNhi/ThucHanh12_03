<!DOCTYPE html>
<html>
    <head>
        <title>{{$title}}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <header style='text-align:center'>
            <img src="{{asset('images/banner_sach.jpg')}}" width="1500px">
        </header>
        <main style="width:1500px; margin:1px auto;">
            <div class='row'>
                <div class='col-3 pr-0'>
                    <x-menu :item="'Danh mục sách'">
                        <x-slot name='itenm'>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('sach') }}">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('sach/theloai/1') }}">Tiểu thuyết</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('sach/theloai/2') }}">Truyện ngắn - Tản văn</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('sach/theloai/3') }}">Tác phẩm kinh điển</a>
                            </li>
                        </x-slot>
                    </x-menu>
                    <img src="{{asset('images/sidebar_1.jpg')}}" width="100%" class='mt-1'>
                    <img src="{{asset('images/sidebar_2.jpg')}}" width="100%" class='mt-1'>
                </div>
                <div class='col-9'>
                    {{$slot}}
                </div>
            </div>
        </main>
    </body>
</html>