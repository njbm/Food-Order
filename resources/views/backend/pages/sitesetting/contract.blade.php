@extends('Backend.layouts.layouts')

@section('main_contain')
<div class="br-mainpanel">

    <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Contract Setting</h6>
          {{--  <p class="br-section-text">A form with a label on top of each form control.</p>  --}}

          <div class="form-layout form-layout-1">
            <div class="row mg-b-25">

            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Email Adress 1: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="email1" value="johnpaul@yourdomain.com" placeholder="Enter email address 1">
              </div>

            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Email Adress 2: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="email2" value="johnpaul@yourdomain.com" placeholder="Enter email address 2">
              </div>
            </div><!-- col-4 -->


              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Address 1: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="address1" value="Road 1, Mohakhali Dohs" placeholder="Enter company address 1">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Address 2: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="address2" value="Market St. San Francisco" placeholder="Enter company address 2">
                </div>
            </div><!-- col-4 -->

            <div class="col-lg-4">
              <div class="form-group mg-b-10-force">
                <label class="form-control-label">Contract Number 1: <span class="tx-danger">*</span></label>
                <input class="form-control" type="tel" name="contract1" value="+88 0123XXXXXXX" placeholder="Enter contract Number 1">
              </div>
            </div><!-- col-4 -->

            <div class="col-lg-4">
              <div class="form-group mg-b-10-force">
                <label class="form-control-label">Contract Number 2: <span class="tx-danger">*</span></label>
                <input class="form-control" type="tel" name="contract2" value="+88 0123XXXXXXXX" placeholder="Enter contract Number 2">
              </div>

            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->



</div><!-- br-mainpanel -->

@endsection
