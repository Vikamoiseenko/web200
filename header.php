<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex, nofollow" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
<title>Web 200 ||Victoria Moiseenko || Tulip Town</title>
<link href="styles.css" rel="stylesheet" />
<link href="flexslider.css" rel="stylesheet" />
<!-- Begin Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<!-- End Scripts -->

<!-- Begin Flex Slider -->
<script type="text/javascript">
$(window).load(function() { // enable function upon window load
$(".flexslider").flexslider(); // call flexslider function
});
</script>
<!-- End Flex Slider -->
<!-- Begin Toggle Menu -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
	$("#toggle").click(function() { // whe we click toggle
		$(".main").toggle(); //  open or close the navigation
	});
	$(window).resize(function() {
		
		if ($(window).width() > 801) {
		
			$('.main').css('display' , 'block');
			
		}
		
	});
	
	$(window).resize(function() {
		
		if ($(window).width() < 800) {
		
			$('.main').css('display' , 'none');
			
		}
		
	});
  });
</script>
<!-- End Toggle Menu -->

</head>
<body>
<!-- Begin Header -->
<div id="wrap">
<header id="header">
<div id="logo">
<a href="index.html"><img src="images/tulipTown.png" alt="Tulip Town" /></a>
<img id="toggle" src="images/img-toggle.png" width="25" height="25"	alt="Toggle Menu">
</div>
<!-- End Header -->

<!-- Begin Navigation -->
<div class="navigationitems">
<nav id="mainnav" class="main">
<ul>
<li><a href="flowers.php">Flowers</a></li>
<li><a href="delivery.php">Delivery</a></li>
<li><a href="payments.php">Payments</a></li>
<li><a href="blog.php">Blog</a></li>
<li><a href="contact.php">Contact Us</a></li>
</ul>
</nav>
</div>
</header>
</div>
<!-- closed navigation -->

<!-- Start Content -->
<div id="content">
