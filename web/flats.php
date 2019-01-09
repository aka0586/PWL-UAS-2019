<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require('inc/config.php');
/*PHP Login and registration script Version 1.0, Created by Gautam, www.w3schools.in*/
require('inc/functions.php');

/*Check for authentication otherwise user will be redirects to main.php page.*/
if (!isset($_SESSION['UserData'])) {
    exit(header("location:login.html"));
}
require('include/header.php');


$resultb=mysqli_query($con, "SELECT * FROM flats ORDER BY Ad_id");

?>


  <?php
require("include/nav.php");
?>
  <!-- slider -->
<?php
require("include/temp/flats.php");
?>
  <!-- //slider -->       
    <!--footer section start-->   
<?php
require("include/temp/footer.php");
?>

<?php
require("include/footer.php");
?>
</body>
</html>