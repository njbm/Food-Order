@extends('Backend.layouts.layouts')

@section('main_contain')
<div class="br-mainpanel">

    <div class="br-pagebody">
    <div class="br-section-wrapper">

    <h6 class="br-section-label">Dynamic Page Editor</h6>
    <p class="br-section-text">A super simple WYSIWYG editor on Bootstrap.</p>

    <div class="col-lg-4">
        <div class="form-group mg-b-10-force">
          <label class="form-control-label">Select Pages: <span class="tx-danger">*</span></label>
          <select class="form-control select2" data-placeholder="Choose pages">
            <option label="Choose Page"></option>
            <option value="aboutus">About us</option>
            <option value="privacy&policy">Privacy & Policy</option>
            <option value="contract">Contract</option>
            <option value="blog">Blog</option>
            <option value="help">Help</option>
          </select>
        </div> <br>

      </div><!-- col-4 -->


    <div id="summernote">Hello, universe!</div> <br>

    <div class="form-layout-footer">
        <button class="btn btn-info">Submit Form</button>
        <button class="btn btn-secondary">Cancel</button>
      </div><!-- form-layout-footer -->
    </div><!-- form-layout -->

    </div>
    </div>


</div><!-- br-mainpanel -->

@endsection


