@extends('frontend.layouts.app')
@section('content')
<div class="main__body">
    <div class="profile-inner">
        <div class="container">
            <div class="row pt-2">
                <div class="col-md-3 col-lg-3">
                    <div class="left__side__bg ">
                        <div class="shop__filter">
                            <!-- <h5> ACCOUNT</h5> -->
                            <div class="shop__fl__body">
                                <div class="profile__head">
                                    <div class="user__name">
                                        <img src="img/user/avatar-3.jpg" class="user__image" alt="">
                                        <h3>Helal Uddin</h3>
                                    </div>
                                </div>
                                <div class="list-group">
                                    <ul class="list-item">
                                        <li class="active"><a href=""><i class="fa fa-home"></i> Dashboard</a></li>
                                        <li><a href=""><i class="fa fa-file-medical-alt"></i> Purchase History</a></li>
                                        <li><a href=""><i class="fa fa-download"></i> Download</a></li>
                                        <li><a href=""><i class="fa fa-heart"></i> Wishlist</a></li>
                                        <li><a href=""><i class="fa fa-gem"></i> Classified Product</a></li>
                                        <li><a href=""><i class="fa fa-clipboard"></i> Conversations</a></li>
                                        <li><a href=""><i class="fa fa-dollar-sign"></i> My Wallet</a></li>
                                        <li><a href=""><i class="fa fa-ticket-alt"></i> Support Ticket</a></li>
                                        <li><a href=""><i class="fa fa-user-cog"></i> Manage Profile</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-lg-9 pt-3">
                    <div class="row">
                        <div class="col-lg-4 mt-2">
                            <div class="cart__bg">
                                <h5> 0 Product</h5>
                                <p>In your cart</p>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-2">
                            <div class="wishlist__bg">
                                <h5> 0 Product (0)</h5>
                                <p>In your wishlist</p>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-2">
                            <div class="ordered__bg">
                                <h5> 0 Product (0)</h5>
                                <p>In your ordered</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-responsive mt-5">
                            <table class="table table-bordered table__font display">
                                <thead class="mt-3">
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date Added</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">View</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                            <a href="" class="image__a"><img src="img/product/gallery_image1-min-1-768x768.jpg" alt="" class="table__pd__img"></a>
                                        </td>
                                        <td><a href="" class="name__link">Swatch Lating Lunter</a></td>
                                        <td>#214521</td>
                                        <td>1</td>
                                        <td>Shipped</td>
                                        <td>21/01/2018</td>
                                        <td>$228.00</td>
                                        <td class="text-right">
                                            <a class="view__btn" title="" data-toggle="tooltip" href="" data-original-title="Remove"><i class="far fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="" class="image__a"><img src="img/product/gallery_image2-min-1-768x768.jpg" alt="" class="table__pd__img"></a>
                                        </td>
                                        <td><a href="" class="name__link">Swatch Lating Lunter</a></td>
                                        <td>#214521</td>
                                        <td>1</td>
                                        <td>Shipped</td>
                                        <td>21/01/2018</td>
                                        <td>$228.00</td>
                                        <td class="text-right">
                                            <a class="view__btn" title="" data-toggle="tooltip" href="" data-original-title="Remove"><i class="far fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="" class="image__a"><img src="img/product/gallery_image4-min-768x768.jpg" alt="" class="table__pd__img"></a>
                                        </td>
                                        <td><a href="" class="name__link">Swatch Lating Lunter</a></td>
                                        <td>#214521</td>
                                        <td>1</td>
                                        <td>Shipped</td>
                                        <td>21/01/2018</td>
                                        <td>$228.00</td>
                                        <td class="text-right">
                                            <a class="view__btn" title="" data-toggle="tooltip" href="" data-original-title="Remove"><i class="far fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="" class="image__a"><img src="img/product/gallery_image5-min-768x768.jpg" alt="" class="table__pd__img"></a>
                                        </td>
                                        <td><a href="" class="name__link">Swatch Lating Lunter</a></td>
                                        <td>#214521</td>
                                        <td>1</td>
                                        <td>Shipped</td>
                                        <td>21/01/2018</td>
                                        <td>$228.00</td>
                                        <td class="text-right">
                                            <a class="view__btn" title="" data-toggle="tooltip" href="" data-original-title="Remove"><i class="far fa-eye"></i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>




            </div>
        </div>
    </div>



    <div class="map-bg my-5">
        <div class="container">
            <div class="row">
                <div class="section-head mb-3">
                    <h2>Traking Map</h2>
                </div>
            </div>
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931728.1462115585!2d89.13571462854712!3d24.187051607484765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc117652f3cb19%3A0x13c1e5d48dfc36bf!2sSyed%20Bari%2C%20Natore!5e0!3m2!1sen!2sbd!4v1622197584345!5m2!1sen!2sbd"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>












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