</div>
<!-- </div inner-wrapper> -->

<?php require_once(__DIR__."/aside.php"); ?>

</section>
<!-- /#section -->

<!-- Vendor -->
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/jquery.browser.mobile.js"></script>
<script src="/assets/js/jquery-cookie.js"></script>
<script src="/assets/js/style.switcher.js"></script>
<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/nanoscroller.js"></script>
<script src="/assets/js/bootstrap-datepicker.js"></script>
<script src="/assets/js/jquery.magnific-popup.js"></script>
<script src="/assets/js/jquery-placeholder.js"></script>

<script src="http://preview.oklerthemes.com/porto-admin/1.5.5/assets/vendor/pnotify/pnotify.custom.js"></script>
<script src="http://preview.oklerthemes.com/porto-admin/1.5.5/assets/javascripts/ui-elements/examples.modals.js"></script>

<!-- Specific Page Vendor -->
<script src="/assets/js/jquery-ui.js"></script>
<script src="/assets/js/jqueryui-touch-punch.js"></script>
<script src="/assets/js/jquery-appear.js"></script>
<script src="/assets/js/bootstrap-multiselect.js"></script>
<script src="/assets/js/jquery.easy-pie-chart.js"></script>
<script src="/assets/js/jquery.flot.js"></script>
<script src="/assets/js/flot.tooltip.js"></script>
<script src="/assets/js/jquery.flot.pie.js"></script>
<script src="/assets/js/jquery.flot.categories.js"></script>
<script src="/assets/js/jquery.flot.resize.js"></script>
<script src="/assets/js/jquery-sparkline.js"></script>
<script src="/assets/js/raphael.js"></script>
<script src="/assets/js/morris.js"></script>
<script src="/assets/js/gauge.js"></script>
<script src="/assets/js/snap.svg.js"></script>
<script src="/assets/js/liquid.meter.js"></script>
<script src="/assets/js/jquery.vmap.js"></script>
<script src="/assets/js/jquery.vmap.sampledata.js"></script>
<script src="/assets/js/jquery.vmap.world.js"></script>
<script src="/assets/js/jquery.vmap.africa.js"></script>
<script src="/assets/js/jquery.vmap.asia.js"></script>
<script src="/assets/js/jquery.vmap.australia.js"></script>
<script src="/assets/js/jquery.vmap.europe.js"></script>
<script src="/assets/js/jquery.vmap.north-america.js"></script>
<script src="/assets/js/jquery.vmap.south-america.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="/assets/js/theme.js"></script>
<script src="/assets/js/bootstrap-colorpicker.js"></script>
<script src="/assets/js/jquery.validate.js"></script>
<script src="/assets/js/examples.validation.js"></script>

<!-- Theme Custom -->
<script src="/assets/js/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="/assets/js/theme.init.js"></script>
<!-- Examples -->
<script src="/assets/js/examples.dashboard.js"></script>
<!-- HTML Editor
<script type="text/javascript" src='//cdn.tinymce.com/4/tinymce.min.js'></script>
<script type="text/javascript">
tinymce.init({
    selector: '#body',
    theme: 'modern',
    width: 600,
    height: 300,
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'save table contextmenu directionality emoticons template paste textcolor'
    ],
    content_css: 'css/content.css',
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
});
</script>-->

<script>
jQuery(function () {
    var url = window.location.pathname;

    if (url == '/') {
        jQuery('.nav-children > li > a[href="/"]').parent().addClass('active');
    } else {
        var urlRegExp = new RegExp(url.replace(/\/$/, '') + "$");
        jQuery('.nav-children > li > a').each(function () {
            if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
                jQuery(this).parent().addClass('nav-active');
            }
        });
    }
});
</script>


<script>
$(document).ready(function(){
    $("#btn_add_product").click(function(){
        $(".form-add-product").append("<div class='form-group'><div class='col-md-6 col-product'><div class='input-group'><span class='input-group-addon'>Title</span><input type='text' class='form-control' name='product_title[]' value=''></div></div><div class='col-md-2 col-product'><div class='input-group'><span class='input-group-addon'>RRP</span><input type='text' class='form-control'  name='rrp[]' value=''></div></div><div class='col-md-2 col-product'><div class='input-group'><span class='input-group-addon'>DP</span><input type='text' class='form-control'  name='dp[]' value=''></div></div><div class='col-md-2 col-product'><div class='input-group'><span class='input-group-addon'>%</span><input type='text' class='form-control'  name='percent[]' value=''></div></div></div>");
    });
});
</script>

</body>
</html>
