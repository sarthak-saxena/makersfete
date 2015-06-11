<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="/pic/makers-fete-icon.ico" type="image/x-icon" />
    <title>Makers Fete</title>

  <link rel="stylesheet" href="font/css/font-awesome.min.css">
   
   
	<link rel="stylesheet" href="font/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
   <style>
   label{
   font-weight:100;
   }
   </style>
</head>
	
<body>

<!-- NAVBAR
================================================== -->
<!---1st navbar------------>
                <nav class="navbar navbar-default" role="navigation" style="background-color:white">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"  data-target="#fepsi-navbar-collapse">
                                 <span class="sr-only">Toggle navigation</span>
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                        </button>
      
	                        <div class="navbar-brand" href="#" style="margin: 5px 5px 5px 30px" >Makers Fete&#39;14 </div>
                    
					</div>
									 
									 
                    <div class="collapse navbar-collapse" id="fepsi-navbar-collapse">
                            <ul class="nav navbar-nav pull-right" style="padding:10px">
                                 <li ><a href="home.html" >Home</a></li>
		                      
							    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Maker Contests<b class="caret"></b></a>
                                       
                                        <ul class="dropdown-menu" >
                                          <li><a href="iamamaker.php">I am a Maker</a></li>
                                          <li ><a href="myidea.php">My Idea</a></li>
                                          <li><a href="artfair.php">Art Fair</a></li>
                                          
               
                                        </ul>
                                </li>
		                        <li><a href="workshop.php" >Maker Workshops</a></li>
		                        <li><a href="expo.php" >Makers Expo</a></li>
		                        
		                        <li><a href="uncommonindian.html">The Uncommon Indian</a></li>
		                        <li><a href="partner.html" >Partner</a></li>
		                        <li><a href="experienceit.php" >Experience it</a></li>
		                        <li><a href="contact.html" >Contact</a></li>
		 
         
                            </ul>
                    </div>
                </nav>
<!-- NAVBAR ends
================================================== -->
                    <div class="jumbotron" style="background-color:#295266">
	                    <div class="container">
	                        <div class="row" style="margin-top:2%;padding:20px">
	                            <div class="col-md-4"> 
			                       <img src="pic/experienceit_inside.jpg" class="img-circle" width="200px" height="200px">
					            </div>
					 
					            <div class="col-md-8"> 
								 <h3 style="color:white"> <font face="Century Gothic"><strong>Experience It</strong></font></h3>
			                      <p style="font-size:17px;color:white"> <font face="Century Gothic">Aspiring to be a maker?? Get hands 
								  on experience about makers fest by attending it. Experience the this makers festival live and get hands 
								  on experience about innovations, inventions and be a motivated to be a MAKER.<br><br>
								  Visitors can attend the Workshops and Experience the Makers Expo
                                  </font></p>
					            </div>
					        </div>
	                    </div>
	                </div>

