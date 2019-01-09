<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

require('inc/config.php');
require('inc/functions.php');
$ad_id=$_GET['id'];
#echo $ad_id;
$result1=mysqli_query($con, "SELECT * FROM books WHERE Ad_id='$ad_id' LIMIT 1");
/* Success: Set session variables and redirect to Protected page */
$row1 = mysqli_fetch_assoc($result1);
?>
<!DOCTYPE html>
<html>
<head>
<title>Baangbrow - Buku</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
		<link rel="stylesheet" href="css/flexslider.css" media="screen" />
</head>
<body>

<style>
nav a {
    text-decoration: none;
    color: #fff;
    font-size: 110%;
    font-family: 'Open Sans', sans-serif;   
}

li {
    text-decoration: none;
    display: inline-block;
    margin: 8% 4% -1% 4%;
    padding: 2%;
}

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    cursor: pointer;
    margin-left: 860%;
    margin-top: 6px;
    width: 110px;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 100%;
    margin-left: 860%;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    min-width: 100%;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}

</style>



<hr>

<div class="header">
		<div class="container">
			<div class="logo" >
				<a href="index.php" ><span>Baang</span>Brow</a>
				<h4 align="center">Tempat Pemasangan</h4>	
				<p align="center">Iklan Sepuasnya Gratis</p>
			</div>
			
			<div class="dropdown">
				<button onclick="myFunction()" class="dropbtn"><?php echo $_SESSION['uname']; ?></button>
  					<div id="myDropdown" class="dropdown-content">
    					<a href="changepass.html">Ganti Password</a>
						<a href="post-ad.php">Posting Iklan</a>
    					<a href="logout.php">Keluar</a>
  					</div>

			</div>
		</div>

<hr>
	
	<!--single-page-->
	<div class="single-page main-grid-border">
		<div class="container">
			<ol class="breadcrumb" style="margin-bottom: 5px;">
				<li><a href="index.php">Home</a></li>
				<li class="active"><a href="books.php">Buku</a></li>
				<li class="active">Product</li>
			</ol>
			<div class="product-desc">
				<div class="col-md-7 product-view">
					<h2><?php echo $row1['Ad_title'];?></h2>
					<p> <i class="glyphicon glyphicon-map-marker"></i><a href="#"></a><?php echo $row1['user_city'];?>| Added at <?php echo $row1['Ad_date'];?>, Ad ID: <?php echo $row1['Ad_id'];?></p>
					<div class="flexslider">
						
							<li data-thumb="<?php echo $row1['Ad_image_path'];?>">
								<img width="480px" height="580px"  src="<?php echo $row1['Ad_image_path'];?>" />
							</li>
					</div>
					<!-- //FlexSlider -->
					<div class="product-details"
						<p><strong>TITLE </strong>: <?php echo $row1['Ad_title'];?></p>
						<p><strong>Description</strong> : <?php echo $row1['Ad_desc'];?></p>
					</div>
				</div>
				<div class="col-md-5 product-details-grid">
					<div class="item-price">
						<div class="product-price">
							<p class="p-price">Rp. </p>
							<h3 class="rate">Rp. <?php echo number_format($row1['Ad_price'])?></h3>
							<div class="clearfix"></div>
						</div>
						<div class="condition">
							<p class="p-price">Kondisi</p>
							<h4>langsung Cek Saja </h4>
							<div class="clearfix"></div>
						</div>
						<div class="itemtype">
							<p class="p-price">Item Type</p>
							<h4>Buku</h4>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="interested text-center">
						<h4>Tertarik dengan Iklan ini?<small> Hubungi Penjual Langsung !!</small></h4>
						<p><i class="glyphicon glyphicon-user"></i>&nbsp;<?php echo $row1['user_name'];?></p>
						<p><i class="glyphicon glyphicon-earphone"></i><?php echo $row1['user_phone'];?></p><br>
						<hr>
						<h5>Harap langsung ketemuan kepada penjual ( COD ) <br>Pihak kami tidak ada jaminan Keamanannya</h5>
						<hr>

					</div>
				</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//single-page-->
	<!--footer section start-->		
		<footer>
		
			<div class="footer-bottom text-center">
			<div class="container">
				<div class="footer-logo">
					<a href="index.php"><span>Baang</span>brow</a>
				</div>
				<div class="copyrights">
						<p>Setiap barang yang sudah terjual silahkan hubungin Admin dibawah ini</p>			
						<p class="text-center">&copy 2019 <a href="https://www.instagram.com/aka.alvero.242628/">Baangbrow</a> All Rights Reserved | Design by AIMAN</p>
						
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		</footer>
        <!--footer section end-->
</body>
</html>