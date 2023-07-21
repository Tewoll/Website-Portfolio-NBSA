<!-- jQuery -->
<script src={{url("plugins/jquery/jquery.min.js")}}></script>
<!-- jQuery UI 1.11.4 -->
<script src={{url("plugins/jquery-ui/jquery-ui.min.js")}}></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src={{url("plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<!-- Sparkline -->
<script src={{url("plugins/sparklines/sparkline.js")}}></script>
<!-- JQVMap -->
<script src={{url("plugins/jqvmap/jquery.vmap.min.js")}}></script>
<script src={{url("plugins/jqvmap/maps/jquery.vmap.usa.js")}}></script>
<!-- jQuery Knob Chart -->
<script src={{url("plugins/jquery-knob/jquery.knob.min.js")}}></script>
<!-- daterangepicker -->
<script src={{url("plugins/moment/moment.min.js")}}></script>
<script src={{url("plugins/daterangepicker/daterangepicker.js")}}></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src={{url("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}></script>
<!-- Summernote -->
<script src={{url("plugins/summernote/summernote-bs4.min.js")}}></script>
<!-- overlayScrollbars -->
<script src={{url("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}></script>
<!-- AdminLTE App -->
<script src={{url("dist/js/adminlte.js")}}></script>

<!-- Select2 -->
<script src={{url("plugins/select2/js/select2.full.min.js")}}></script>
<!-- Bootstrap4 Duallistbox -->
<script src={{url("plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js")}}></script>

<!-- Ekko Lightbox -->
<script src={{url("plugins/ekko-lightbox/ekko-lightbox.min.js")}}></script>

<!-- DataTables  & Plugins -->
<script src={{url("plugins/datatables/jquery.dataTables.min.js")}}></script>
<script src={{url("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}></script>
<script src={{url("plugins/datatables-responsive/js/dataTables.responsive.min.js")}}></script>
<script src={{url("plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}></script>
<script src={{url("plugins/datatables-buttons/js/dataTables.buttons.min.js")}}></script>
<script src={{url("plugins/datatables-buttons/js/buttons.bootstrap4.min.js")}}></script>
<script src={{url("plugins/jszip/jszip.min.js")}}></script>
<script src={{url("plugins/pdfmake/pdfmake.min.js")}}></script>
<script src={{url("plugins/pdfmake/vfs_fonts.js")}}></script>
<script src={{url("plugins/datatables-buttons/js/buttons.html5.min.js")}}></script>
<script src={{url("plugins/datatables-buttons/js/buttons.print.min.js")}}></script>
<script src={{url("plugins/datatables-buttons/js/buttons.colVis.min.js")}}></script>


<!-- Page specific script -->
<script>
  $(function() {
    $('.select2').select2()

    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    $('.select2detail').select2({
      theme: 'bootstrap4',
      dropdownParent: $('#asuModal')
    })
    $('.select2edit').select2({
      theme: 'bootstrap4',
      dropdownParent: $('#editModal')
    })

  })

  $(function() {
    //Date picker
    $('#reservationdate').datetimepicker({
      format: 'L'
    });

    //Date range picker
    $('#pilihtahun1').datetimepicker({
      format: 'YYYY'
    });
    $('#pilihtahun2').datetimepicker({
      format: 'YYYY'
    });

  })
</script>
<script>
  $(function() {
    // Summernote
    $('#summernote').summernote()
  })
</script>

<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#table-nbsa').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
  $(function() {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });
  })
</script>

<script>
  function updatePreview(input, target) {
    let file = input.files[0];
    let reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = function() {
      let img = document.getElementById(target);
      // can also use "this.result"
      img.src = reader.result;
    }
  }
</script>
<script>
  $(document).ready(function() {
    if (window.File && window.FileList && window.FileReader) {
      $("#files").on("change", function(e) {
        var files = e.target.files,
          filesLength = files.length;
        for (var i = 0; i < filesLength; i++) {
          var f = files[i]
          var fileReader = new FileReader();
          fileReader.onload = (function(e) {
            var file = e.target;
            $("<span class=\"pip\">" +
              "<img class=\"imageThumb\" src=\"" + e.target.result +
              "\" title=\"" + file.name + "\"/>" +
              "<br/><span class=\"remove\"><i class='fa fa-trash'></i></span>" +
              "</span>").insertAfter("#files");
            $(".remove").click(function() {
              $(this).parent(".pip").remove();
            });

            // Old code here
            /*$("<img></img>", {
              class: "imageThumb",
              src: e.target.result,
              title: file.name + " | Click to remove"
            }).insertAfter("#files").click(function(){$(this).remove();});*/

          });
          fileReader.readAsDataURL(f);
        }
        console.log(files);
      });
    } else {
      alert("Your browser doesn't support to File API")
    }
  });
</script>


