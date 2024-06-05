<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/styles/style.css">
    <link rel="stylesheet" href="public/styles/navbar.css">
</head>

<body>
    <div class="container-fuild " style="background-color: rgb(73,73,73);">
        <div class="container-md">
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
        <div class="container-md">
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
        <div class="container-md">
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
                                        <div class="dropdown-content" >
                                            <a href="#">Link 1</a>
                                            <a href="#">Link 2</a>
                                            <a href="#">Link 3</a>
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
    <div class="container-fuild bg-body-secondary d-md-block d-none">
        <div class="container-md">
            <div class="row text-uppercase py-2">
                <div class="col-3  justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="17.5" viewBox="0 0 640 512">
                        <path
                            d="M48 0C21.5 0 0 21.5 0 48V368c0 26.5 21.5 48 48 48H64c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H48zM416 160h50.7L544 237.3V256H416V160zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                    </svg>
                    <span class="ps-2">Miễn Phí vận chuyển</span>
                </div>
                <div class="col-3  justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="17.5" viewBox="0 0 640 512">
                        <path
                            d="M208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 38.6 14.7 74.3 39.6 103.4c-3.5 9.4-8.7 17.7-14.2 24.7c-4.8 6.2-9.7 11-13.3 14.3c-1.8 1.6-3.3 2.9-4.3 3.7c-.5 .4-.9 .7-1.1 .8l-.2 .2 0 0 0 0C1 327.2-1.4 334.4 .8 340.9S9.1 352 16 352c21.8 0 43.8-5.6 62.1-12.5c9.2-3.5 17.8-7.4 25.3-11.4C134.1 343.3 169.8 352 208 352zM448 176c0 112.3-99.1 196.9-216.5 207C255.8 457.4 336.4 512 432 512c38.2 0 73.9-8.7 104.7-23.9c7.5 4 16 7.9 25.2 11.4c18.3 6.9 40.3 12.5 62.1 12.5c6.9 0 13.1-4.5 15.2-11.1c2.1-6.6-.2-13.8-5.8-17.9l0 0 0 0-.2-.2c-.2-.2-.6-.4-1.1-.8c-1-.8-2.5-2-4.3-3.7c-3.6-3.3-8.5-8.1-13.3-14.3c-5.5-7-10.7-15.4-14.2-24.7c24.9-29 39.6-64.7 39.6-103.4c0-92.8-84.9-168.9-192.6-175.5c.4 5.1 .6 10.3 .6 15.5z" />
                    </svg>
                    <span class="ps-2">Hỗ trợ 24/7</span>
                </div>
                <div class="col-3  justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512">
                        <path
                            d="M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zm64 320H64V320c35.3 0 64 28.7 64 64zM64 192V128h64c0 35.3-28.7 64-64 64zM448 384c0-35.3 28.7-64 64-64v64H448zm64-192c-35.3 0-64-28.7-64-64h64v64zM288 160a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" />
                    </svg>
                    <span class="ps-2">Hoàn tiền trong 15 ngày</span>
                </div>
                <div class="col-3  justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512">
                        <path
                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                    </svg>
                    <span class="ps-2">Giảm giá theo đơn hàng</span>
                </div>
            </div>
        </div>
    </div>