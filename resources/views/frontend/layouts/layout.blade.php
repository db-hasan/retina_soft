<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css') }} ">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{asset('backend/css/jquery.dataTables.css') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
    
</head>
<body>
    <div>
    <div class="navigation bg-dark text-light">
        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <div class="navigation_contact">
                    <div class="d-flex">
                        <a class="p-2" href=""
                            target="_blank"><i class="fa-solid fa-phone fa-lg"></i> +880 1723629080</a>
                        <a class="p-2" href=""
                            target="_blank"><i class="fa-regular fa-envelope fa-xl"></i> info@helpsx.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header bg-dark text-light">
        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <div class="header_logo p-2" style="width: 25%;">
                    <a href="">RAYNS</a>
                </div>
                <div class="header_search p-2" style="width: 50%;">
                    <div class="search">
                        <div class="input-group" style="width: 100%;">
                            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">All</button>
                            <ul class="dropdown-menu " style="width: 200px;">
                                <li class="dropdown-item"><a class="dropdown-link" href="#">Stock Report</a></li>
                                <li class="dropdown-item"><a class="dropdown-link" href="#">Stock Report</a></li>
                                <li class="dropdown-item"><a class="dropdown-link" href="#">Stock Report</a></li>
                                <li class="dropdown-item"><a class="dropdown-link" href="#">Stock Report</a></li>
                            </ul>
                            <input type="text" class="form-control" aria-label="Text input with 2 dropdown buttons">
                            <button class="btn btn-light" type="button" >
                                <a class="" href=""><i class="fa-solid fa-magnifying-glass fa-lg"></i></a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="shop  p-2" style="width: 25%;">
                    <div class="header_bar">
                        <div class="d-flex justify-content-end">
                            <a class="p-2" href=""><i class="fa-solid fa-cart-arrow-down fa-2xl"></i></a>
                            <a class="p-2" href=""><i class="fa-solid fa-heart fa-2xl"></i></a>
                            <a class="p-2" href=""><i class="fa-solid fa-circle-user fa-2xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="#"><i class="fa-solid fa-house"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Laptop</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Desktop</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Monitor</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Camera</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pinter</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sound System</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="">
        @yield('content')
    </div>

    <div class="footer bg-dark text-light px-5">
        <div class="container-fluid">
            <div class="contact text-center">
                <h3>Contact me</h3>
            </div>
            <div class="row py-4">
                <div class="col">
                    <p class="footer_navigation"><a href="">About us</a></p>
                    <li><a href="">Head office</a></li>
                    <li><a href="">Ryans Computers Limited</a></li>
                    <li><a href="">Kusholi Bhaban, 4th Floor,</a></li>
                    <li><a href="">Rokeya Sharani, Agargaon, Dhaka-1207</a></li>
                    <li>
                        <a href="">+8809604442121</a>
                        <a href="">+8809604442121</a>
                    </li>
                </div>
                <div class="col bdr">
                    <p class="footer_navigation"><a href="">Head office</a></p>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Ryans Computers Limited</a></li>
                    <li><a href="">Kusholi Bhaban, 4th Floor,</a></li>
                    <li><a href="">Rokeya Sharani, Agargaon, Dhaka-1207</a></li>
                    <li>
                        <a href="">+8809604442121</a>
                        <a href="">+8809604442121</a>
                    </li>
                </div>
                <div class="col bdr">
                    <p class="footer_navigation"><a href="">Payment system</a></p>
                    <div class="card_img">
                        <img src="{{asset('images/card.png') }}" alt="">
                    </div>
                    <div class="mobile_img">
                        <img src="{{asset('images/mobile.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col bdr">
                    <p class="footer_navigation"><a href="">Contact Us</a></p>
                    <li><a href="">Head office</a></li>
                    <li><a href="">Ryans Computers Limited</a></li>
                    <li><a href="">Kusholi Bhaban, 4th Floor,</a></li>
                    <li><a href="">Rokeya Sharani, Agargaon, Dhaka-1207</a></li>
                    <li>
                        <a href="">+8809604442121</a>
                        <a href="">+8809604442121</a>
                    </li>
                    <li>
                        <div class="d-flex ">
                        <a class="p-2" href="https://www.facebook.com/infoalihasanbd"target="_blank"><i class="fa-brands fa-facebook fa-xl"></i></a>
                        <a class="p-2" href="https://www.instragram/"target="_blank"><i class="fa-brands fa-instagram fa-xl"></i></a>
                        <a class="p-2" href="https://wa.me/1723629080" target="_blank"><i class=" fa-brands fa-whatsapp fa-xl"></i></a>
                    </div>
                    </li>
                </div>
            </div>
            <div class="text-center p-4">
                <p class="footer_navigation">
                    <a href="">Accessibility</a>, <a href="">User Agreement</a>, <a href="">Privacy</a>, <a href="">Payments Terms of Use</a>, <a href="">Cookies</a>, <a href="">Your Privacy Choices and AdChoice.</a>
                </p>
                <p>Copyright © 2022-2023 Ryans Computers Limited. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    


    <script src="{{asset('library/js/jquery-3.7.1.min.js') }} "></script>
    <script src="{{asset('bootstrap/bootstrap.bundle.min.js') }} "></script>
    <script src="{{asset('frontend/js/main.js') }} "></script>
</body>
</html>