<!-- Form
================================================== -->
			
			
        <div class="container"><!----general container-->
			     <h3>Visitor Registration Form</h3>
           <?php if(isset($_COOKIE["sent"])) echo ("<small style=\"color:#0f0;\">Your form has been submitted.</small>");?>
           <?php if(isset($_COOKIE["fail"])) echo ("<small style=\"color:#f00;\">Your form has not been submitted.</small>");?>
				             <form role="form" action="experience.php" method="POST">
                        <div class="form-group">
                           <label for="audi_name">Full Name</label>
                           <input type="text" class="form-control" name="audi_name" id="audi_name" placeholder="Enter Your Name" >
                        </div>
 
                        <div class="form-group">
                           <label>Gender</label><br>
                              <div class="radio-inline">
                                    <label>
                                        <input type="radio" name="audi_gender" id="audi_gender" value="Male" checked>
                                         Male
                                    </label>
                                </div>
                                <div class="radio-inline">
                                        <label>
                                        <input type="radio" name="audi_gender" id="audi_gender" value="female" checked>
                                        Female
                                        </label>
                                </div>
                        </div>
  
                        <div class="form-group">
                            <label for="audi_age">Age</label>
                            <input type="text" class="form-control" id="audi_age" name="audi_age" placeholder="Enter Your Age">
                        </div>
  
                        <div class="form-group">
                           <label for="audi_org">Organization / Institution</label>
                           <input type="text" class="form-control" id="audi_org" name="audi_org" placeholder="Enter Your Organization name">
                        </div>
  
                        <div class="form-group">
                            <label for="audi_phno">Phone Number</label>
                            <input type="text" class="form-control" id="audi_phno" name="audi_phno" placeholder="Enter Your Phone Number" pattern="^9\d{9}$" >
                        </div>
  
                        <div class="form-group">
                          <label for="audi_email">Email</label>
                          <input type="email" class="form-control" id="audi_email" name="audi_email" placeholder="Enter Your email id"  >
                        </div>
  
                        <div class="form-group">
                           <label>Address</label>
                           <textarea class="form-control" name="audi_address" rows="3"></textarea><br>
            </div>   
  
                        <div class="form-group">
                            <label for="audi_city">City</label>
                            <input type="text" class="form-control" id="audi_city" name="audi_city" placeholder="Enter Your city name"  >
                        </div>
  
                        <div class="form-group">
                               <label for="audi_state">State</label>
                               <input type="text" class="form-control" id="audi_state" name="audi_state" placeholder="Enter Your state name"  >
                        </div>
  
                        <div class="form-group">
                                <label for="audi_pin">PIN/ZIP Code</label>
                                <input type="text" class="form-control" id="audi_pin" name="audi_pin" placeholder="Enter Your Postal Code"  >
                        </div>
  
                        <div class="form-group">
                                <label>Country</label><br>
                                    <select name="audi_country">
                                        <option value="india">India</option>
                                        <option value="nri">NRI</option>
                                        <option value="othera">Others</option>
                                    </select>
                        </div>

                        <div class="form-group">
                            <label for="audi_passreq">Number of passes needed</label>
                            <input type="text" class="form-control" id="audi_passreq" name="audi_passreq">
                        </div>

                        <div class="form-group">                       
                       <label>Visitors Details</label><br>
                                  <label>Enter the visitors name,age,contanct number and email seperated by commas.</label>
                                    <textarea class="form-control" id="audi_partdet" name="audi_partdet" rows="3" ></textarea><br>
                        </div>
            
                        <div class="form-group">
                             <label>How did you come to know about Makers Fete?</label><br>
                                  <div class="radio-inline">
                                        <label>
                                          <input type="radio" name="audi_pubinfo" id="audi_pubinfo" value="Website" checked>
                                              Website
                                        </label>
                                    </div>

                                    <div class="radio-inline">
                                        <label>
                                           <input type="radio" name="audi_pubinfo" id="audi_pubinfo" value="Friend" checked>
                                             Friends
                                        </label>
                                    </div>

                                    <div class="radio-inline">
                                            <label>
                                               <input type="radio" name="audi_pubinfo" id="audi_pubinfo" value="campus" checked>
                                                     Campus
                                            </label>
                                    </div>
  
                                    <div class="radio-inline">
                                            <label>
                                             <input type="radio" name="audi_pubinfo" id="audi_pubinfo" value="internet" checked>
                                                  Internet
                                            </label>
                                    </div>

                                    <div class="radio-inline">
                                         <label>
                                           <input type="radio" name="audi_pubinfo" id="audi_pubinfo" value="news" checked>
                                              News
                                           </label>
                                    </div>


                                    <div class="radio-inline">
                                       <label>
                                         <input type="radio" name="audi_pubinfo" id="audi_pubinfo" value="fb" checked>
                                           Facebook
                                          </label>
                                    </div>


                        </div>
                       
             <div class="form-group">
                          <center>
              <button type="submit" class="btn btn-primary" >Submit</button>
                          <button type="reset" class="btn btn-danger">Reset</button>
                          </center>
            </div>  
            </form>
        </div><!----end  container--->
  <!-- Footer
    ================================================== -->
	<!----1st footer--->   


<div class="jumbotron" style="background:black;">
			
			
			  <div class="row" style="padding-left:15px;padding-right:15px;">
							 
									 
							  <div class="col-sm-3 col-xs-4">
								  <img src="pic/unnamed.png" class="img-responsive">
							  </div>
							  <div class="col-sm-2 col-xs-4">
									 <h5 style="color:white;font-size:18px" >Follow us</h5>
									 <a href="https://www.facebook.com/fepsi.india" target="_blank"><i class="fa fa-facebook-square fa-2x" style="color:white"></i></a><font color="white" > Fep Si<br>
									  <a href="https://www.facebook.com/makersfete14" target="_blank"><i class="fa fa-facebook-square fa-2x" style="color:white"></i></a> Makers Fete</font>
									  <br><br>
							 <p><i class="fa fa-envelope" style="color: white !important;"></i> <strong style="color: white">Email:</strong> <a href="mailto:info@makersfete.com">info@makersfete.com</a></p>
							  </div>
							 
 <div class="col-sm-2 col-xs-4" style="color:white">
									 <h5 style="color:white;font-size:18px">Contact Us</h5>
									 <p><i class="fa fa-map-marker"></i> <strong>Address:</strong> VIT University,<br>Vellore,Tamil Nadu.</p>
									 <p><i class="fa fa-phone"></i><strong>Phone: +91 9159888479, +91 9159865936</strong>
									 
							  
							  </div>
							  <div class="col-sm-3 col-xs-6">
								  
							  <img src="partner/vit.png" class="img-responsive">
							  </div>

							  <div class="col-sm-2 col-xs-6">  
							  <img src="pic/swenew.png" class="img-responsive" align="right">
							  							</br></br>   &nbsp;<h5 style="color:white" align="right"><b>Design Partner</b></h5>
							  <p style="font-size:13px" align="right"><a href="https://www.facebook.com/rajsoni1994" style="color:white">Designed By Raj Soni</a></p>
							  </div>
				</div>


</div>


 
 <!-- Javascript and Jquery file 
================================================== -->
	<script src="js/kjquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/kmodernizr.custom.js"></script>
    
</body>

</html>

<?php if (isset($_COOKIE["sent"])) setcookie("sent", -1, time()-1000);?>
<?php if (isset($_COOKIE["fail"])) setcookie("fail", -1, time()-1000);?>