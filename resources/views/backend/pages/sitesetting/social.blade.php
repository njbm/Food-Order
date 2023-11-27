@extends('Backend.layouts.layouts')

@section('main_contain')
<div class="br-mainpanel">

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="br-section-label">Social Media Setting</h6>
            <div class="form-layout-footer" style="text-align: right">
            <button class="btn btn-primary">+Add</button>
            </div> <br>


            {{--  <div class="d-flex align-items-center justify-content-center bg-gray-100 ht-md-80 bd pd-x-20">
              <div class="d-md-flex pd-y-20 pd-md-y-0">  --}}
                <div class="col-lg-8">
                <div class="form-group">
                <label class="form-control-label">Social Icon : <span class="tx-danger">*</span></label>
                <input type="text" value="con ion-ios-gear-outline" class="form-control" placeholder="Social Icon">
                </div>
                </div>

                <div class="col-lg-8">
                <div class="form-group">
                <label class="form-control-label">Social Link Site : <span class="tx-danger">*</span></label>
                <input type="text" value="https://www.facebook.com" class="form-control" placeholder="Social Link">
                </div>
                </div>
                <br>

                <div class="form-layout-footer">
                    <button class="btn btn-info">Save</button>
                    <button class="btn btn-secondary">Cancel</button>
                  </div><!-- form-layout-footer -->
                </div><!-- form-layout -->              </div>
              {{--  </div>
            </div><!-- d-flex -->  --}}

        </div>
    </div>



</div><!-- br-mainpanel -->

@endsection
