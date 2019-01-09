
<?php
require('inc/config.php');

require('inc/functions.php');


if (!isset($_SESSION['UserData'])) {
    exit(header("location:login.html"));
}

require('include/header.php');

$resultm=mysqli_query($con, "SELECT * FROM mobiles ORDER BY Ad_id DESC LIMIT 4;");
$resulte=mysqli_query($con, "SELECT * FROM electronics ORDER BY Ad_id DESC LIMIT 4;");
$resultb=mysqli_query($con, "SELECT * FROM books ORDER BY Ad_id DESC LIMIT 4;");
$resultf=mysqli_query($con, "SELECT * FROM flats ORDER BY Ad_id DESC LIMIT 4;");

?>

	<?php
require("include/nav.php");
?>

<?php
require("include/temp/search.php");
?>

	<!-- slider trending -->

<?php
require("include/temp/trending.php");
?>
	<!-- //slider trending -->	

	
<?php
require("include/temp/footer.php");
?>



</body>
</html>