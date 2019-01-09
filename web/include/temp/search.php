
<div class='container'>
  <div class='row'>
    <div class='col-md-12'>
      <div class='search-box'>
       <form action=""  method="get" class='search-form' >
        <div class="input-group">
          <input class='form-control' placeholder='Aku Mau Belanja .... ' type="text" name="query">
          <div class="input-group-btn">
          <button class='btn btn-link search-btn' type"submit" name="submit" >
             <i class="glyphicon glyphicon-search"></i>
          </button>
        </form>
       </div>
      </div>
    </div>
  </div>
</div>
<hr>


<?php

  if(isset($_GET['submit']))
  {
      $name= htmlspecialchars($_GET['query']);
      
      echo "</br>";

    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

$result = mysqli_query($con, "SELECT * FROM mobiles
    WHERE Ad_title LIKE '%$name%'");

$num_rows = mysqli_num_rows($result);
if ($num_rows==0) {?>

  

<?php }
else
{
 ?>

   
<div id="container">
      <div class="clearfix"></div>
          <ul class="list">
              <?php   while ($row = mysqli_fetch_array($result)){?> 
                <a href="singlem.php?id=<?php echo $row['Ad_id'];?>">
                  <li>
                  <img src="<?php echo $row['Ad_image_path'];?>" title="" alt="Image" />
                  <section class="list-left">
                  <h5 class="title"><?php echo $row['Ad_title']?></h5>
                  <span class="adprice">Rp. <?php echo number_format($row['Ad_price'])?></span>
                  </section>
                  <section class="list-right">
                  <span class="date"><?php echo $row['Ad_date']?></span>
                  <span class="cityname"><?php echo $row['user_city']?></span>
                  </section>
                  <div class="clearfix"></div>
                  </li> 
                </a>
                <?php echo "<hr>";}?>
              </ul>
     </div>
</div>
               
<?php }mysqli_close($con);
}
?>  
   <!-- electronics -->
<?php
  if(isset($_GET['submit']))
  {
      $name= htmlspecialchars($_GET['query']);
      echo "</br>";   
$con= new mysqli("localhost","root","","rentalw");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
$result = mysqli_query($con, "SELECT * FROM electronics
    WHERE Ad_title LIKE '%$name%'");
$num_rows = mysqli_num_rows($result);
if ($num_rows==0) {?>
<?php }
else
{
 ?>

 <div id="container">
      <div class="clearfix"></div>
              <ul class="list">
              <?php   while ($row = mysqli_fetch_array($result)){?> 
                <a href="singleE.php?id=<?php echo $row['Ad_id'];?>">
                  <li>
                  <img src="<?php echo $row['Ad_image_path'];?>" title="" alt="Image" />
                  <section class="list-left">
                  <h5 class="title"><?php echo $row['Ad_title']?></h5>
                  <span class="adprice">Rp. <?php echo number_format($row['Ad_price'])?></span>
                  <p class="catpath">Home » Flats</p>
                  </section>
                  <section class="list-right">
                  <span class="date"><?php echo $row['Ad_date']?></span>
                  <span class="cityname"><?php echo $row['user_city']?></span>
                  </section>
                  <div class="clearfix"></div>
                  </li> 
                </a>
                <?php    echo "<hr>";    }?>
              </ul>
      </div>
</div>
       
    
<?php }mysqli_close($con);
}
?>

<!-- flats -->
<?php
  if(isset($_GET['submit']))
  {
      $name= htmlspecialchars($_GET['query']);
      echo "</br>";
    $con= new mysqli("localhost","root","","rentalw");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
$result = mysqli_query($con, "SELECT * FROM flats
    WHERE Ad_title LIKE '%$name%'");
$num_rows = mysqli_num_rows($result);
if ($num_rows==0) {?>
<?php }
else
{?>


<div id="container">
    <div class="clearfix"></div>
              <ul class="list">
              <?php   while ($row = mysqli_fetch_array($result)){?> 
                <a href="singlef.php?id=<?php echo $row['Ad_id'];?>">
                  <li>
                  <img src="<?php echo $row['Ad_image_path'];?>" title="" alt="Image" />
                  <section class="list-left">
                  <h5 class="title"><?php echo $row['Ad_title']?></h5>
                  <span class="adprice">Rp. <?php echo number_format($row['Ad_price'])?></span>
                  <p class="catpath">Home » Flats</p>
                  </section>
                  <section class="list-right">
                  <span class="date"><?php echo $row['Ad_date']?></span>
                  <span class="cityname"><?php echo $row['user_city']?></span>
                  </section>
                  <div class="clearfix"></div>
                  </li> 
                </a>
                <?php    echo "<hr>";}?>

              </ul>
    </div>
</div>
         
    
<?php }mysqli_close($con); }?>

<!-- books -->
<?php
  if(isset($_GET['submit']))
  {
      $name= htmlspecialchars($_GET['query']);
      echo "</br>";
    $con= new mysqli("localhost","root","","rentalw");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
$result = mysqli_query($con, "SELECT * FROM books
    WHERE Ad_title LIKE '%$name%'");
$num_rows = mysqli_num_rows($result);
if ($num_rows==0) {?>
<?php }
else
{?>

<div id="container">
  <div class="clearfix"></div>
              <ul class="list">
              <?php   while ($row = mysqli_fetch_array($result)){?> 
                <!--<a href="single.html">-->
                <a href="singleb.php?id=<?php echo $row['Ad_id'];?>">
                  <li>
                  <img src="<?php echo $row['Ad_image_path'];?>" title="" alt="Image" />
                  <section class="list-left">
                  <h5 class="title"><?php echo $row['Ad_title']?></h5>
                  <span class="adprice">Rp. <?php echo number_format($row['Ad_price'])?></span>
                  <p class="catpath">Home » Flats</p>
                  </section>
                  <section class="list-right">
                  <span class="date"><?php echo $row['Ad_date']?></span>
                  <span class="cityname"><?php echo $row['user_city']?></span>
                  </section>
                  <div class="clearfix"></div>
                  </li> 
                </a>
                <?php    echo "<hr>";}?>

              </ul>
  </div>
</div>
      
<?php }mysqli_close($con);}?>