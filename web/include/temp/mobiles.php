<div class="trending-ads">
	<div class="container">
		<div class="trend-ads">
			<h2>Handphone</h2>
				<ul id="flexiselDemo3">
<!-- Handphone-->
					<li>
						<?php $num_rows = mysqli_num_rows($resultm);
						if ($num_rows!=0) {  
							while ($rowm = mysqli_fetch_array($resultm)) {?> 
							<div class="col-md-3 biseller-column" >
								<a href="singlem.php?id=<?php echo $rowm['Ad_id']?>">
									<img id="gmr" src="<?php echo $rowm['Ad_image_path']?>" />
									<span class="price">Rp. <?php echo number_format($rowm['Ad_price'])?></span>
								</a> 
								<div class="ad-info">
									<h5><?php echo $rowm['Ad_title']?></h5>
									<h5><?php echo "By ".$rowm['user_name']?></h5>
									
								</div>
							</div>
							 <?php }}?>
					</li>
		</div>   
	</div>
</div>