  <!-- Site footer -->
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>

<!-- build:js ../assets/js/core.min.js -->
<script src="{{asset('/libs/bower/jquery/dist/jquery.js')}}"></script>
<script src="{{asset('/libs/bower/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('/libs/bower/jQuery-Storage-API/jquery.storageapi.min.js')}}"></script>
<script src="{{asset('/libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js')}}"></script>
<script src="{{asset('/libs/bower/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<script src="{{asset('/libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
<script src="{{asset('/libs/bower/PACE/pace.min.js')}}"></script>
<!-- endbuild -->

<!-- build:js ../assets/js/app.min.js -->
<script src="{{asset('/assets/js/library.js')}}"></script>
<script src="{{asset('/assets/js/plugins.js')}}"></script>
<script src="{{asset('/assets/js/app.js')}}"></script>
<!-- endbuild -->
<script src="{{asset('/libs/bower/moment/moment.js')}}"></script>
<script src="{{asset('/libs/bower/fullcalendar/dist/fullcalendar.min.js')}}"></script>
<script src="{{asset('/assets/js/fullcalendar.js')}}"></script>
<script src="{{asset('/assets/js/dropzone.js')}}"></script>
<script src="{{asset('/assets/js/datatable.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key={{ env("GOOGLE_KEY") }}&libraries=places"></script>


<script type="text/javascript">
    Dropzone.options.imageUpload = {
        maxFilesize: 1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif"
    };

    $('table').DataTable(
        {
            "pageLength": 50,
            "language": {
                "lengthMenu": "",
                "zeroRecords": "No hay registros",
                "info": "",
                "infoEmpty": "No hay registros",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "search": "Buscar:",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "order": [[1, "asc"]]
            }
        }
    );

    /**
     * Script GOOGLE Autoplaces
     */

    google.maps.event.addDomListener(window, 'load', initialize);




</script>
