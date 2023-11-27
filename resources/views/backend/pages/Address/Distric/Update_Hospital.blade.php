@section('title')
    Admin - Edit Doctor
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel mt-0">
        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center mb-4">Update Doctor</h6>
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
            <!----- Start Add Category Form input ------->
            <div class="col-xl-7 mx-auto">
                <div class="form-layout form-layout-4 pt-3 py-5">

                    <form action="{{ route('admin.update_doctor', $doctor->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row ">
                            <label class="col-sm-3 form-control-label">Current Photo</label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">

                               <img src="{{asset('backend/services/doctor/'. $doctor->doc_image)}}" alt="" width="60px" height="40px" srcset="">

                            </div>
                        </div><!-- row -->

                        <div class="row mt-4">
                            <label class="col-sm-3 form-control-label">Doctor New Photo: </label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="hidden" name="doc_image" value="{{$doctor->doc_image}}" class="form-control">
                                <input type="file" name="doc_new_image" class="form-control">
                            </div>
                        </div><!-- row -->

                        <div class="row mt-4">
                            <label class="col-sm-3 form-control-label">Department: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <select class="form-control custom-select" name="department_id" required>

                                    <option value=" ">Select Department</option>

                                    @foreach ($departments as $department)

                                       <option @if ($department->id == $doctor->department_id) selected @endif value="{{$department->id}}">{{$department->department_name}}</option>

                                    @endforeach

                                </select>
                            </div>
                        </div><!-- row -->

                        <div class="row mt-4">
                            <label class="col-sm-3 form-control-label">Doctor Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="doc_name" class="form-control" value="{{ $doctor->doc_name}}" required>
                            </div>
                        </div><!-- row -->

                        <div class="row mt-3">
                            <label class="col-sm-3 form-control-label">Speciality: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="doc_speciality" class="form-control" value="{{ $doctor->doc_speciality}}" placeholder="Enter Doctor Speciality" required>
                            </div>
                        </div><!-- row -->


                        <div class="row mt-3">
                            <label class="col-sm-3 form-control-label">Cardiology Degree: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                               <input type="text" name="doc_cardiology_degree" value="{{ $doctor->doc_cardiology_degree}}" class="form-control" placeholder="Enter Cardiology Degree " />
                            </div>
                        </div><!-- row -->
                        <div class="row mt-3">
                            <label class="col-sm-3 form-control-label">Experience: </label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="text" name="doc_experience" value="{{ $doctor->doc_experience}}" class="form-control" placeholder="Enter Experience " />
                            </div>
                        </div><!-- row -->
                        <div class="row mt-3">
                            <label class="col-sm-3 form-control-label">Board Certifications: </label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="text" name="doc_board_certification" value="{{ $doctor->doc_board_certificate}}" class="form-control" placeholder="Enter Board Certifications " />
                            </div>
                        </div><!-- row -->
                        <div class="row mt-3">
                            <label class="col-sm-3 form-control-label">Education: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <textarea id="summernote" name="doc_education">{{ $doctor->doc_education}}</textarea>
                            </div>
                        </div><!-- row -->

                        <div class="row mt-3">
                            <label class="col-sm-3 form-control-label">Conditions Treated: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                               <textarea id="summernote_two" name="doc_con_treated">{{ $doctor->doc_con_treated}}</textarea>
                            </div>
                        </div><!-- row -->

                        <div class="row mt-3">
                            <label class="col-sm-3 form-control-label">Professional Memberships: </label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                               <textarea id="summernote_three" name="doc_pro_membership">{{ $doctor->doc_pro_membership}}</textarea>
                            </div>
                        </div><!-- row -->

                        <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Status: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <select class="form-control select2" name="doc_status">
                              <option @if($doctor->doc_status == 1) @selected(true) @endif value="1">Active</option>
                              <option @if($doctor->doc_status == 0) @selected(true) @endif value="0">Inactive</option>
                          </select>
                          </div>
                        </div><!-- row -->

                        <div class="row mt-4 ">
                          <label class="col-sm-6 form-control-label"></label>
                          <div class="col-sm-6 mg-t-10 mg-sm-t-0 text-right">
                            <a href="{{route('admin.all_doctor')}}" type="button" class="btn btn-secondary text-white mr-3" >Close</a>
                            <button type="submit" class="btn btn-info">Update changes</button>
                          </div>
                        </div>
                    </form>

                </div><!-- form-layout -->
            </div><!-- col-6 -->
            <!----- Start Add Category Form input ------->
          </div><!-- br-section-wrapper -->
        </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->







@endsection
