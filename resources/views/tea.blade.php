<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>Kawiarnia Amaryllis | Home</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <div class="col-lg-6">
                                <nav class="header__menu">
                                        @if(Auth::check() && Auth::user()-> role == "1")
                                    <ul>
                                        <li><a href= "{{ url('panel') }}">Panel Admina</a></li>
                                    </ul>
                                        @endif
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                        <div class="header__top__right__auth">
                        @auth
                                Hi, {{ auth()->user()->Imie }}
                                <a href= "{{ url('logout') }}">Log Out</a>
                                @else
                                <a href= "{{ url('login') }}">Sign In</a>
                                @endauth

                            
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="/"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="home">Home</a></li>
                            <li><a href="order">Order</a></li>
                            <li><a href="cart">Cart</a></li>
                            
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="cart"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__item set-bg" data-setbg="img/hero/banner1.jpg">
                <div class="hero__text">
                    <h2>Kawiarnia <br />Amaryllis</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Menu</h2>
                    </div>
                    <div class="featured__controls">
                            <nav class="header__menu">
                            <ul>
                                <li><a href ="/">All</li>
                                <li><a href ="cake">Cakes</li>
                                <li><a href ="drink">Drinks</li>
                                <li><a href ="coffee">Coffee</li>
                                <li class="active"><a href ="tea">Tea</li>
                            </ul>
                            </nav>
                    </div>
                </div>
            </div>
            <div class="widok">
                        @foreach ($show as $showData)
                        <div class="featured_item_small">
                        <form id ="GFG" action = "single" method= "GET">
                            <input type="hidden" value="{{$showData->ID_Produktu}}" name = "ID_Produktu"></input>
                            <button style ="background: none; border: none; padding: 0; cursor: pointer">
                            <img src="{{$showData->image}}" style="width:100%;">
                            <p>{{$showData->Nazwa}}<br>
                                <b>{{$showData->Cena}} zł</b>
                            </p>
                            </button>
                        </form>
                    </div>
                        @endforeach
            </div>
                
            
        </div>
    </section>
    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>