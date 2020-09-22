<?php include 'inc/header.php';?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$name = $fm->validation($_POST['name']);
	$email = $fm->validation($_POST['email']);
	$contact = $fm->validation($_POST['contact']);
	$message = $fm->validation($_POST['message']);
	

	$name = mysqli_real_escape_string($db->link, $name);
	$email = mysqli_real_escape_string($db->link, $email);
	$contact = mysqli_real_escape_string($db->link, $contact);
	$message = mysqli_real_escape_string($db->link, $message);

	$error = "";

	if (empty($name)) {
		$error = "Name must not be empty !";
	} elseif (empty($email)) {
		$error = "Email must not be empty !";
	} elseif (empty($contact)) {
		$error = "Contact field must not be empty !";

	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error = "Invalid Email Address !";
	} elseif (empty($message)) {
		$error = "Subject field not be empty !";

	} else {
 $query = "INSERT INTO tbl_contact(name,email,contact,message) VALUES('$name','$email','$contact','$message')";

    $inserted_rows = $db->insert($query);

    if ($inserted_rows) {
     $msg = "Message Sent Successfully.";

    }else {
    $error = "Message not sent!";
    }
	}

	}

	?>





 <div class="main">
    <div class="content">
    	<div class="support">
		  <div class="support_desc"></div>
  				<img src="images/contact.png" alt="" />
  			<div class="clear"></div>
  		</div>
    	<div class="section group">
    	  <div class="col span_1_of_3">
      			<div class="company_address">
				     	<h2>Contact Information :</h2>
						    	<p>Panjim Goa</p>
						   		<p>Mobile:0188888886</p>
				   		        <p>Phone: 0176210187</p>
				 	 	<p>Email: <span>priyal@gmail.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
		    </div>
				 </div>
			  </div>    	
    </div>
 </div>
<?php include 'inc/footer.php';?>