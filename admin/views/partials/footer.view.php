 <!-- Footer -->
 <footer class="footer mt-auto">
        <div class="copyright bg-white text-center">
          <p>
            &copy; <span id="copy-year"></span> Derechos reservados -  www.cimax.com
          </p>
        </div>
        <script>
          var d = new Date();
          var year = d.getFullYear();
          document.getElementById("copy-year").innerHTML = year;
        </script>
      </footer>

    </div>
  </div>
  <script src="views/plugins/jquery/jquery.min.js"></script>
  <script src="views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="views/plugins/simplebar/simplebar.min.js"></script>
  <script src="views/https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
  <script src="views/plugins/apexcharts/apexcharts.js"></script>
  <script src="views/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
  <script src="views/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
  <script src="views/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
  <script src="views/plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>
  <script src="views/plugins/daterangepicker/moment.min.js"></script>
  <script src="views/plugins/daterangepicker/daterangepicker.js"></script>
  <script>
    jQuery(document).ready(function () {
      jQuery('input[name="dateRange"]').daterangepicker({
        autoUpdateInput: false,
        singleDatePicker: true,
        locale: {
          cancelLabel: 'Clear'
        }
      });
      jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
        jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
      });
      jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
        jQuery(this).val('');
      });
    });
  </script>


  <script src="views/https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="views/plugins/toaster/toastr.min.js"></script>
  <script src="views/plugins/prism/prism.js"></script>
  <script src="views/plugins/owl-carousel/owl.carousel.min.js"></script>
  


  <!-- Select js css -->
  <script src="views/plugins/select2/js/select2.min.js"></script>

  <!-- Editor enriquecido -->

  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

  <!-- Select con busqueda -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>



  

  <script src="views/js/mono.js"></script>
  <script src="views/js/chart.js"></script>
  <script src="views/js/map.js"></script>
  <script src="views/js/custom.js"></script>
  <script src="views/js/myJs.js"></script>
  <script>
    window.addEventListener('DOMContentLoaded', (event) => {
      // Obtener el elemento con la clase "paginate_button previous"
      var elemento = document.querySelector('a.paginate_button.previous');

      // Cambiar el contenido del elemento por "Anterior"
      elemento.textContent = 'Anterior';
    });
  </script>

</body>

</html>