<?php

// php code to Insert data into mysql database from input text
if(isset($_POST['submit']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "erisdb";
    
    // get values form input text and number

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO tblcontact (fullname, email, message) VALUES ('$fullname','$email','$message')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        $_SESSION['status'] = "Data Inserted Successfully";
		header('location: index.php?q=Contact');
    }
    
    else{
        echo 'Data Not Inserted';
    }
	
}

?>	


	<section id="content">
	
	<div class="container">
		<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>CONTACT INFO</h3>
									<p>Admin Contact Number: 8292 3247<br>Hours of Operation: 8am-5pm Monday to Friday<br>Schools Division Office of Valenzuela City<br>Pio Valenzuela Street, Brgy. Marulas, Valenzuela City</p>
								</div>  
							</div>
						</div>
	<div class="row">
								<div class="col-md-6">
									<p>We want to hear from you. Please feel free to email<br><p class="text-primary">sdovalenzuela@deped.gov.ph</p> or just speak your mind below. Please allow 1 business day to respond.</p>
								  	
		   <!-- Form itself -->
          <form action="Contact.php" method="post">
	       <h3>EMAIL FORM</h3>

		 <div class="control-group">
                    <div class="controls">
			<input type="text" class="form-control" 
			   	   placeholder="Full Name" name="fullname" required
			           data-validation-required-message="Please enter your name" />
			  <p class="help-block"></p>
		   </div>
	         </div> 	
                <div class="control-group">
                  <div class="controls">
			<input type="email" class="form-control" placeholder="Email" 
			   	            name="email" required
			   		   data-validation-required-message="Please enter your email" />
		</div>
	    </div><br>
			  
               <div class="control-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" class="form-control" 
                       placeholder="Message" name="message" required
		       data-validation-required-message="Please enter your message" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
		</div>
               </div> 
	     <div id="success"> </div> <!-- For success/fail messages -->
	    <button type="submit" name="submit" class="btn btn-primary pull-right">Send</button><br />
          </form>
								</div>
								<div class="col-md-6">
								<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=marulas%20central%20school&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">how to embed google map in website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
								</div>
							</div>
	</div>
 
	</section>
 