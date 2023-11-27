@extends('Backend.layouts.layouts')

@section('main_contain')
<div class="br-mainpanel">

    <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Limit Setting</h6>
          {{--  <p class="br-section-text">A form with a label on top of each form control.</p>  --}}

          <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Number of row : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="row" value="2" placeholder="Number of row">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Minimum Ammount: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="lastname" value="1000" placeholder="Minimum Ammount">
                </div>

              </div><!-- col-8 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">File Size Allow: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="File Size Allow">
                    <option label="Choose File Size"></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="4">4</option>
                    <option value="8">8</option>
                    <option value="12">12</option>
                  </select>
                </div>
              </div><!-- col-4 -->

            <div class="col-lg-4">
              <div class="form-group mg-b-10-force">
                <label class="form-control-label">Number of Product Show: <span class="tx-danger">*</span></label>
                <select class="form-control select2" data-placeholder="File Size Allow">
                  <option label="Show Product"></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="4">4</option>
                  <option value="8">8</option>
                  <option value="12">12</option>
                </select>
              </div>
            </div><!-- col-4 -->
        </div><!-- col-8 -->


            <div class="form-layout-footer">
              <button class="btn btn-info">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->



</div><!-- br-mainpanel -->

@endsection
