@extends('frontend.layouts.app')
@section('content')
<div class="container__1">
    <div class="forms__container">
        <div class="signin__signup">
            <form action="#" class="sign__in__form">
                <h2 class="title__1">Sign in</h2>
                <div class="input__field__login">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" />
                </div>

                <div class="input__field__login">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" />
                </div>
                <input type="submit" value="Login" class="btn-main" />
                <p class="social__text">Or Sign in with social platforms</p>
                <div class="social__media">
                    <ul class="banner__social">
                        <li><a class="icon social__icon" target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="icon social__icon" target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="icon social__icon" target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a class="icon social__icon" target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a class="icon social__icon" target="_blank" href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </form>
            <form action="#" class="sign__up__form">
                <h2 class="title">Sign up</h2>
                <div class="input__field__login">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" />
                </div>
                <div class="input__field__login">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" />
                </div>
                <div class="input__field__login">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" />
                </div>
                <input type="submit" class="btn-main" value="Sign up" />
                <p class="social__text">Or Sign up with social platforms</p>
                <div class="social__media">
                    <ul class="banner__social">
                        <li><a class="icon social__icon" target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="icon social__icon" target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="icon social__icon" target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a class="icon social__icon" target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a class="icon social__icon" target="_blank" href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </form>
        </div>
    </div>

    <div class="panels__container">
        <div class="panel left__panel">
            <div class="content">
                <h3 class="white__title">New here to go sing up?</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, ex ratione. Aliquid!
                </p>
                <button class="btn-black" id="sign-up-btn">
            Sign up
          </button>
            </div>
            <img src="img/product/8.png" class="image-T" alt="" />
        </div>
        <div class="panel right__panel">
            <div class="content">
                <h3 class="white__title">You are registared ?</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum laboriosam ad deleniti.
                </p>
                <button class="btn-black" id="sign-in-btn">
            Sign in
          </button>
            </div>
            <img src="img/product/9.png" class="image-T" alt="" />
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