
<?php
require('inc/config.php');

require('inc/functions.php');


if (!isset($_SESSION['UserData'])) {
    exit(header("location:login.html"));
}

require('include/header.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
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

<title>Resale a Business Category Flat Bootstrap Responsive Website Template | Post Ad :: w3layouts</title>
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
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
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
/*---------------------validate form----------------*/
function validateForm()
	{
		 var x = document.forms["myForm"]["p_email"].value;
		var y = document.forms["myForm"]["p_city"].value;
		var z = document.forms["myForm"]["p_name"].value;
		var a = document.forms["myForm"]["ad_price"].value;
		var b = document.forms["myForm"]["p_phone"].value;
		var length=b.length;


    	
    		if (length==12) {
 				   
			} else {
    			alert("nomor hp wajib 12 dijid");
    			document.getElementById('p_phone').style.borderColor = "red";
    			return false;
}	
	}

</script>
<script>

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}


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
		<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
    <script src="js/easyResponsiveTabs.js"></script>
</head>
<body>
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
    					<a href="index.php">Home</a>
    					<a href="changepass.html">Settings</a>
						<a href="post-ad.php">Post Free Ad</a>
    					<a href="logout.php">Logout</a>
  					</div>

			</div>
		</div>
		<hr>	
	<div class="banner text-center">
	  <div class="container">    
			<h2 class="head">Posting Iklan</h2>
	  </div>
	</div>
	<!-- Submit Ad -->
	<div class="submit-ad main-grid-border">
		<div class="container">
			<div class="post-ad-form">
				<form name="myForm" action="post_adback.php" onsubmit="return validateForm()" onchange="return FormValidation();" method="post" enctype="multipart/form-data">
					<label>Pilih Katagori <span>*</span></label>
							<select class="" id="ad_cat" name="ad_cat">
								<option>Pilih Katagori</option>
								<option>electronics</option>
								<option>mobiles</option>
								<option>books</option>
								<option>flats</option>
							</select>
					<div class="clearfix"></div>
					<label>Nama Produkmu <span>*</span></label>
					<input type="text" placeholder="contoh : ( Buku - judul buku ) pengisian tidak pakai dalam kurung" id="ad_title" name="ad_title">
					<div class="clearfix"></div>

					<div class="clearfix"></div>
					<label>Harga<span>*</span></label>
					<input type="text" placeholder="harga dijelaskan didepkripsi dijual apa disewakan" id="ad_price" name="ad_price">
					<div class="clearfix"></div>

					<label>Depkripsi<span>*</span></label>
					<textarea class="mess" placeholder="silahkan isi lengkap tentang produkmu" id="ad_desc" name="ad_desc"></textarea>
					<div class="clearfix"></div>
				<div class="upload-ad-photos">
				<label>Upload Photos :</label>	
						<div>
							<input type="file" id="file1" name="file1"/>
						</div>	
						<div class="clearfix"></div>
						<label>Nama <span>*</span></label>
						<input type="text" id="p_name" name="p_name">
						<div class="clearfix"></div>

						<div class="clearfix"></div>
						<label>Kota <span>*</span></label>
						<input type="text" id="p_city" name="p_city">
						<div class="clearfix"></div>

						<div class="personal-details">
						<label>No Hp <span>*</span></label>
						<input type="text" class="phone" id="p_phone" name="p_phone">
						<div class="clearfix"></div>
						<label>Email<span>*</span></label>
						<input type="text" class="email" id="p_email" name="p_email">
						<div class="clearfix"></div>
					<input type="submit" value="Post">					
					<div class="clearfix"></div>
					</form>	
					</div>
			</div>
		</div>	
	</div>
	<!-- // Submit Ad -->
	<!--footer section start-->		
		<div class="footer-bottom text-center">
			<div class="container">
				<div class="footer-logo">
					<a href="index.php"><span>Baang</span>Brow</a>
				</div>
				<div class="copyrights">
					<p class="text-center">&copy 2019 <a href="https://www.instagram.com/aka.alvero.242628/">Baangbrow</a> All Rights Reserved | Design by AIMAN</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
        <!--footer section end-->
</body>
</html>