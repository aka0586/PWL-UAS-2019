

<div class="trending-ads">
	<div class="container">
		<div class="trend-ads">
			<h2>Buku</h2>
				<ul id="flexiselDemo3">
<!-- Buku -->
					<li>	
					<?php $num_rows2 = mysqli_num_rows($resultb);
				if ($num_rows2!=0) {  
					while ($rowb = mysqli_fetch_array($resultb)) {?> 
					<div class="col-md-3 biseller-column">
						<a href="singleb.php?id=<?php echo $rowb['Ad_id']?>">
							<img id="gmr1" src="<?php echo $rowb['Ad_image_path']?>"/>
							<span class="price">Rp. <?php echo number_format($rowb['Ad_price'])?></span>
						</a> 
						<div class="ad-info">
							<h5><?php echo $rowb['Ad_title']?></h5>
							<h5><?php echo "By ".$rowb['user_name']?></h5>
						</div>
					</div>
					 <?php    }}?>
					</li>
			   </ul>	
		</div>   
	</div>
</div>
