
  

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

	<!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="<?php echo base_url('public/assets/admin'); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('public/assets/admin'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?php echo base_url('public/assets/admin'); ?>/dist/js/adminlte.js"></script>
<script src="<?php echo base_url('public/assets/admin'); ?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url('public/assets/admin'); ?>/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('public/assets/admin'); ?>/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script src="<?php echo base_url('public/assets/admin'); ?>/dist/js/xncolorpicker.min.js"></script>
<script src="<?php echo base_url('public/assets/admin'); ?>/dist/js/pages/dashboard3.js"></script>
<script>


 $("#header_check").on("click", function() {
  if ($(this).prop("checked")) {
      $('input:checkbox').prop("checked", true);
  } else {
      $('input:checkbox').prop("checked", false);
      
  }
 
});
 //get checkbox value
 $(function(){
      $('#apply').click(function(){
        var val = [];
        $(':checkbox:checked').each(function(i){
          val[i] = $(this).val();
          console.log(val[i]);
        });
      });
    });

  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
   var xncolorpicker = new XNColorPicker({
        color: "#000",
        selector: "#colorpicker",
        showprecolor: true,//??????????????????
        prevcolors: null,//?????????????????????????????????
        showhistorycolor: true,//????????????
        historycolornum: 16,//????????????
        format: 'hex',//rgba hex hsla,??????????????????
        showPalette:true,//????????????
        show:false, //???????????????
        lang:'en',// cn ???en
        colorTypeOption:'single,linear-gradient,radial-gradient',
        canMove:false,//?????????????????????????????????
        alwaysShow:false,
        autoConfirm:true,
        hideInputer:false,
        hideCancelButton:false,
        hideConfirmButton:false,
        onError: function (e) {

        },
        onCancel:function(color){
            console.log("cancel",color)
        },
        onChange:function(color){
            console.log("change",color)
         
        },
        onConfirm:function(color){
            console.log("confirm",color)
           var c= color['color']['hex'];
          $("#colour").val(c);
            // xncolorpicker.$getCurColor();
        }
    })


</script>

</body>
</html>
