<?php include 'inc/header.php';?>

<?php
if (isset($_GET['proid'])) {
   

    $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['proid']);
}




?>

<style>
	.mybutton{width: 100px;float: left;margin-right: 50px;}

</style>

 <div class="main">
    <div class="content">
    	<div class="section group">
				<div class="cont-desc span_1_of_2">	

				<?php 
				$getPd = $pd->getSingleProduct($id);
				if ($getPd) {
					while ($result = $getPd->fetch_assoc()) {
				

				 ?>			
					<div class="grid images_3_of_2">
						<img src="admin/<?php echo $result['image']; ?>" alt="" />
					</div>
				<div class="desc span_3_of_2">
					<h2><?php echo $result['productName']; ?> </h2>				
					<div class="price">
						<p>Price: <span><?php echo $result['price']; ?></span></p>
						
						<p>Brand:<span><?php echo $result['brandName']; ?></span></p>
					</div>
				<span style="color: red;font-size: 18px;">
					

				</span>
			
			<div class="product-desc">
			<h2>Product Details</h2>
			<?php echo $result['body']; ?>
	    </div>
			<?php } } ?>	
	</div>
	  </div>
    </div>
	</div>
	
  <?php include 'inc/footer.php';?>