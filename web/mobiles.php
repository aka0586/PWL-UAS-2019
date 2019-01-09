
<?php
require('inc/config.php');
/*PHP Login and registration script Version 1.0, Created by Gautam, www.w3schools.in*/


/*Check for authentication otherwise user will be redirects to main.php page.*/
if (!isset($_SESSION['UserData'])) {
    exit(header("location:login.html"));
}
$resultm=mysqli_query($con, "SELECT * FROM mobiles ORDER BY Ad_id DESC LIMIT 4;");
$resulte=mysqli_query($con, "SELECT * FROM electronics ORDER BY Ad_id DESC LIMIT 4;");
$resultb=mysqli_query($con, "SELECT * FROM books ORDER BY Ad_id DESC LIMIT 4;");
$resultf=mysqli_query($con, "SELECT * FROM flats ORDER BY Ad_id DESC LIMIT 4;");

?>


  <?php
require("include/nav.php");
?>
  <!-- slider -->
<?php
require("include/temp/mobiles.php");
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