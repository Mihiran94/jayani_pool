<!DOCTYPE html>
<html lang="en">
<head>
    <title>Store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="aStar Fashion Template Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/styles/bootstrap-4.1.3/bootstrap.css')}}">
    <link href="{{URL::asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/styles/responsive.css')}}">
</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="header_content d-flex flex-row align-items-center justify-content-start">

            <!-- Hamburger -->
            <div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div>

            <!-- Logo -->
            <div class="header_logo">
                <a href="#"><div>a<span>star</span></div></a>
            </div>

            <!-- Navigation -->
            <nav class="header_nav">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                    <li><a href="index.html">home</a></li>
                    <li><a href="#">woman</a></li>
                    <li><a href="#">man</a></li>
                    <li><a href="#">lookbook</a></li>
                    <li><a href="#">blog</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </nav>

            <!-- Header Extra -->
            <div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">

                <!-- Language -->
                <div class="info_languages has_children">
                    <div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                    <div class="dropdown_text">english</div>
                    <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

                    <!-- Language Dropdown Menu -->
                    <ul>
                        <li><a href="#">
                                <div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                <div class="dropdown_text">french</div>
                            </a></li>
                        <li><a href="#">
                                <div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                <div class="dropdown_text">japanese</div>
                            </a></li>
                        <li><a href="#">
                                <div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                <div class="dropdown_text">russian</div>
                            </a></li>
                        <li><a href="#">
                                <div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                <div class="dropdown_text">spanish</div>
                            </a></li>
                    </ul>

                </div>

                <!-- Currency -->
                <div class="info_currencies has_children">
                    <div class="dropdown_text">usd</div>
                    <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

                    <!-- Currencies Dropdown Menu -->
                    <ul>
                        <li><a href="#"><div class="dropdown_text">EUR</div></a></li>
                        <li><a href="#"><div class="dropdown_text">YEN</div></a></li>
                        <li><a href="#"><div class="dropdown_text">GBP</div></a></li>
                        <li><a href="#"><div class="dropdown_text">CAD</div></a></li>
                    </ul>

                </div>

                <!-- Cart -->
                <div class="cart d-flex flex-row align-items-center justify-content-start">
                    <div class="cart_icon"><a href="cart.html">
                            <img src="images/bag.png" alt="">
                            <div class="cart_num">2</div>
                        </a></div>
                </div>

            </div>

        </div>
    </header>

    <!-- Menu -->

    <div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
        <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
        <div class="menu_top d-flex flex-row align-items-center justify-content-start">

            <!-- Language -->
            <div class="info_languages has_children">
                <div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                <div class="dropdown_text">english</div>
                <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

                <!-- Language Dropdown Menu -->
                <ul>
                    <li><a href="#">
                            <div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">french</div>
                        </a></li>
                    <li><a href="#">
                            <div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">japanese</div>
                        </a></li>
                    <li><a href="#">
                            <div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">russian</div>
                        </a></li>
                    <li><a href="#">
                            <div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">spanish</div>
                        </a></li>
                </ul>

            </div>

            <!-- Currency -->
            <div class="info_currencies has_children">
                <div class="dropdown_text">usd</div>
                <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

                <!-- Currencies Dropdown Menu -->
                <ul>
                    <li><a href="#"><div class="dropdown_text">EUR</div></a></li>
                    <li><a href="#"><div class="dropdown_text">YEN</div></a></li>
                    <li><a href="#"><div class="dropdown_text">GBP</div></a></li>
                    <li><a href="#"><div class="dropdown_text">CAD</div></a></li>
                </ul>

            </div>

        </div>
        <div class="menu_search">
            <form action="#" class="header_search_form menu_mm">
                <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                    <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <nav class="menu_nav">
            <ul class="menu_mm">
                <li class="menu_mm"><a href="index.html">home</a></li>
                <li class="menu_mm"><a href="#">woman</a></li>
                <li class="menu_mm"><a href="#">man</a></li>
                <li class="menu_mm"><a href="#">lookbook</a></li>
                <li class="menu_mm"><a href="blog.html">blog</a></li>
                <li class="menu_mm"><a href="contact.html">contact</a></li>
            </ul>
        </nav>
        <div class="menu_extra">
            <div class="menu_social">
                <ul>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Sidebar -->

    <div class="sidebar">

        <!-- Info -->
        <div class="info">
            <div class="info_content d-flex flex-row align-items-center justify-content-start">

                <!-- Language -->
                <div class="info_languages has_children">
                    <div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                    <div class="dropdown_text">english</div>
                    <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

                    <!-- Language Dropdown Menu -->
                    <ul>
                        <li><a href="#">
                                <div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                <div class="dropdown_text">french</div>
                            </a></li>
                        <li><a href="#">
                                <div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                <div class="dropdown_text">japanese</div>
                            </a></li>
                        <li><a href="#">
                                <div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                <div class="dropdown_text">russian</div>
                            </a></li>
                        <li><a href="#">
                                <div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                <div class="dropdown_text">spanish</div>
                            </a></li>
                    </ul>

                </div>

                <!-- Currency -->
                <div class="info_currencies has_children">
                    <div class="dropdown_text">usd</div>
                    <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

                    <!-- Currencies Dropdown Menu -->
                    <ul>
                        <li><a href="#"><div class="dropdown_text">EUR</div></a></li>
                        <li><a href="#"><div class="dropdown_text">YEN</div></a></li>
                        <li><a href="#"><div class="dropdown_text">GBP</div></a></li>
                        <li><a href="#"><div class="dropdown_text">CAD</div></a></li>
                    </ul>

                </div>

            </div>
        </div>

        <!-- Logo -->
        <div class="sidebar_logo">
            <a href="#"><div>a<span>star</span></div></a>
        </div>

        <!-- Sidebar Navigation -->
        <nav class="sidebar_nav">
            <ul>
                <li><a href="index.html">home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="blog.html">blog<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="#">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            </ul>
        </nav>

        <!-- Search -->
        <div class="search">
            <form action="#" class="search_form" id="sidebar_search_form">
                <input type="text" class="search_input" placeholder="Search" required="required">
                <button class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>

        <!-- Cart -->
        <div class="cart d-flex flex-row align-items-center justify-content-start">
            <div class="cart_icon"><a href="cart.html">
                    <img src="images/bag.png" alt="">
                    <div class="cart_num">2</div>
                </a></div>
            <div class="cart_text">bag</div>
            <div class="cart_price">$39.99 (1)</div>
        </div>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/product_background.jpg" data-speed="0.8"></div>
        <div class="home_container">
            <div class="home_content">
                <div class="home_title">Cart</div>
                <div class="breadcrumbs">
                    <ul class="d-flex flex-row align-items-center justify-content-start">
                        <li><a href="index.html">Home</a></li>
                        <li>Your Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart -->

    <div class="cart_section">
        <div class="section_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="cart_container">

                            <!-- Cart Bar -->
                            <div class="cart_bar">
                                <ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-start">
                                    <li>Product</li>
                                    <li>Color</li>
                                    <li>Size</li>
                                    <li>Price</li>
                                    <li>Quantity</li>
                                    <li>Total</li>
                                </ul>
                            </div>

                            <!-- Cart Items -->
                            <div class="cart_items">
                                <ul class="cart_items_list">

                                    <!-- Cart Item -->
                                    <li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                                        <div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                                            <div><div class="product_image"><img src="images/cart_1.jpg" alt=""></div></div>
                                            <div class="product_name"><a href="product.html">Brown Shoulder Bag</a></div>
                                        </div>
                                        <div class="product_color text-lg-center product_text"><span>Color: </span>Brown</div>
                                        <div class="product_size text-lg-center product_text"><span>Size: </span>One Size</div>
                                        <div class="product_price text-lg-center product_text"><span>Price: </span>$19.50</div>
                                        <div class="product_quantity_container">
                                            <div class="product_quantity ml-lg-auto mr-lg-auto text-center">
                                                <span class="product_text product_num">1</span>
                                                <div class="qty_sub qty_button trans_200 text-center"><span>-</span></div>
                                                <div class="qty_add qty_button trans_200 text-center"><span>+</span></div>
                                            </div>
                                        </div>
                                        <div class="product_total text-lg-center product_text"><span>Total: </span>$19.50</div>
                                    </li>
                                </ul>
                            </div>

                            <!-- Cart Buttons -->
                            <div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
                                <div class="cart_buttons_inner ml-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    <div class="button button_continue trans_200"><a href="categories.html">continue shopping</a></div>
                                    <div class="button button_clear trans_200"><a href="categories.html">clear cart</a></div>
                                    <div class="button button_update trans_200"><a href="categories.html">update cart</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section_container cart_extra_container">
            <div class="container">
                <div class="row">

                    <!-- Shipping & Delivery -->
                    <div class="col-xxl-6">
                        <div class="cart_extra cart_extra_1">
                            <div class="cart_extra_content cart_extra_coupon">
                                <div class="cart_extra_title">Coupon code</div>
                                <div class="coupon_form_container">
                                    <form action="#" id="coupon_form" class="coupon_form">
                                        <input type="text" class="coupon_input" required="required">
                                        <button class="coupon_button">apply code</button>
                                    </form>
                                </div>
                                <div class="shipping">
                                    <div class="cart_extra_title">Shipping Method</div>
                                    <ul>
                                        <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                                            <label class="radio_container">
                                                <input type="radio" id="radio_1" name="shipping_radio" class="shipping_radio">
                                                <span class="radio_mark"></span>
                                                <span class="radio_text">Next day delivery</span>
                                            </label>
                                            <div class="shipping_price ml-auto">$4.99</div>
                                        </li>
                                        <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                                            <label class="radio_container">
                                                <input type="radio" id="radio_2" name="shipping_radio" class="shipping_radio">
                                                <span class="radio_mark"></span>
                                                <span class="radio_text">Standard delivery</span>
                                            </label>
                                            <div class="shipping_price ml-auto">$1.99</div>
                                        </li>
                                        <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                                            <label class="radio_container">
                                                <input type="radio" id="radio_3" name="shipping_radio" class="shipping_radio" checked>
                                                <span class="radio_mark"></span>
                                                <span class="radio_text">Personal Pickup</span>
                                            </label>
                                            <div class="shipping_price ml-auto">Free</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Total -->
                    <div class="col-xxl-6">
                        <div class="cart_extra cart_extra_2">
                            <div class="cart_extra_content cart_extra_total">
                                <div class="cart_extra_title">Cart Total</div>
                                <ul class="cart_extra_total_list">
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="cart_extra_total_title">Subtotal</div>
                                        <div class="cart_extra_total_value ml-auto">$29.90</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="cart_extra_total_title">Shipping</div>
                                        <div class="cart_extra_total_value ml-auto">Free</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="cart_extra_total_title">Total</div>
                                        <div class="cart_extra_total_value ml-auto">$29.90</div>
                                    </li>
                                </ul>
                                <div class="checkout_button trans_200"><a href="checkout.html">proceed to checkout</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->

    <div class="newsletter">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="newsletter_content text-center">
                        <div class="newsletter_title_container">
                            <div class="newsletter_title">subscribe to our newsletter</div>
                            <div class="newsletter_subtitle">we won't spam, we promise!</div>
                        </div>
                        <div class="newsletter_form_container">
                            <form action="#" id="newsletter_form" class="newsletter_form">
                                <input type="email" class="newsletter_input" placeholder="your e-mail here" required="required">
                                <button class="newsletter_button">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="footer_content">
            <div class="section_container">
                <div class="container">
                    <div class="row">

                        <!-- About -->
                        <div class="col-xxl-3 col-md-6 footer_col">
                            <div class="footer_about">
                                <!-- Logo -->
                                <div class="footer_logo">
                                    <a href="#"><div>a<span>star</span></div></a>
                                </div>
                                <div class="footer_about_text">
                                    <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam fringilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
                                </div>
                                <div class="cards">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="#"><img src="images/card_1.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="images/card_2.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="images/card_3.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="images/card_4.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="images/card_5.jpg" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Questions -->
                        <div class="col-xxl-3 col-md-6 footer_col">
                            <div class="footer_questions">
                                <div class="footer_title">questions</div>
                                <div class="footer_list">
                                    <ul>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Track Orders</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Jobs</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Partners</a></li>
                                        <li><a href="#">Bloggers</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">Press</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Blog -->
                        <div class="col-xxl-3 col-md-6 footer_col">
                            <div class="footer_blog">
                                <div class="footer_title">blog</div>
                                <div class="footer_blog_container">

                                    <!-- Blog Item -->
                                    <div class="footer_blog_item d-flex flex-row align-items-start justify-content-start">
                                        <div class="footer_blog_image"><a href="blog.html"><img src="images/footer_blog_1.jpg" alt=""></a></div>
                                        <div class="footer_blog_content">
                                            <div class="footer_blog_title"><a href="blog.html">what shoes to wear</a></div>
                                            <div class="footer_blog_date">june 06, 2018</div>
                                            <div class="footer_blog_link"><a href="blog.html">Read More</a></div>
                                        </div>
                                    </div>

                                    <!-- Blog Item -->
                                    <div class="footer_blog_item d-flex flex-row align-items-start justify-content-start">
                                        <div class="footer_blog_image"><a href="blog.html"><img src="images/footer_blog_2.jpg" alt=""></a></div>
                                        <div class="footer_blog_content">
                                            <div class="footer_blog_title"><a href="blog.html">trends this year</a></div>
                                            <div class="footer_blog_date">june 06, 2018</div>
                                            <div class="footer_blog_link"><a href="blog.html">Read More</a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Contact -->
                        <div class="col-xxl-3 col-md-6 footer_col">
                            <div class="footer_contact">
                                <div class="footer_title">contact</div>
                                <div class="footer_contact_list">
                                    <ul>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>C.</span><div>Your Company Ltd</div></li>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>A.</span><div>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68</div></li>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>T.</span><div>+53 345 7953 32453</div></li>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>E.</span><div>office@youremail.com</div></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social -->
        <div class="footer_social">
            <div class="section_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_social_container d-flex flex-row align-items-center justify-content-between">
                                <!-- Instagram -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">instagram</div>
                                    </div>
                                </a>
                                <!-- Google + -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">google +</div>
                                    </div>
                                </a>
                                <!-- Pinterest -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-pinterest" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">pinterest</div>
                                    </div>
                                </a>
                                <!-- Facebook -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">facebook</div>
                                    </div>
                                </a>
                                <!-- Twitter -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">twitter</div>
                                    </div>
                                </a>
                                <!-- YouTube -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">youtube</div>
                                    </div>
                                </a>
                                <!-- Tumblr -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-tumblr-square" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">tumblr</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Credits -->
        <div class="credits">
            <div class="section_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="credits_content d-flex flex-row align-items-center justify-content-end">
                                <div class="credits_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<script src="{{URL::asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{URL::asset('assets/styles/bootstrap-4.1.3/popper.js')}}"></script>
<script src="{{URL::asset('assets/styles/bootstrap-4.1.3/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{URL::asset('assets/plugins/easing/easing.js')}}"></script>
<script src="{{URL::asset('assets/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/Isotope/fitcolumns.js')}}"></script>
<script src="{{URL::asset('assets/js/custom.js')}}"></script>
</body>
</html>
