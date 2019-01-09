<!DOCTYPE html>
<html>

<head>
<title>Baangbrow - Tempat pasang iklan sepuasnya gratis</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/sysle1.css" >
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link href="css/style1.css" rel="stylesheet" type="text/css" /> -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
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
</head>
<body>
<hr>
<marquee bgcolor="yellow"><h2>Final Project Pemrograman Web lanjut .... By. Baangbrow</h2></marquee>
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
  
