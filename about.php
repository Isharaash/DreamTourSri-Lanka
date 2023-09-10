<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Footer Bar</title>
	<style type="text/css">
	*{
	padding:0px;
	margin:0px;
		
		}
		body{
			text-align: justify;
			font-family: Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", "monospace";
			font-weight: bold;
			
		}
	
	h1{
			
			font-weight: 600;
			text-decoration:underline;
			color: black;
			cursor: pointer;
			letter-spacing:2px;
		    position: absolute;
			top: 100px;
		    left:50%;
		    font-size: 40px;
	
		}
		img{
	      width: 100%;
	      height: 100%;
	      margin-left: auto;
	      margin-right:auto;
	      display: block;
	      transform: none;
	      opacity: 15px;

}
		.main-page{
		    position: absolute;
		    left:0%;
			bottom:  20px;
			margin: 15px;
		
		}
		.main-page p{
			
			letter-spacing:2px;
			font-weight: 600;
			font-size: 25px;
			color:red;
		
		}
		.main-page2{
			position: absolute;
		    left:0%;
			bottom:0px; 
			top: 100%;
			margin: 15px;
		
			
		}
	.main-page2	p{
			
			letter-spacing:2px;
			font-weight: 600;
			font-size: 25px;
			color:red;
		}
		h4{
			font-weight: 600;
			font-size: 36px;
			bottom:0px; 
			top: 130%;
			position: absolute;
			color: aliceblue;
		}
		p{
			font-size: 25px;
			margin: 15px;
		}
	
		ul li{
			font-size: 20px;
			margin: 10px;
		}	
	
	
	</style>



</head>

<body>
<?php
include("menu.php")
?>
		<img src="10.jpg" alt="pak">

<h1>About Us</h1>

<div class="main-page">
<p>Having a customer-centric approach, along with an efficient workforce, we believe our strength to deliver the best value to our customers. Being recognized amongst the top travel consultants, the strength of our company has significantly increased over the past few years.</p><br />
	</div>
	<div class="main-page2">
<p>Providing our worthy customers with an array of options, including the no-convenience fee, which implies that the customer is not required to pay any fee where no other discount or promotion coupon is applied. We always aim at easing your travel experience and seizing the best part of your journey.</p><li>
</div >

	<h4>Why Choose us?</h4>
<p>We focus on reserving the hottest deals and enticing offers for our customers with a dedicated in-house technology team to ensure the safety and security of all the details and information provided. We are top professionals of tours and travel industry who crave to deliver the best services, with a motive of making your trip one of a kind. To narrow down our services even more, here are some of the pointers:</p><br />
<ul>
<li>- Cost-efficient prices</li>
<li>- Customer-centric approach</li>
<li>- Stable connectivity with the users</li>
<li>- Innovative and sophisticated customer service approach</li>
</ul>
	
<?php
include("footer.php")
?>




</body>
</html>
