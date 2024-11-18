
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 
    <meta name="description" content="Join Satspire to excel in your studies with expert tutors and flexible learning options across subjects like Mathematics, Science, and more.">
    <meta name="keywords" content="SATSPIRE, Mathematics, Algebra, Expert Tuitors, Comprehensive Material, Personalized Guidance, Affordable Pricing, Geometry, Statistics.">
   
    <meta name="author" content="SATSPIRE">
  
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://satspire.openpixeldev.com/">
    <meta property="og:title" content="Satspire - Empowering Students with Quality Education in Mathematics, Science, and More">
    <meta property="og:description" content="Satspire offers personalized and innovative education across subjects like Mathematics, Science, English, and more. Join us to excel in your studies with expert tutors, comprehensive courses, and flexible learning options.">
    <meta property="og:image" content="https://satspire.openpixeldev.com//images/og-image.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://satspire.openpixeldev.com/">
    <meta property="twitter:title" content="Satspire - Empowering Students with Quality Education in Mathematics, Science, and More">
    <meta property="twitter:description" content="Satspire offers personalized and innovative education across subjects like Mathematics, Science, English, and more. Join us to excel in your studies with expert tutors, comprehensive courses, and flexible learning options.">
   


<?php include("includes/links.php"); ?>

	 <title>SATSPIRE - Contact</title>
    
</head>

<body>
    
    <!--====== Header Start ======-->

    <?php include("includes/header.php"); ?>

    <!--====== Header Ends ======-->
    
    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url(/images/contact-banner.jpg);">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">Contact</h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Contact Start ======-->
    
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-contact-info mt-30">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Address</h5>
                            <p><b>SATSPIRE</b><br>
     6530 Glenstone Way,<br>
     Mason OH 45040</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-contact-info mt-30">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Phone</h5>
                            <p><a href="tel:+1 513-662-6369">+1 513-662-6369</a></p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-contact-info mt-30">
                        <div class="info-icon">
                            <i class="fas fa-envelope-open"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Email Address</h5>
                            <p><a href="mailto:/info@satspire.com">info@satspire.com</a></p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-title text-center">
                            <h3 class="title">Leave a message here</h3>
                            <p>We’re here to help you take the next step in your educational journey. Whether you have questions about our courses, need assistance with enrollment, or simply want more information, our team is ready to assist.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-form-wrapper">
                            <?php

$email_to ='krishnaleelak@openpixelweb.com'; //put your email address here
$subject ='SATSPIRE'; //put the email sibject line prefix here
$email_from ='donotreply@https://satspire.openpixeldev.com//'; //put the email address that this form will be sent from
$email_from_nice ='SATSPIRE'; //put in the 'nice' name for the email sender



if(isset($_POST['email'])) {
	
	$name = $_POST['name'];
	$lname = $_POST['lname'];
    $email = $_POST['email'];
	$phone = $_POST['phone']; 
	
    $message = $_POST['message']; 
	

    $emailTo = $email_to; //Put your own email address here 
    $body = "First Name: $name\n\n Last Name: $lname\n\n Email Address: $email\n\nPhone Number: $phone\n\n Message: $message ";
           $headers = 'From: '.$email_from_nice.' <'.$email_from.'>' . "\r\n" . 'Reply-To: ' . $email;
//$headers = 'From: '.$email_from_nice.' <'.$email_from.'>' . "\r\n" . 'Reply-To: ' . $email_to;

mail($emailTo, $subject, $body, $headers);
$emailSent = true;
	// create email headers
}
?>
    <?php if(isset($emailSent) && $emailSent == true) {   //If email is sent ?>

        <div class="container">
        <div class="row">
         
            <div class="col-md-9 mx-auto mbr-form">
                <div class="wrapper">
		   <div class="form-row">
                            <div class="alert text-center text-black col-12">
				
							
							
              <div id="formulario">
                <p class="mbr-text mbr-fonts-style pb-5 display-7">Thank you for contacting,<br>One of Our team member will get back to you soon.</p></div></div>
                    
                        </div> </div> </div> 
                      
                      </div> </div>
		

       <?php /*?> <?php } ?><?php */?>
  <?php } else{?>
                            <form id="contact-form" action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" name="name" id="name" placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" name="lname" id="lname" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="email" name="email" id="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" name="phone" id="phone" placeholder="Phone" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <textarea name="message" id="message" placeholder="Write here..." required ></textarea>
                                        </div>
                                    </div>
                                  
                                    <div class="col-md-12">
                                        <div class="single-form text-center">
                                            <button class="main-btn">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                             <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Contact Ends ======-->
    
    <!--====== Newsletter Start ======-->

    

    <!--====== Newsletter Ends ======-->
    
    <!--====== Footer Start ======-->
<?php include("includes/footer.php"); ?>

    <!--====== BACK TOP TOP PART ENDS ======-->
    
    <!--====== Start ======-->



    <!--====== Ends ======-->

<?php include("includes/script.php"); ?>


    <!--====== Jquery js ======-->
 
    
    
</body>

</html>
