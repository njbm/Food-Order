@extends('frontend.layouts.app')
@section('content')
<section>
    <div class="page-top-baner">
        <div class="banner-sec-bg custom-padding">
            <div class="row">
                <div class="page-head-ban">
                    <div class="page-text">
                        <h1>
                            Cart
                        </h1>
                        <P>Home - <span class="page-name">Cart</span></P>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =====================================SHOPING PROGRESS============= -->
<section>
    <div class="progress-bar-wrapper">
        <ul class="order-pg">
            <li class="active">Your Details</li>
            <li class="">Your Cart</li>
            <li>Checkout</li>
            <li>Next Steps</li>
        </ul>
    </div>
</section>
<!-- =====================================SHOPING PROGRESS END============= -->

<!-- ===================================CART PRODUCT START================== -->
<section>
    <div class="car-main-sec-bg">
        <div class="container">
            <div class="row">
                <div class="table-responsive shop_cart_table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#"><img src="{{ asset('assets/frontend/') }}./img/product/4-600x600.png" class="cart-pd-img" alt="product1"></a>
                                </td>
                                <td class="product-name" data-title="Product">
                                    <a href="#">Fresh Organic Strawberry</a>
                                </td>
                                <td class="product-price" data-title="Price">$35.00</td>
                                <td class="product-quantity" data-title="Quantity">
                                    <div class="quantity">
                                        <button class="qty-count qty-count--minus minus" data-action="minus" type="button">-</button>
                                        <input class="product-qty qty" type="text" name="quantity" min="0" max="10" value="1" title="Qty" size="4">
                                        <button class="qty-count qty-count--add plus" data-action="add" type="button">+</button>
                                    </div>
                                </td>
                                <td class="product-subtotal" data-title="Total">$70.00</td>
                                <td class="product-remove" data-title="Remove">
                                    <a href="#"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#"><img src="{{ asset('assets/frontend/') }}./img/product/6-600x600.png" class="cart-pd-img" alt="product2"></a>
                                </td>
                                <td class="product-name" data-title="Product"><a href="#">Fresh Organic Grapes</a></td>
                                <td class="product-price" data-title="Price">$40.00</td>
                                <td class="product-quantity" data-title="Quantity">
                                    <div class="quantity">
                                        <button class="qty-count qty-count--minus minus" data-action="minus" type="button">-</button>
                                        <input class="product-qty qty" type="text" name="quantity" min="0" max="10" value="1" title="Qty" size="4">
                                        <button class="qty-count qty-count--add plus" data-action="add" type="button">+</button>
                                    </div>
                                </td>
                                <td class="product-subtotal" data-title="Total">$40.00</td>
                                <td class="product-remove" data-title="Remove">
                                    <a href="#"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#"><img src="{{ asset('assets/frontend/') }}./img/product/7-600x600.png" class="cart-pd-img" alt="product3"></a>
                                </td>
                                <td class="product-name" data-title="Product"><a href="#">Fresh Organic Cucumber</a></td>
                                <td class="product-price" data-title="Price">$52.00</td>
                                <td class="product-quantity" data-title="Quantity">
                                    <div class="quantity">
                                        <button class="qty-count qty-count--minus minus" data-action="minus" type="button">-</button>
                                        <input class="product-qty qty" type="text" name="quantity" min="0" max="10" value="1" title="Qty" size="4">
                                        <button class="qty-count qty-count--add plus" data-action="add" type="button">+</button>
                                    </div>
                                </td>
                                <td class="product-subtotal" data-title="Total">$156.00</td>
                                <td class="product-remove" data-title="Remove">
                                    <a href="#"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6" class="py-4">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-lg-4 col-md-6 mb-3 mb-md-0">
                                            <div class="coupon field_form input-group">
                                                <input type="text" value="" class="form-control" placeholder="Enter Coupon Code..">
                                                <div class="input-group-append">
                                                    <button class="btn btn-default btn-sm" type="submit">Apply Coupon</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-6 text-left text-md-right">
                                            <button class="btn btn-dark btn-sm" type="submit">Update Cart</button>
                                            <a href="#" class="btn btn-default btn-sm">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="heading_s2">
                        <h5>Calculate Shipping</h5>
                    </div>
                    <form class="field_form shipping_calculator">
                        <div class="form-row my-3">
                            <div class="form-group col-md-12">
                                <div class="custom_select">
                                    <select class="form-control">
                                    <option value="">Choose a option...</option>
                                    <option value="AX">Aland Islands</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="PW">Belau</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="VG">British Virgin Islands</option>
                                    <option value="BN">Brunei</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo (Brazzaville)</option>
                                    <option value="CD">Congo (Kinshasa)</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">CuraÇao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="CI">Ivory Coast</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Laos</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao S.A.R., China</option>
                                    <option value="MK">Macedonia</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia</option>
                                    <option value="MD">Moldova</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="AN">Netherlands Antilles</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="KP">North Korea</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PS">Palestinian Territory</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="QA">Qatar</option>
                                    <option value="IE">Republic of Ireland</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russia</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="ST">São Tomé and Príncipe</option>
                                    <option value="BL">Saint Barthélemy</option>
                                    <option value="SH">Saint Helena</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="SX">Saint Martin (Dutch part)</option>
                                    <option value="MF">Saint Martin (French part)</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="SM">San Marino</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia/Sandwich Islands</option>
                                    <option value="KR">South Korea</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syria</option>
                                    <option value="TW">Taiwan</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom (UK)</option>
                                    <option value="US">USA (US)</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VA">Vatican</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="WS">Western Samoa</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-6">
                                <input required="required" placeholder="State / Country" class="form-control" name="name" type="text">
                            </div>
                            <div class="col-md-6">
                                <input required="required" placeholder="PostCode / ZIP" class="form-control" name="name" type="text">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <button class="btn-main" type="submit">Update Totals</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="heading_s2">
                        <h5>Cart Totals</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table cart-T">
                            <tbody>
                                <tr>
                                    <td class="cart_total_label">Cart Subtotal</td>
                                    <td class="cart_total_amount">$266.00</td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">Shipping</td>
                                    <td class="cart_total_amount">Free Shipping</td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">Total</td>
                                    <td class="cart_total_amount"><strong>$266.00</strong></td>
                                </tr>
                            </tbody>
                        </table>
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