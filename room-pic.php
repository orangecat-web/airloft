<!--更多相片 fancybox =======================-->
<div id="ROOMPHOTO" style="display: none;">
	<div class="owl-carousel owl-theme">
		<div class="item"><img src="images/house01.jpg" alt=""></div>
		<div class="item"><img src="images/house06.jpg" alt=""></div>
		<div class="item"><img src="images/house05.jpg" alt=""></div>
		<div class="item"><img src="images/house03.jpg" alt=""></div>
	</div>
</div>
<!--更多相片-->
<link rel="stylesheet" href="js/owl.carousel/owlcarousel/assets/owl.carousel.css">
<link rel="stylesheet" href="js/owl.carousel/owlcarousel/assets/owl.theme.default.min.css">

<script src="js/owl.carousel/vendors/jquery.min.js"></script>
<script src="js/owl.carousel/owlcarousel/owl.carousel.js"></script>

<script>
	$('.owl-carousel').owlCarousel({
		autoplay:3000,
		loop:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:1,
				nav:true
			},
			1000:{
				items:1,
				nav:true,
				loop:true
			}
		}
	})
</script>