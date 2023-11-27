// *********************** Start Admin Home Script **************************
// *********************** Start Admin Home Script **************************

// ######### Start Category  Delete Bootstrap model Model Script ##########

$(document).ready(function(){

    $(document).on('click','#homeCatdelete', function (){
        var cat_id = $(this).val();
        $("#homeDeleteCategory").modal('show');
        $('#category_id').val(cat_id);
    });

});

// ######### End Category  Delete Bootstrap model Model Script ##########

// ######### Sub Category  Delete Bootstrap model Model Script ##########

    $(document).ready(function(){

        $(document).on('click','#homeSubCatdelete', function (){
            var sub_cat_id = $(this).val();
            $("#homeDeleteSubCategory").modal('show');
            $('#subcategory_id').val(sub_cat_id);
        });

    });

// ######### End Sub Category  Delete Bootstrap model Model Script ##########

// ######### Child Category  Delete Bootstrap model Model Script ##########

$(document).ready(function(){

    $(document).on('click','#homeChildCatdelete', function (){
        var child_cat_id = $(this).val();
        $("#homeDeleteChildCategory").modal('show');
        $('#child_category_id').val(child_cat_id);
    });

});

// ######### End Child Category  Delete Bootstrap model Model Script ##########

//////////////////// ######### Start Blog Scripts ########## ///////////////////////

//////////////////// ######### End Blog Scripts ########## ///////////////////////

// sub category dependent
$(document).ready(function(){

    // sub category dependent
    jQuery('#cat_id').on('change', function () {
        var categoryID = $(this).val();

        if(categoryID) {
            $.ajax({
                url: '/admin/blog-subcategory/'+categoryID,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    $("#sub_cat_id").empty();
                    $("#sub_cat_id").append('<option value="">Select Sub Category</option>');
                    $.each(data, function(key, value) {
                    $("#sub_cat_id").append('<option value="'+ value.id +'">'+ value.sub_cat_name +'</option>');
                    });
                }
            });
        }else{
            $("#sub_cat_id").empty();
        }
    });

    // child category dependent

    jQuery('#sub_cat_id').on('change', function () {

        var subcategoryID = $(this).val();

        if(subcategoryID) {
            $.ajax({
                url: '/admin/blog-child-category/'+subcategoryID,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    $("#child_cat_id").empty();
                    $("#child_cat_id").append('<option value="">Select Child Category</option>');
                    $.each(data, function(key, value) {
                    $("#child_cat_id").append('<option value="'+ value.id +'">'+ value.child_cat_name +'</option>');
                    });
                }
            });
        }else{
            $("#child_cat_id").empty();
        }
    });

});

// ######### Home Blog Delete Bootstrap model Model Script ##########

$(document).ready(function(){

    $(document).on('click','#homeBlogDelete', function (){
        var blog_id = $(this).val();
        $("#homeDeleteBlog").modal('show');
        $('#blog_id').val(blog_id);
    });

});
// ######### Home Blog Delete Bootstrap model Model Script ##########


//////////////////// ######### End Blog Scripts ########## ///////////////////////

//////////////////// ######### End Blog Scripts ########## ///////////////////////

// ######### Home Banner Delete Bootstrap model Model Script ##########

$(document).ready(function(){

    $(document).on('click','#homeBannerDelete', function (){
        var banner_id = $(this).val();
        $("#homeDeleteBanner").modal('show');
        $('#banner_id').val(banner_id);
    });

});

// ######### End Home Banner Delete Bootstrap model Model Script ##########

// ######### Home Slider  Delete Bootstrap model Model Script ##########

$(document).ready(function(){

    $(document).on('click','#homeSliderDelete', function (){
        var slider_id = $(this).val();
        $("#homeDeleteSlider").modal('show');
        $('#slider_id').val(slider_id);
    });

});

// ######### End Home Slider Delete Bootstrap model Model Script ##########

// ######### Home partner  Delete Bootstrap model Model Script ##########

$(document).ready(function(){

    $(document).on('click','#homePartnerDelete', function (){
        var partner_id = $(this).val();
        $("#homeDeletePartner").modal('show');
        $('#partner_id').val(partner_id);
    });

});

// ######### End Home partner Delete Bootstrap model Model Script ##########

// ######### Home Brand  Delete Bootstrap model Model Script ##########

$(document).ready(function(){

    $(document).on('click','#homeBrandDelete', function (){
        var brand_id = $(this).val();
        $("#homeDeleteBrand").modal('show');
        $('#brand_id').val(brand_id);
    });

});

// ######### End Home Brand Delete Bootstrap model Model Script ##########

// ######### Home Client  Delete Bootstrap model Model Script ##########

$(document).ready(function(){

    $(document).on('click','#homeClientDelete', function (){
        var client_id = $(this).val();
        $("#homeDeleteClient").modal('show');
        $('#client_id').val(client_id);
    });

});

// ######### End Home Client Delete Bootstrap model Model Script ##########

// ######### Home Client  Delete Bootstrap model Model Script ##########

$(document).ready(function(){

    $(document).on('click','#homeClientReviewDelete', function (){
        var client_review_id = $(this).val();
        $("#homeDeleteClientReview").modal('show');
        $('#client_review_id').val(client_review_id);
    });

});

// ######### End Home Client Delete Bootstrap model Model Script ##########

// ######### Home Ad  Delete Bootstrap model Model Script ##########

$(document).ready(function(){

    $(document).on('click','#homeAdDelete', function (){
        var ad_id = $(this).val();
        $("#homeDeleteAd").modal('show');
        $('#ad_id').val(ad_id);
    });

});

// ######### End Home Ad Delete Bootstrap model Model Script ##########

// *********************** End Admin Home Script **************************
// *********************** End Admin Home Script **************************


// *********************** Start Admin Services Script **************************
// *********************** Start Admin Services Script **************************

// ######### Start Department Delete  model Model Script ##########

$(document).ready(function(){

    $(document).on('click','#DepartmentDelete', function (){
        var department_id = $(this).val();
        $("#DeleteDepartment").modal('show');
        $('#department_id').val(department_id);
    });

});

// ######### End Department Delete model Model Script ##########

// ######### Start Doctor Delete  model Model Script ##########

$(document).ready(function(){

    $(document).on('click','#DoctorDelete', function (){
        var doctor_id = $(this).val();
        $("#DeleteDoctor").modal('show');
        $('#doctor_id').val(doctor_id);
    });

});

// ######### End Doctor Delete model Model Script ##########
