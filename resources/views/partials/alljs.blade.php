<script src="{{url('public/admin/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.1/jquery.validate.min.js"></script>


<!-- endinject -->
<!-- Plugin js for this page-->

<script src="{{url('public/admin/vendors/progressbar.js/progressbar.min.js')}}"></script>
<script src="{{url('public/admin/vendors/flot/jquery.flot.js')}}"></script>



<script src="{{url('public/admin/vendors/flot/jquery.flot.resize.js')}}"></script>
<script src="{{url('public/admin/vendors/flot/curvedLines.js')}}"></script>
<script src="{{url('public/admin/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{url('public/admin/vendors/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>

<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{url('public/admin/js/off-canvas.js')}}"></script>

<script src="{{url('public/admin/js/hoverable-collapse.js')}}"></script>
<script src="{{url('public/admin/js/template.js')}}"></script>
<script src="{{url('public/admin/js/settings.js')}}"></script>
<script src="{{url('public/admin/js/todolist.js')}}"></script>

<script src="{{url('public/admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{url('public/admin/vendors/select2/select2.min.js')}}"></script>
<script src="{{url('public/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>






<!-- endinject -->
<!-- Custom js for this page-->

<script src="{{url('public/admin/js/dashboard.js')}}"></script>
<script src="{{url('public/admin/js/file-upload.js')}}"></script>
<script src="{{url('public/admin/js/data-table.js')}}"></script>

<script src="{{url('public/admin/js/select2.js')}}"></script>
<script src="{{url('public/admin/vendors/summernote/dist/summernote-bs4.min.js')}}"></script>

<script src="{{url('public/admin/js/editorDemo.js')}}"></script>


<script src="{{url('public/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{url('public/admin/vendors/moment/moment.min.js')}}"></script>
<script src="{{url('public/admin/js/formpickers.js')}}"></script>
<script src="{{url('public/assets/js/prism.js')}}" async></script>
<script src="{{url('public/assets/js/summernote-code-beautify-plugin.js')}}"></script>


<!-- End custom js for this page-->
<script>
    $(document).ready(function(){
       
    $("#category_id").change(function(){ 
    $.get("{{ url('/') }}"+"/admin/post/dynamic_category/fetch/"+ $(this).val(), function(data){
        $element = $("#subcategory");
        $("#subcategory").empty();
        $(data).each(function(){
        
          $element.append("<option value='"+this.id +"'>"+ this.name +"</option>"); 
        });
        
       
    });
    

  })
 
    
 });


</script>
<script>
    $(document).ready(function() {
      
      $('#summernote').summernote({
        toolbar: [
          ['insert', ['prettify']]
        ]
      });
    });
  </script>
{{-- <script>
    window.addEventListener( "pageshow", function ( event ) {
        var historyTraversal = event.persisted ||
                         ( typeof window.performance != "undefined" &&
                              window.performance.navigation.type === 2 );
        if ( historyTraversal ) {
            // Handle page restore.
            window.location.reload();
        }
    });


</script> --}}