<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex, nofollow" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
<title>Web 200 ||Victoria Moiseenko || Tulip Town</title>
<link href="styles.css" rel="stylesheet" />
<link href="flexslider.css" rel="stylesheet" />
<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css"> -->
<!-- Begin Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script> 

<!-- Begin Accordion Slider -->
 <!-- End Scripts -->
   <script type="text/javascript" charset="utf-8">
 
   jQuery(document).ready(function($) {
		$( "#accordion" ).accordion();
	  });
  </script>

<!-- Begin Flex Slider -->
<script type="text/javascript" charset="utf-8">
$.noConflict();
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
<script>
$(document).ready(function(){
 
 $("select.price_s option[value='']").prop('selected',true);
 $("select.whom_s option[value='']").prop('selected',true);
    
    $('.pagination a').click(function(){
        
        $('input[name=page]').val($(this).text());
        
        $('.t_Filter').submit();
    })
});
</script>

</head>
<body>
<!-- Begin Header -->
<div id="wrap">
<header id="header">
<div id="logo">
<a href="index.php"><img src="images/tulipTown.png" alt="Tulip Town" /></a>
<img id="toggle" src="images/img-toggle.png" width="25" height="25"	alt="Toggle Menu">
</div>
<!-- End Header -->

<?php include('includes/navigation.php'); ?>
<!-- Start Content -->
<div id="content">
