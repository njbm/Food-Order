@extends('frontend.layouts.app')
@section('content')
                <!-- ===============================SLIDER SECTION START============== -->
                <section>
                    <div class="page-top-baner">
                        <div class="banner-sec-bg custom-padding">
                            <div class="row">
                                <div class="page-head-ban">
                                    <div class="page-text">
                                        <h1>
                                            Wishlist
                                        </h1>
                                        <P>Home - <span class="page-name">Wishlist</span></P>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    
    
                <!-- ===================================CART PRODUCT START================== -->
                <section>
                    <div class="car-main-sec-bg mt-5">
                        <div class="container">
                            <div class="row">
                                <div class="table-responsive shop_cart_table">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">Image</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-stock">Stock</th>
                                                <th class="product-subtotal">Add Cart</th>
                                                <th class="product-remove">Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="#">
                                                        <img src="img/product/4-600x600.png" class="cart-pd-img" alt="product1">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">Fresh Organic Strawberry</a>
                                                </td>
                                                <td class="product-price">$35.00</td>
                                                <td class="product-stock-status">
                                                    <span class="badge rounded-pill bg-success">In Stock</span>
                                                </td>
                                                <td class="product-subtotal">
                                                    <a href="#" class="btn-main">Add To Cart</a>
                                                </td>
                                                <td class="product-remove">
                                                    <a href="#"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="#">
                                                        <img src="img/product/6-600x600.png" class="cart-pd-img" alt="product2">
                                                    </a>
                                                </td>
                                                <td class="product-name"><a href="#">Fresh Organic Grapes</a></td>
                                                <td class="product-price">$40.00</td>
                                                <td class="product-stock-status">
                                                    <span class="badge rounded-pill bg-danger">Out Of Stock</span>
                                                </td>
                                                <td class="product-subtotal">
                                                    <a href="#" class="btn-main">Add To Cart</a>
                                                </td>
                                                <td class="product-remove">
                                                    <a href="#"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="#">
                                                        <img src="img/product/7-600x600.png" class="cart-pd-img" alt="product3">
                                                    </a>
                                                </td>
                                                <td class="product-name"><a href="#">Fresh Organic Cucumber</a></td>
                                                <td class="product-price">$52.00</td>
                                                <td class="product-stock-status">
                                                    <span class="badge rounded-pill bg-success">In Stock</span>
                                                </td>
                                                <td class="product-subtotal">
                                                    <a href="#" class="btn-main">Add To Cart</a>
                                                </td>
                                                <td class="product-remove">
                                                    <a href="#"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="6" class="py-4">
                                                    <div class="row no-gutters align-items-center">
    
                                                        <div class="col-lg-8 col-md-6 text-left text-md-right">
                                                            <a href="#" class="btn-black ">CONTINUE SHOPPING</a>
                                                            <a href="#" class="btn-main">PROCEED TO CHECKOUT</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
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