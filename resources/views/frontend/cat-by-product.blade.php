@extends('frontend.layouts.app')
@section('content')
<section>
    <div class="page-top-baner">
        <div class="banner-sec-bg custom-padding">
            <div class="row">
                <div class="page-head-ban">
                    <div class="page-text">
                        <h1>
                            All Product By Category
                        </h1>
                        <P>Home - <span class="page-name">All Product By Category</span></P>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ===================================CART PRODUCT START================== -->
<section>
    <div class="cat-product-show-inner my-5">
        <div class="container-fluid custom-padding">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="all-category-list">
                        <h3 class="list-name">All Category</h3>
                        <ul class="cat-list">
                            <li><a href="" class="cat-by-link active">Combo <span class="count">10</span></a></li>
                            <li><a href="" class="cat-by-link">kids menus <span class="count">10</span></a> </li>
                            <li><a href="" class="cat-by-link">Pizza <span class="count">15</span></a></li>
                            <li><a href="" class="cat-by-link">box meals <span class="count">10</span></a></li>
                            <li><a href="" class="cat-by-link">burger <span class="count">40</span></a></li>
                            <li><a href="" class="cat-by-link">chicken <span class="count">40</span></a></li>
                            <li><a href="" class="cat-by-link">sauces <span class="count">40</span></a></li>
                            <li><a href="" class="cat-by-link">Drinks <span class="count">40</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row">
                        <div class="product">
                            <div class="row product-menu">
                                <div class="col-lg-3 col-md-6 col-sm-6 my-2 col-12 mix sushi">
                                    <div class="product-inner">
                                        <div class="pruct-img-sec">
                                            <div class="product-img">
                                                <img src="{{ asset('assets/frontend/') }}./img/product/4-600x600.png" alt="Image not found" class="pd-image">
                                            </div>
                                            <div class="product-details">
                                                <div class="rating">
                                                    <ul>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                    </ul>
                                                </div>
                                                <a href="" class="product-name">
                                                    <h5>BBQ Chicken Breast</h5>
                                                </a>
                                                <p class="porduct-info">
                                                    Lorem Ipsum is simply dummy text.
                                                </p>
                                                <p class="price pt-2 ct-p"><del>$12.60</del> $8.00</p>

                                                <div class="buy-sec pd-inside">
                                                    <ul class="buy-inner">
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="sp-loading"><img src="{{ asset('assets/frontend/') }}./img/sp-loading.gif" alt=""><br>LOADING IMAGES</div>
                                                            <div class="sp-wrap">
                                                                <a href="img/product/11.png"><img src="{{ asset('assets/frontend/') }}./img/product/11.png" alt=""></a>
                                                                <a href="img/product/4-600x600.png"><img src="{{ asset('assets/frontend/') }}./img/product/4-600x600.png" alt=""></a>
                                                                <a href="img/product/6-600x600.png"><img src="{{ asset('assets/frontend/') }}./img/product/6-600x600.png" alt=""></a>
                                                                <a href="img/product/7-600x600.png"><img src="{{ asset('assets/frontend/') }}./img/product/7-600x600.png" alt=""></a>
                                                                <a href="img/product/8-600x600.png"><img src="{{ asset('assets/frontend/') }}./img/product/8-600x600.png" alt=""></a>

                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="product-details">
                                                                <h2 class="product-name-single">
                                                                    Organic Pizza whth vasitable.........
                                                                </h2>
                                                                <div class="pr-rt">
                                                                    <p class="price-single">$32</p>
                                                                    <div class="rating">
                                                                        <ul>
                                                                            <li><span class="fas fa-star"></span></li>
                                                                            <li><span class="fas fa-star"></span></li>
                                                                            <li><span class="fas fa-star"></span></li>
                                                                            <li><span class="fas fa-star"></span></li>
                                                                            <li><span class="far fa-star"></span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <p class="product-descriotion">
                                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                                                                of classical Latin literature from 45 BC, making it over 2000 years old.
                                                            </p>
                                                            <hr>
                                                            <div class="cart_extra">
                                                                <div class="cart-product-quantity">
                                                                    <div class="quantity">
                                                                        <button class="qty-count qty-count--minus minus" data-action="minus" type="button">-</button>
                                                                        <input class="product-qty qty" type="text" name="quantity" min="0" max="10" value="1" title="Qty" size="4">
                                                                        <button class="qty-count qty-count--add plus" data-action="add" type="button">+</button>

                                                                    </div>

                                                                </div>
                                                                <div class="cart_btn">
                                                                    <button class="btn-main" type="button">Add to cart</button>
                                                                    <a class="add_wishlist" href="#"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <ul class="product-meta list_none">
                                                                <li>Category: <a href="#">Fresh Fruits</a>, <a href="#">Jiuce</a></li>
                                                                <li>Tags: <a href="#" rel="tag">Fruits</a>, <a href="#" rel="tag">Natural</a>, <a href="#" rel="tag">Organic</a> </li>
                                                            </ul>
                                                            <div class="lh-social-share d-flex">
                                                                <p class="share">Share:</p>
                                                                <ul class="social-ul d-flex">
                                                                    <li><a href="" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
                                                                    <li><a href="" class="social-link"><i class="fab fa-twitter"></i></a></li>
                                                                    <li><a href="" class="social-link"><i class="fab fa-instagram"></i></a></li>
                                                                    <li><a href="" class="social-link"><i class="fab fa-linkedin"></i></a></li>
                                                                    <li><a href="" class="social-link"><i class="fab fa-pinterest"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="brand-wrap">
                                                                <h5 class="title-brand">Guaranteed Safe Checkout</h5>
                                                                <img src="{{ asset('assets/frontend/') }}./https://demo2wpopal.b-cdn.net/poco/wp-content/uploads/2020/08/trust-symbols.png" data-src="" class="image-responsive lazyloaded">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 my-2 col-12 mix salat">
                                    <div class="product-inner pizza">
                                        <div class="pruct-img-sec">
                                            <div class="product-img">
                                                <img src="{{ asset('assets/frontend/') }}./img/product/6-600x600.png" alt="Image not found" class="pd-image">
                                            </div>
                                            <div class="product-details">
                                                <div class="rating">
                                                    <ul>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                    </ul>
                                                </div>
                                                <a href="" class="product-name">
                                                    <h5>Quattro Formaggi</h5>
                                                </a>
                                                <p class="porduct-info">
                                                    Lorem Ipsum is simply dummy text.
                                                </p>
                                                <p class="price pt-2 ct-p"><del>$12.60</del> $8.00</p>

                                                <div class="buy-sec pd-inside">
                                                    <ul class="buy-inner">
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 my-2 col-12 mix salat">
                                    <div class="product-inner">
                                        <div class="pruct-img-sec">
                                            <div class="product-img">
                                                <img src="{{ asset('assets/frontend/') }}./img/product/7-600x600.png" alt="Image not found" class="pd-image">
                                            </div>
                                            <div class="product-details">
                                                <div class="rating">
                                                    <ul>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                    </ul>
                                                </div>
                                                <a href="" class="product-name">
                                                    <h5>Breakfast Complete</h5>
                                                </a>
                                                <p class="porduct-info">
                                                    Lorem Ipsum is simply dummy text.
                                                </p>
                                                <p class="price pt-2 ct-p"><del>$12.60</del> $8.00</p>

                                                <div class="buy-sec pd-inside">
                                                    <ul class="buy-inner">
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 my-2 col-12 mix burger">
                                    <div class="product-inner">
                                        <div class="pruct-img-sec">
                                            <div class="product-img">
                                                <img src="{{ asset('assets/frontend/') }}./img/product/8-600x600.png" alt="Image not found" class="pd-image">
                                            </div>
                                            <div class="product-details">
                                                <div class="rating">
                                                    <ul>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                    </ul>
                                                </div>
                                                <a href="" class="product-name">
                                                    <h5>Eggs Benedict</h5>
                                                </a>
                                                <p class="porduct-info">
                                                    Lorem Ipsum is simply dummy text.
                                                </p>
                                                <p class="price pt-2 ct-p"><del>$12.60</del> $8.00</p>

                                                <div class="buy-sec pd-inside">
                                                    <ul class="buy-inner">
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 my-2 col-12 mix burger">
                                    <div class="product-inner">
                                        <div class="pruct-img-sec">
                                            <div class="product-img">
                                                <img src="{{ asset('assets/frontend/') }}./img/product/11.png" alt="Image not found" class="pd-image">
                                            </div>
                                            <div class="product-details">
                                                <div class="rating">
                                                    <ul>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                    </ul>
                                                </div>
                                                <a href="" class="product-name">
                                                    <h5>Breakfast Complete</h5>
                                                </a>
                                                <p class="porduct-info">
                                                    Lorem Ipsum is simply dummy text.
                                                </p>
                                                <p class="price pt-2 ct-p"><del>$12.60</del> $8.00</p>

                                                <div class="buy-sec pd-inside">
                                                    <ul class="buy-inner">
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 my-2 col-12 mix dersest">
                                    <div class="product-inner">
                                        <div class="pruct-img-sec">
                                            <div class="product-img">
                                                <img src="{{ asset('assets/frontend/') }}./img/product/product2.png" alt="Image not found" class="pd-image">
                                            </div>
                                            <div class="product-details">
                                                <div class="rating">
                                                    <ul>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                    </ul>
                                                </div>
                                                <a href="" class="product-name">
                                                    <h5>Vegetarian Pasta</h5>
                                                </a>
                                                <p class="porduct-info">
                                                    Lorem Ipsum is simply dummy text.
                                                </p>
                                                <p class="price pt-2 ct-p"><del>$12.60</del> $8.00</p>

                                                <div class="buy-sec pd-inside">
                                                    <ul class="buy-inner">
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 my-2 col-12 mix dersest">
                                    <div class="product-inner">
                                        <div class="pruct-img-sec">
                                            <div class="product-img">
                                                <img src="{{ asset('assets/frontend/') }}./img/product/product3.png" alt="Image not found" class="pd-image">
                                            </div>
                                            <div class="product-details">
                                                <div class="rating">
                                                    <ul>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                    </ul>
                                                </div>
                                                <a href="" class="product-name">
                                                    <h5>Gluten-Free Pasta</h5>
                                                </a>
                                                <p class="porduct-info">
                                                    Lorem Ipsum is simply dummy text.
                                                </p>
                                                <p class="price pt-2 ct-p"><del>$12.60</del> $8.00</p>

                                                <div class="buy-sec pd-inside">
                                                    <ul class="buy-inner">
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-md-6 col-sm-6 my-2 col-12 mix first-fd">
                                    <div class="product-inner">
                                        <div class="pruct-img-sec">
                                            <div class="product-img">
                                                <img src="{{ asset('assets/frontend/') }}./img/product/product1.png" alt="Image not found" class="pd-image">
                                            </div>
                                            <div class="product-details">
                                                <div class="rating">
                                                    <ul>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="far fa-star"></span></li>
                                                    </ul>
                                                </div>
                                                <a href="" class="product-name">
                                                    <h5>Quattro Formaggi</h5>
                                                </a>
                                                <p class="porduct-info">
                                                    Lorem Ipsum is simply dummy text.
                                                </p>
                                                <p class="price pt-2 ct-p"><del>$12.60</del> $8.00</p>

                                                <div class="buy-sec pd-inside">
                                                    <ul class="buy-inner">
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===========================CART SECTION END======= -->


<!-- =================================DELEVERY SECTION START============= -->
<div class="middle_footer">
    <div class="container-fluid custom-padding">
        <div class="row">
            <div class="col-12">
                <div class="shopping_info">
                    <div class="row justify-content-center">
                        <div class="col-md-4 position-relative">
                            <div class="icon_box icon_box_style2">
                                <div class="box_icon">
                                    <i class="fas fa-truck"></i>
                                </div>
                                <div class="intro_desc">
                                    <h5>Free Delivery</h5>
                                    <p>Phasellus blandit massa enim elit of passage varius nunc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <div class="icon_box icon_box_style2">
                                <div class="box_icon">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <div class="intro_desc">
                                    <h5>30 Day Returns Guarantee</h5>
                                    <p>Phasellus blandit massa enim elit of passage varius nunc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon_box icon_box_style2">
                                <div class="box_icon">
                                    <i class="far fa-life-ring"></i>
                                </div>
                                <div class="intro_desc">
                                    <h5>27/4 Online Support</h5>
                                    <p>Phasellus blandit massa enim elit of passage varius nunc.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col-12 end -->
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
</div>
    
@endsection