@extends('frontend.layouts.app')

@section('content')

      @include('frontend.partials.beardcumb')

              <!-- ===================================CART PRODUCT START================== -->
              <section>
               <div class="contact-area my-5">
                   <div class="container">
                       <div class="row">
                           <div class="col-lg-4 col-md-6">
                               <div class="heading_s2 mb-3">
                                   <h3>Get In touch</h3>
                               </div>
                               <p class="contact-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                               <ul class="contact_info list_none">
                                   <li>
                                       <span class="contact-icon fas fa-phone"></span>
                                       <p>+123 456 7890</p>
                                   </li>
                                   <li>
                                       <span class="contact-icon fas fa-mail-bulk"></span>
                                       <a href="mailto:info@yourmail.com" class="contact-mail">info@yourmail.com</a>
                                   </li>
                                   <li>
                                       <span class="contact-icon fas fa-location-arrow"></span>
                                       <address>123 Street, Old Trafford, NewYork, USA</address>
                                   </li>
                               </ul>
                           </div>

                           <div class="col-lg-8 col-md-6 mt-4 mt-lg-0">
                               <div class="field_form">
                                   <form method="post" name="enq">
                                       <div class="row">
                                           <div class="form-group col-lg-6">
                                               <input required="required" placeholder="Enter Name *" id="first-name" class="form-control" name="name" type="text">
                                           </div>
                                           <div class="form-group col-lg-6">
                                               <input required="required" placeholder="Enter Email *" id="email" class="form-control" name="email" type="email">
                                           </div>
                                           <div class="form-group col-12">
                                               <input placeholder="Enter Subject" id="subject" class="form-control" name="subject" type="text">
                                           </div>
                                           <div class="form-group col-lg-12">
                                               <textarea required="required" placeholder="Message *" id="description" class="form-control" name="message" rows="8"></textarea>
                                           </div>
                                           <div class="col-lg-12">
                                               <button type="submit" title="Submit Your Message!" class="btn-main" id="submitButton" name="submit" value="Submit">Submit</button>
                                           </div>
                                       </div>
                                   </form>
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