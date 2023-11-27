@extends('Backend.layouts.layouts')

@section('main_contain')
<div class="br-mainpanel">

    <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">General Setting</h6>
          {{--  <p class="br-section-text">A form with a label on top of each form control.</p>  --}}

          <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
              <div class="col-lg-4">

                <div class="form-group">
                  <label class="form-control-label">Name Site : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="sitename" value="John Paul" placeholder="Name of the Site">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Welcome Text: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="wlcometext" value="McDoe" placeholder="Name of the Text">
                </div>

              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email Admin: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="email" value="johnpaul@yourdomain.com" placeholder="Enter email address">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Mail Address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="address" value="Market St. San Francisco" placeholder="Enter address">
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Country: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country">
                    <option label="Choose country"></option>
                    <option value="USA">United States of America</option>
                    <option value="UK">United Kingdom</option>
                    <option value="UK">Bangladesh</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                  </select>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->



</div><!-- br-mainpanel -->

@endsection
