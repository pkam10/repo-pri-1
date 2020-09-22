</div>
   <div class="footer">
   	  <div class="wrapper">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
						<li><a href="#"><span>Advanced Search</span></a></li>
						<li><a href="contact.php"><span>Contact Us</span></a></li>
						</ul>
		   </div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="about.php">About Us</a></li>
						</ul>
				</div>
		   
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
						<ul>
							<li><span>0832-2345678</span></li>
						</ul>
						<div class="social-icons">
							<h4>&nbsp;</h4>
		   		  </div>
				</div>
		</div>
			
	 </div>
   </div>
    
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />    <!--slidermove-->

	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>

</body>
</html>
