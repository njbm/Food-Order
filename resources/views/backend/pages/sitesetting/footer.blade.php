@extends('Backend.layouts.layouts')

@section('main_contain')
<div class="br-mainpanel">

    <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Footer Setting</h6>
          {{--  <p class="br-section-text">A form with a label on top of each form control.</p>  --}}

          <div class="form-layout form-layout-1">
            <div class="row mg-b-25">


              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label"> Footer Site Logo: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="logo" value="" placeholder="Enter your site logo">
                </div>
            </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Footer Title: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="footertitle" value="vgbskhfshfshfshfk" placeholder="Name of the Footer Title">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email Address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="email" name="footermail" value="johnpaul@yourdomain.com" placeholder="Enter email address">
                </div>
              </div><!-- col-4 -->

                <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Footer Color: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="color" name="footercolor" value="" placeholder="Enter your site heading color">
                    </div>
              </div><!-- col-4 -->

              <div class="col-lg-8">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Footer Description: <span class="tx-danger">*</span></label>
                  <textarea id="w3review" name="footerdescription" rows="2" cols="74"></textarea>
                </div>
              </div><!-- col-8 -->


            <div class="form-layout-footer">
              <button class="btn btn-info">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->



</div><!-- br-mainpanel -->

@endsection
