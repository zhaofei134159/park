<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>bF -- Other 登 陆</title>
<link rel="stylesheet" type="text/css" href="./public/css/home.css" />
<link rel="Shortcut Icon" href="./public/images/favicon.ico" type="image/x-icon">
</head>
<body>
<div class="container">
	<section id="content">
		<form action="<?=site_url("home/login")?>" method="post">
			<h1> 登  陆 </h1>
			<div>
				<input type="text" placeholder="Username"  id="username" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" id="password"  name="password"/>
			</div>
			<div>
				<input type="submit" value="Login" />
			</div>
		</form>
		<!-- form -->
		
		<!--<div class="button">
			<a href="#">Download source file</a>
		</div>-->

		<!-- button -->
	</section>
	<!-- content -->
</div>
<!-- container -->
</body>
</html>