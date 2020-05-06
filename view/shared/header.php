<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Bonala</title>
<link href="content/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="content/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="content/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="content/css/tabs.css" rel="stylesheet" type="text/css" media="all">
<link href="content/css/slider.css" rel="stylesheet" type="text/css" media="all">
<link href="content/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bonala." />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script src="content/js/easyResponsiveTabs.js"></script>
<script src="content/js/jquery-1.9.1.min.js"></script>

<script src="content/js/jquery.min.js"></script>
<?php if($_SERVER['REQUEST_URI'] == ROOT_HOME): ?>
	<script src="content/js/contact_me.js"></script>
<?php endif ?>
<script>
		$(document).ready(function () {
		    size_li = $("#myList li").size();
		    x=3;
		    $('#myList li:lt('+x+')').show();
		    $('#loadMore').click(function () {
		        x= (x+1 <= size_li) ? x+1 : size_li;
		        $('#myList li:lt('+x+')').show();
		    });
		    $('#showLess').click(function () {
		        x=(x-1<0) ? 1 : x-1;
		        $('#myList li').not(':lt('+x+')').hide();
		    });
		});
	</script>

</head>
<body>
<!-- header -->
<div class="banner">
	<div class="container">
		<div class="header">
		<div style="color:#ccc" class="tel"><a style="color:#ccc" href="/views/contact.php">info@bonala.biz</a> | Call us +267 72 419 956  <a style="margin:3px 2px 2px 2px;" href="https://www.facebook.com/Bonala-109455327201708"><img src="content/images/social/facebook.svg" alt="facebook" width="15px" height="15px"></a><a href="#" style="margin:2px;"><img src="content/images/social/twitter.svg" alt="twitter" width="15px" height="15px"></a><a href="https://www.linkedin.com/company/bonala/" style="margin:2px;"><img src="content/images/social/linkedin.svg" alt="linkedin" width="15px" height="15px"></a></div>
			<div class="logo">
				<a href="<?=ROOT_URL?>"><img style="margin-left:-50px; margin-bottom:-10px;" src="content/images/logo.png" class="img-responsive" alt="" /></a>
			</div>
				<div class="clearfix"> </div>
			</div>
				<div class="head-nav">
					<span class="menu"> </span>
						<ul class="cl-effect-15">
						    <li><a href="<?=ROOT_URL?>" data-hover="Home">Home</a></li>
							<li><a href="<?=ROOT_URL?>?p=BonalaController&amp;a=services" data-hover="Services">Services</a></li>
							<li><a href="<?=ROOT_URL?>?p=BonalaController&amp;a=pricing" data-hover="pricing">Pricing</a></li>
							<li><a href="<?=ROOT_URL?>?p=BonalaController&amp;a=case_study" data-hover="Case Study">Case Study</a></li>
							
							
							
							<li><a href="<?=ROOT_URL?>?p=BonalaController&amp;a=about" data-hover="About Us">About Us</a></li>
							<li><a href="<?=ROOT_URL?>?p=BonalaController&amp;a=blogPosts" data-hover="BLOG">Blog</a></li>
                            <?php if(empty($_SESSION['active'])): ?>
                                <li style="float:right;"><a href="<?=ROOT_URL?>?p=BonalaController&amp;a=login" data-hover="Sign in">Sign in</a></li>
                            <?php elseif(!empty($_SESSION['active'])) : ?>
                                <li><a href="<?=ROOT_URL?>?p=BonalaController&amp;a=add" data-hover="ADD A NEW POST">ADD A NEW POST</a></li>
                                <li><a href="<?=ROOT_URL?>?p=BonalaController&amp;a=logout" data-hover="LOGOUT">LOGOUT</a></li>
                            <?php endif ?>
                            <div class="clearfix"> </div>
						</ul>
				</div>

						<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav --> 					 
	</div> 
</div>
<!-- header -->