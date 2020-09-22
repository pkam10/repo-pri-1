<?php include 'inc/header.php';?><html>
<style type="text/css">
<!--
.style1 {
	color: #000099;
	font-style: italic;
}
-->
</style>
<head>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser1.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
<html>
<head>
<script>
function User(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser2.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form>
<span class="style1">FILTER</span>
<select name="tbl_product" onChange="showUser(this.value)">
  <option value="">Select:</option>
  <option value="2">HEALTH</option>
  <option value="3">LITERATURE</option>
  <option value="4">ACADEMIC</option>
  <option value="5">KIDS</option>
  </select> 
<span class="style1">SORT</span>
<select name="tbl_product" onChange="User(this.value)">
  <option value="">Select:</option>
  <option value="1">LOW-HIGH</option>
</select>
</form>
<br>
<div id="txtHint"><b>Info will be listed here...</b></div>

</body>
</html>


 <div class="main">
    <div class="content">

    <div class="content_top">
    		<div class="heading">
    		<h3>
    		<p>Academic & Professional</p>
    		</div>
    		<div class="clear"></div>
   	  </div>

			<div class="section group">
            <?php
	      	$getTop4 = $pd->getTopbrandacademic();
	      	if ($getTop4) {
	      		while ($result = $getTop4->fetch_assoc()) { 
	      
	      			
	      	?>

				<div id="academic" class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					 <h2><?php echo $result['productName']; ?></h2>
					 <p><?php echo $fm->textShorten($result['body'],60); ?></p>
					 <p><span class="price"><?php echo $result['price']; ?></span></p>
				      <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>
				<?php } } ?>

			</div>
    	<div class="content_top">
    		<div class="heading">
    		<h3>
    		<p>kids</p>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">

	      	<?php
	      	$getTop1 = $pd->getTopbrandkids();
	      	if ($getTop1) {
	      		while ($result = $getTop1->fetch_assoc()) { 
	      
	      			
	      	?>

				<div id="kids" class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					 <h2><?php echo $result['productName']; ?></h2>
					 <p><?php echo $fm->textShorten($result['body'],60); ?></p>
					 <p><span class="price"><?php echo $result['price']; ?></span></p>
				      <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>
				<?php } } ?>
				
	  </div>
		<div class="content_bottom">
    		<div class="heading">
    		<h3>health &amp; cooking </h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
            <?php
	      	$getTop2 = $pd->getTopbrandhealth();
	      	if ($getTop2) {
	      		while ($result = $getTop2->fetch_assoc()) { 
	      
	      			
	      	?>

				<div id="health" class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					 <h2><?php echo $result['productName']; ?></h2>
					 <p><?php echo $fm->textShorten($result['body'],60); ?></p>
					 <p><span class="price"><?php echo $result['price']; ?></span></p>
				      <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>
				<?php } } ?>
				
			</div>
	<div class="content_bottom">
    		<div class="heading">
    		<h3>literature &amp; fiction </h3>
    		</div>
    		<div class="clear"></div>
   	  </div>
			<div class="section group">


					<?php
	      	$getTop3 = $pd->getTopbrandliterature();
	      	if ($getTop3) {
	      		while ($result = $getTop3->fetch_assoc()) { 
	      
	      			
	      	?>

				<div id="literature" class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					 <h2><?php echo $result['productName']; ?></h2>
					 <p><?php echo $fm->textShorten($result['body'],60); ?></p>
					 <p><span class="price"><?php echo $result['price']; ?></span></p>
				      <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>
				<?php } } ?>
				
			</div>
    </div>
 </div>
 <html>
<head>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser1.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
  
<?php include 'inc/footer.php';?>