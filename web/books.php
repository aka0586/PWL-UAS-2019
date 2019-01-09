
<?php
require('inc/config.php');
/*PHP Login and registration script Version 1.0, Created by Gautam, www.w3schools.in*/
require('inc/functions.php');

/*Check for authentication otherwise user will be redirects to main.php page.*/
if (!isset($_SESSION['UserData'])) {
    exit(header("location:login.html"));
}

require('include/header.php');


$resultb=mysqli_query($con, "SELECT * FROM books ORDER BY Ad_id ");

?>


  <?php
require("include/nav.php");
?>
  <!-- slider -->
<?php
require("include/temp/books.php");
?>
  <!-- //slider -->       
    <!--footer section start-->   
<?php
require("include/temp/footer.php");
?>
</body>
</html>