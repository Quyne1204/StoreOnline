<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="public/styles/style.css">
    <link rel="stylesheet" href="public/styles/navbar.css">
    <link rel="stylesheet" href="public/styles/slide.css">
</head>

<body>
    <div class="container-fuild " style="background-color: rgb(73,73,73);">
        <div class="container-md px-lg-5">
            <div class="text-white">
                <div class="row">
                    <div class="col-sm-8 col-6">
                        <p class="m-0 d-sm-block d-none">Chào mừng đến với công nghệ số Store Online!</p>
                    </div>
                    <div class="col-sm-4 col-6">
                        <p class="m-0 float-end">
                            <svg xmlns="http://www.w3.org/2000/svg" height="12" width="13.5" viewBox="0 0 576 512">
                                <path fill="#ffffff"
                                    d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                            </svg>
                            <span>Thanh toán</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fuild bg-dark ">
        <div class="container-md px-lg-5">
            <div class="Search-Bar bg-dark row align-items-center p-3">
                <div class="col-12 col-sm-3">
                    <img src="">
                </div>
                <div class="col-12 col-sm-6">
                    <form action="" class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm">
                        <span class="btn text-white btn-danger fw-bold text-uppercase">Tìm kiếm</span>
                    </form>
                </div>
                <div class="col-12 col-sm-3 p-sm-0 p-3 d-flex d-sm-block align-items-center text-center">
                    <a class="btn btn-light rounded-0  col-xxl-5 col-5 col-sm-12" href="">Đăng nhập</a>
                    <span class="text-light  col-xxl-2 col-2 col-sm-12 text-center">hoặc</span>
                    <a class="btn btn-light rounded-0  col-xxl-5 col-5 col-sm-12" href="">Đăng ký</a>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fuild " style="background-color: rgb(73,73,73);">
        <div class="container-md px-lg-5">
            <div class="text-white">
                <div class="d-flex align-items-center">
                    <div class="d-flex justify-content-start w-75">
                        <div class="d-md-block d-none">
                            <ul id="myDIV" class="d-flex align-items-center text-uppercase w-100">
                                <li class="btn-li ">
                                    <a href="" onclick="setActive(0)">Trang Chủ</a>
                                </li>
                                <li class="btn-li">
                                    <a href="" onclick="setActive(1)">Giới Thiệu</a>
                                </li>
                                <li class="btn-li">
                                    <div class="dropdown">
                                        <button class="dropbtn"><a href="" onclick="setActive(2)">Sản phẩm</a></button>
                                        <div class="dropdown-content">
                                            <a href="#">Máy tính</a>
                                            <a href="#">Phụ kiện máy tính</a>
                                            <a href="#">Điện thoại di động</a>
                                            <div class="child-drop w-100">
                                                <a href="#">Phụ kiện điện thoại</a>
                                                <svg class="icon-down" xmlns="http://www.w3.org/2000/svg" height="14"
                                                    width="7" viewBox="0 0 256 512">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <div class="child-drop-content">
                                                    <a href="#">Tai nghe điện thoại</a>
                                                    <a href="#">Miếng dán điện thoại</a>
                                                    <a href="#">Pin, sạc điện thoại</a>
                                                </div>
                                            </div>
                                            <a href="#">Sản phẩm mới</a>
                                            <a href="#">Sản phẩm nổi bật</a>
                                            <a href="#">Sản phẩm khuyến mãi</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="btn-li">
                                    <a href="" onclick="setActive(3)">Tin tức</a>
                                </li>
                                <li class="btn-li">
                                    <a href="" onclick="setActive(4)">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="d-block d-md-none justify-content-center align-items-center">
                            <button onclick="openNav()" class="border-0" style="background-color: rgb(73,73,73);">
                                <svg xmlns="http://www.w3.org/2000/svg" height="14" width="12.25" viewBox="0 0 448 512">
                                    <path fill="#ffffff"
                                        d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                                </svg>
                                <span class="ps-2 fw-bold text-white">MENU</span>
                            </button>
                            <div id="mySidenav" class="d-flex">
                                <div id="menuLeft" class="sidenavleft">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                    <a href="#">Trang chủ</a>
                                    <a href="#">Giới Thiệu</a>
                                    <div class="d-flex">
                                        <span class="col-8 justify-content-start">Sản Phẩm</span>
                                        <button onclick="dropdownMenu()" class="col-4 justify-content-end border-0"
                                            style="background-color: #111;">
                                            <svg style="margin-bottom:3px" xmlns="http://www.w3.org/2000/svg"
                                                height="14" width="8.75" viewBox="0 0 320 512">
                                                <path fill="#ffffff"
                                                    d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div id="dropdown1" class="d-none ps-2">
                                        <a href="#home">Home</a>
                                        <a href="#about">About</a>
                                        <a href="#contact">Contact</a>
                                    </div>
                                    <a href="#">Tin Tức</a>
                                    <a href="#">Liên Hệ</a>
                                </div>
                                <div id="menuRight" class="sidenavright">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end w-25 ">
                        <button type="button" style="width:75px"
                            class="bg-danger border-0 text-white position-relative fw-bold rounded-0 p-2">
                            <span style="width:20px;height:20px"
                                class="position-absolute top-0 start-50 translate-middle  border border-3 border-danger rounded-circle">
                            </span>
                            <p class="m-0">0</p>
                            <p class="m-0 d-md-block d-none" style="font-size:10px">Sản phẩm</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
