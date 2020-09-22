<?php



include 'lib/Database.php';
include 'helpers/Formate.php';
spl_autoload_register(function($class){
include_once "classess/".$class.".php";
});
$db = new Database();
$fm = new Format();
$pd = new Product();
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>infibeam</title>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/newstyle.css" rel="stylesheet" type="text/css" media="all"/>                                         <!--style-->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>                                             <!--topmenu-->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>                                                 <!--slider-->
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
<style>                                                                                                                <!--slider-->

.sticky {
  position: fixed;
  top: 0;
  width: 78%;
  z-index: 10000;

}


.sticky + .content {
  padding-top: 102px;
  

}
.style1 {
	color: #000066;
	font-size: large;
}
.style2 {
	font-size: x-large;
	font-style: italic;
	font-weight: bold;
}
.style4 {
	font-size: large;
	font-weight: bold;
}
.style8 {color: #FFFFFF}
</style>
</head>
<body>

  <div class="wrap">
		<div class="header_top">
			<div class="logo style1">				<span class="style2"> INFIBEAM</span><strong>-</strong><span class="style4">Shop with a smile </span></div>
			  <div class="header_top_right">
			    <div class="search_box">
				    <form action="search.php" method="get">
				      <p>
				         <input type="text" value="Search for Products" name="search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search for Products';}">
				        <input type="submit" name="submit" value="SEARCH">
	                    <label></label>
				      </p>
			      </form>
			    </div>
			    
                <p>
                
                </p>
                <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
</div>
<div class="pagination">
  <a class="active" href="#">1</a>
  <a href="topbrands.php">2</a>
  <a href="topbrands.php">3</a>
 
</div>


<div class="menu" id="myHeader">
	<ul id="dc_mega-menu-orange" style="text-transform: uppercase;" class="dc_mm-orange">
	<div class="col_1_of_4 span_1_of_4">
	  <a href="index.php" class="style8">Home</a>	  </div>
	  <div class="col_1_of_4 span_1_of_4">
	   <a href="topbrands.php" class="style8">BOOKS</a>      </div>
	
				
<div class="col_1_of_4 span_1_of_4">

	  <a href="contact.php" class="style8">Contact</a>
	  
	    <a href="javascript:void(0);" class="icon" onClick="myFunction1()">
    <i class="fa fa-bars"></i>  </a>  </div>
	
	  <div class="clear"></div>
	</ul>
</div>


