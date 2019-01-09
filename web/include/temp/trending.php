<div class="trending-ads">
	<div class="container">
<div class="trend-ads">
			<h2>Trending iklan</h2>
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
<!-- Komputer-->
					<li>
						<?php $num_rows1 = mysqli_num_rows($resulte);
					if ($num_rows1!=0) {  
						while ($rowe = mysqli_fetch_array($resulte)) {?> 
						<div class="col-md-3 biseller-column">
							<a href="singleE.php?id=<?php echo $rowe['Ad_id']?>">
								<img id="gmr" src="<?php echo $rowe['Ad_image_path']?>"/>
								<span class="price">Rp. <?php echo number_format($rowe['Ad_price'])?></span>
							</a> 
							<div class="ad-info">
								<h5><?php echo $rowe['Ad_title']?></h5>
								<h5><?php echo "By ".$rowe['user_name']?></h5>
							</div>
						</div>
						 <?php   }}?>
					</li>
<!-- buku -->
					<li>	
					<?php $num_rows2 = mysqli_num_rows($resultb);
				if ($num_rows2!=0) {  
					while ($rowb = mysqli_fetch_array($resultb)) {?> 
					<div class="col-md-3 biseller-column">
						<a href="singleb.php?id=<?php echo $rowb['Ad_id']?>">
							<img id="gmr" src="<?php echo $rowb['Ad_image_path']?>"/>
							<span class="price">Rp. <?php echo number_format($rowb['Ad_price'])?></span>
						</a> 
						<div class="ad-info">
							<h5><?php echo $rowb['Ad_title']?></h5>
							<h5><?php echo "By ".$rowb['user_name']?></h5>
						</div>
					</div>
					 <?php    }}?>
					</li>
<!-- Kontrakan & Kost -->
					<li>

					<?php $num_rows3 = mysqli_num_rows($resultf);
				if ($num_rows3!=0) {  
					while ($rowf = mysqli_fetch_array($resultf)){?> 
					<div class="col-md-3 biseller-column">
						<a href="singlef.php?id=<?php echo $rowf['Ad_id']?>">
							<img id="gmr" src="<?php echo $rowf['Ad_image_path']?>"/>
							<span class="price">Rp. <?php echo number_format($rowf['Ad_price'])?></span>
						</a> 
						<div class="ad-info">
							<h5><?php echo $rowf['Ad_title']?></h5>
							<h5><?php echo "By ".$rowf['user_name']?></h5>
						</div>
					</div>
					 <?php   }}?>
				</li>
			</ul>
			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo3").flexisel({
						visibleItems:1,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 5000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
						responsiveBreakpoints: { 
							portrait: { 
								changePoint:480,
								visibleItems:1
							}, 
							landscape: { 
								changePoint:640,
								visibleItems:1
							},
							tablet: { 
								changePoint:768,
								visibleItems:1
							}
						}
					});
					
				});
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
					</div>   
			</div>
		</div>