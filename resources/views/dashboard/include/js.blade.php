<script src="{{asset('Dashboard/assets/js/jquery.js')}}"></script>
<script src="{{asset('Dashboard/assets/js/jquery-migrate-1.2.1.js')}}"></script>
<script src="{{asset('Dashboard/assets/js/script.js')}}"></script>
<script src="{{asset('Dashboard/assets/js/superfish.js')}}"></script>
<script src="{{asset('Dashboard/assets/js/jquery.ui.totop.js')}}"></script>
<script src="{{asset('Dashboard/assets/js/jquery.equalheights.js')}}"></script>
<script src="{{asset('Dashboard/assets/js/jquery.mobilemenu.js')}}"></script>
<script src="{{asset('Dashboard/assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('Dashboard/assets/js/owl.carousel.js')}}"></script>
<script src="{{asset('Dashboard/assets/js/camera.js')}}"></script>
<!--[if (gt IE 9)|!(IE)]><!-->
<script src="{{asset('Dashboard/assets/js/jquery.mobile.customized.min.js')}}"></script>
<!--<![endif]-->
<script src="{{asset('Dashboard/assets/booking/js/booking.js')}}"></script>
<script>
  $(document).ready(function(){
  jQuery('#camera_wrap').camera({
    loader: false,
    pagination: false ,
    minHeight: '444',
    thumbnails: false,
    height: '48.375%',
    caption: true,
    navigation: true,
    fx: 'mosaic'
  });
  /*carousel*/
  var owl=$("#owl");
    owl.owlCarousel({
    items : 2, //10 items above 1000px browser width
    itemsDesktop : [995,2], //5 items between 1000px and 901px
    itemsDesktopSmall : [767, 2], // betweem 900px and 601px
    itemsTablet: [700, 2], //2 items between 600 and 0
    itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
    navigation : true,
    pagination : false
    });
  $().UItoTop({ easingType: 'easeOutQuart' });
  });
</script>

<script>
  $(function (){
    $('#bookingForm').bookingForm({
      ownerEmail: '#'
    });
  })
  $(function() {
    $('#bookingForm input, #bookingForm textarea').placeholder();
  });
</script>
