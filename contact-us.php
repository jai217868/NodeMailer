<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>TravGui</title>
		<!-- fav icon -->
	<link rel="icon" href="images/favicon.png">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<!--font awesome-->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!--custom-css-->
	<link href="css/style.css" rel="stylesheet">
	<style>
	</style>
</head>
<body>
	<div class="wrapper">
		<?php include 'pheader.php';?>
		<div class="page-title">
			<img alt="" src="images/contact-us.png"/>
			<div class="page-title-contnt">
				<h2>Contact us</h2>
			</div>			
		</div>
		<div class="contact-us-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-7">
						<div class="contact-form">
							<form>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<input type="text" name="name" class="form-control" placeholder="name" required="">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input type="text" name="last-name" class="form-control" placeholder="last Name" required="">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<input type="email" name="Email" class="form-control" placeholder="Email" required="">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input type="text" name="contact-no" class="form-control" placeholder="Contact No" required="">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<textarea class="form-control" placeholder="message"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<input type="submit" name="submit" class="form-control" value="sent">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="contact-address">
							<p><span>Call us</span> 0172-501234</p>
							<p><span>Email</span> on Info@gmail.com</p>
						</div>
						<div class="address">
							<h3>Address</h3>
							<p>Lorem Ipsum is simply <br/>dummy text of the</p>
						</div>
					</div>
				</div>
			</div>
		</div>

				<section class="payment-sec">
    <ul>
        <li><a href="#"><i class="fa fa-cc-amex" aria-hidden="true"></i></a>
        </li>
        <li><a href="#"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a>
        </li>
        <li><a href="#"><i class="fa fa-cc-visa" aria-hidden="true"></i></a>
        </li>
        <li><a href="#"><i class="fa fa-cc-diners-club" aria-hidden="true"></i></a>
        </li>
        <li><a href="#"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a>
        </li>
        <li><a href="#"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></a>
        </li>
    </ul>
</section>
		<?php include 'footer.php';?>
	</div>
	<!--wrapper-->
	<script src="js/jquery.min.js">
	</script>
	<script src="js/jquery.fancybox.min.js">
	</script> 
	<script>
	/*  gallery */
	jQuery(document).ready(function(){

	   jQuery(".filter-button").click(function(){ 
	       var value = jQuery(this).attr('data-filter');
	       
	       if(value == "all")
	       {
	           jQuery('.filter').show('1000');
	       }
	       else
	       {
	           jQuery(".filter").not('.'+value).hide('3000');
	           jQuery('.filter').filter('.'+value).show('3000');
	           
	       }
	         if (jQuery(".filter-button").removeClass("active")) {
	           jQuery(this).removeClass("active");
	           }
	               jQuery(this).addClass("active");
	           });
	});
	/*  end gallery */
	jQuery(document).ready(function(){
	   jQuery(".fancybox").fancybox({
	       openEffect: "none",
	       closeEffect: "none"
	   });
	});
	</script> 
	<script src="js/bootstrap.min.js">
	</script> 
	<script src="js/bootstrap.js">
	</script> 
	<!--dropdown-->
	<script src="assets/js/bootstrap-dropdown.js">
	</script> 
	<script>
	$(document).ready(function(){
	   $(".dropdown-toggle").dropdown();
	});
	</script><!--for crusal-->
	<script src="js/camera.js">
	</script> 
	<script src="js/jquery.easing.1.3.js">
	</script> 
	<script src="js/jquery-migrate-1.2.1.js">
	</script> 
	<!--for top scroll--> 
     <script>
        $(function () {
            $('#scrollToBottom').bind("click", function () {
                $('html, body').animate({ scrollTop: $(document).height() }, 1200);
                return false;
            });
            $('#scrollToTop').bind("click", function () {
                $('html, body').animate({ scrollTop: 0 }, 1200);
                return false;
            });
        });
    </script>
	<script>
	// toggle class scroll 
	$(window).scroll(function() {
	   if($(this).scrollTop() > 50)
	   {
	       $('.navbar-trans').addClass('afterscroll');
	   } else
	   {
	       $('.navbar-trans').addClass('afterscroll');
	   }  

	});
	// demo only 
	// open link in new tab without ugly target="_blank"
	$("a[href^='http']").attr("target", "_blank");
	</script>
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
</body>
</html>