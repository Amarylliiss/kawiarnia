<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amaryllis | Admin Dashboard</title>

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
                    <div class="col-lg-6">
                        <div class="header__top__left">

                        </div>
                    </div>
                    <div class="col-lg-6">
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
                                <li><a href="{{url('/')}}">Back to main page</a></li>
                                <li><a href="#">Users</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="{{url('user-add')}}">Add</a></li>
                                        <li><a href="{{url('user-edit')}}">Edit</a></li>
                                        <li><a href="{{url('user-delete')}}">Delete</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Products</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="{{url('product-add')}}">Add</a></li>
                                        <li><a href="{{url('product-edit')}}">Edit</a></li>
                                        <li><a href="{{url('product-delete')}}">Delete</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Orders</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="{{url('order-edit')}}">Edit</a></li>
                                        <li><a href="{{url('order-delete')}}">Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
    </header>
    <!-- Header Section End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <div class="checkout__form">
                            <h4>Adding Products</h4>
                            <form method="post" action="product-add">
                                <div class="row">
                                    <div class="col-lg-8 col-md-6">
                                        <div class="row">

                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                            <div class="col-lg-6">
                                                <div class="checkout__input">
                                                    <p>Product name</p>
                                                    <input type="text" name="Nazwa" id="Nazwa" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkout__input">
                                                    <p>Price</p>
                                                    <input type="text" name="Cena" id="Cena" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="checkout__input">
                                            <p>Weight</p>
                                            <input type="text" name="Waga" id="Waga" />
                                        </div>
                                        <div class="checkout__input">
                                            <p>Category</p>
                                            <input type="text" name="Kategoria" id="Kategoria" />
                                        </div>
                                        <div class="checkout__input">
                                            <p>Image</p>
                                            <input type="text" name="image" id="image" />
                                        </div>
                                        @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                        <div>{{$error}}</div>
                                        @endforeach
                                        @endif
                                        <input type='submit' value="Add Product" class="site-btn">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Blog Details Section End -->





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