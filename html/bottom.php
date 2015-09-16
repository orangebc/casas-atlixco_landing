<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/functions.min.js"></script>
<!-- html5.js - IE  9 -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!-- funcion para conectar el FlexSlider -->
<script type="text/javascript">
$(window).load(function() {
$('.flexslider').flexslider();
});
</script>
<script>
$(document).ready(function()
          {
          /*-------------------Abrir------------------------------*/
          $("#boton_menu_open").click(function () {
                          $('#scroll_menu').slideDown('up');
                          $('#boton_menu_close').show();
                          $('#oculto').show();
              });
          /*-------------------Cerrar------------------------------*/
          $("#boton_menu_close").click(function () {
                          $('#scroll_menu').slideUp('up');
                          $('#boton_menu_close').hide();
                          $('#oculto').hide();
              });
});
</script>