<script src="{{asset('assets/backend')}}/lib/jquery/jquery.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/jquery-ui/ui/widgets/datepicker.js"></script>
<!---- bootstarp Js ----->
<script src="{{asset('assets/backend')}}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/moment/min/moment.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/peity/jquery.peity.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/rickshaw/vendor/d3.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/rickshaw/vendor/d3.layout.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/rickshaw/rickshaw.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/jquery.flot/jquery.flot.js"></script>
<script src="{{asset('assets/backend')}}/lib/jquery.flot/jquery.flot.resize.js"></script>
<script src="{{asset('assets/backend')}}/lib/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/echarts/echarts.min.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAq8o5-8Y5pudbJMJtDFzb8aHiWJufa5fg"></script>
<script src="{{asset('assets/backend')}}/lib/moment/min/moment.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/peity/jquery.peity.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/highlightjs/highlight.pack.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/gmaps/gmaps.min.js"></script>
<script src="{{asset('assets/backend')}}/js/map.shiftworker.js"></script>
<script src="{{asset('assets/backend')}}/js/ResizeSensor.js"></script>
<script src="{{asset('assets/backend')}}/js/dashboard.js"></script>
<script src="{{asset('assets/backend')}}/lib/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/select2/js/select2.full.min.js"></script>

<!--- Form Editor Js---->
<script src="{{asset('assets/backend')}}/lib/summernote/summernote-bs4.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/peity/jquery.peity.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/highlightjs/highlight.pack.min.js"></script>
<script src="{{asset('assets/backend')}}/lib/medium-editor/js/medium-editor.min.js"></script>
<!--- Form Editor Js---->

<!------All Custom js File link------>
<script src="{{asset('assets/backend')}}/js/customjs.js"></script>
<!------All Custom js File link------>

<!--- start bracket Main Js ---->
<script src="{{asset('assets/backend')}}/js/bracket.js"></script>
<!--- end bracket Main Js ---->


<script>
  $(function(){
    'use strict'

    // FOR DEMO ONLY
    // menu collapsed by default during first page load or refresh with screen
    // having a size between 992px and 1299px. This is intended on this page only
    // for better viewing of widgets demo.
    $(window).resize(function(){
      minimizeMenu();
    });

    minimizeMenu();

    function minimizeMenu() {
      if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
        // show only the icons and hide left menu label by default
        $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
        $('body').addClass('collapsed-menu');
        $('.show-sub + .br-menu-sub').slideUp();
      } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
        $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
        $('body').removeClass('collapsed-menu');
        $('.show-sub + .br-menu-sub').slideDown();
      }
    }
  });
</script>

    <!----- Start Datatable Js---------->

    <script>
        $(function(){
        'use strict';

        $('#datatable1').DataTable({
            responsive: true,
            language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
            }
        });

        $('#datatable2').DataTable({
            bLengthChange: false,
            searching: false,
            responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

        });
    </script>

    <!----- End Datatable Js---------->

    <!--- Start Summernote Editor Js ---->

    <script>

    $(document).ready(function() {
        /*** summernote editor one ***/
        $('#summernote').summernote({
            height: 150
        })
        /*** summernote editor two ***/
        $('#summernote_two').summernote({
            height: 150
        })
        /*** summernote editor three ***/
        $('#summernote_three').summernote({
            height: 150
        })
    });

    </script>

    <!--- End Summernote Editor Js ---->

    <script>

        $('#showAlpha').spectrum({
            color: 'rgba(23,162,184,0.5)',
            showAlpha: true
        });

    </script>

    <!--- Start Bootstrap Model Script-------->

    <script>
        $(function(){

          // showing modal with effect
          $('.modal-effect').on('click', function(e){
            e.preventDefault();

            var effect = $(this).attr('data-effect');
            $('#modaldemo8').addClass(effect);
            $('#modaldemo8').modal('show');
          });

          // hide modal with effect
          $('#modaldemo8').on('hidden.bs.modal', function (e) {
            $(this).removeClass (function (index, className) {
                return (className.match (/(^|\s)effect-\S+/g) || []).join(' ');
            });
          });
        });
    </script>

    <!--- End Bootstrap Model Script-------->



