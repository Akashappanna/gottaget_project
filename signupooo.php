<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>shop - Gottaget </title>		
	<link rel="stylesheet" href="<?= base_url() ?>/assets/homeooo_css/signupooo_css.css">

	<!-- GOOGLE FONTS  -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
<div id="wrapper" class="bg-image">
	    <main>
		<div class="container px-5 py-2 gt-section">
			<div class="row mt-5">
			   <div class="col-md-6 px-0" id="hand-image">
			        <div >
					<img id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
				    </div>
			   </div>
			   
			   
			   <div class="col-md-6 px-0" id="sign-up-section">
			        <div class="d-flex flex-column align-items-center sign-up-section">
					    <div class="d-flex flex-row align-items-center justify-content-between mt-4">
						     <div class="d-flex justify-content-start pl-4" id="Sign_Up_g">
                                 Sign Up
                             </div>
							
							 <div class="d-flex justify-content-end pr-4">
							     <img src="<?= base_url() ?>/assets/homeooo_css/imgs/logo.jpg" alt="logo" class="img-fluid img-fluid1">
							 </div>	
						</div>	
							 
						<div  class="d-flex pl-4 mb-3" id="Join_our_community_gi">
						  Join our community!
					    </div>					    
											
						
						<form id='IDForm' method='POST' action='<?= base_url('users/g2g_register') ?>' class="d-flex flex-column px-4 mb-3 align-items-center">
						 <input class="pl-3 py-3 mb-2" type="text" id="name_input" name="name" value="<?php if (!empty($_SESSION['name'])) echo $_SESSION['name']; ?>" placeholder="Name"/>
						<input type="text" class="pl-3 py-3 mb-2" id="address_input" name="address" value="<?php if (!empty($_SESSION['address'])) echo $_SESSION['address']; ?>" placeholder="Address"/>
						
						<div class="d-flex r-c">
						<input type="text" class="pl-3 py-3 mb-2 mr-1" id="pincode_input" name="pincode" value="<?php if (!empty($_SESSION['pincode'])) echo $_SESSION['pincode']; ?>" placeholder="Pin Code"/>
						<input type="text" class="pl-3 py-3 mb-2 ml-1" id="apartment_input" name="apartment" value="<?php if (!empty($_SESSION['apartment'])) echo $_SESSION['apartment']; ?>" placeholder="Apartment Name"/>
						</div>
						
						<div class="d-flex flex-row align-items-center" id="phone_input_box">
						<input type="text" class="pl-3 py-3 mb-2" id="phone_input" name="phone" value="<?php if (!empty($_SESSION['phone'])) echo $_SESSION['phone']; ?>" placeholder="Phone Number" onkeypress="return check_num(event)" onkeyup="valid_phone(this.value)" maxlength=10 />
						<button id="send_otp3">Send OTP</button>
						</div>
						
						<div  class="d-flex pl-4 mb-3" style="font-style: italic;color: red;">
						  <span id="phone_feedback"></span>
					    </div>	
						 
            
						
						<div class="d-flex r-c ">
						<div id="OTP_f">
                                <span>OTP</span>
                          </div>						
						
						<div class="d-flex flex-column">
						  <div class="d-flex flex-row mx-2 r-c2" id="otp-box">                       
						  <input type="text" class="otp_box mx-2" id="otp1" name="otp1" onkeypress="return check_num(event)" onkeyup="change_focus(this.id,'otp2')" maxlength=1/>
						  <input type="text" class="otp_box mx-2" id="otp2" name="otp2" onkeypress="return check_num(event)" onkeyup="change_focus(this.id,'otp3')" maxlength=1/>
					      <input class="otp_box mx-2" type="text" id="otp3" name="otp3" onkeypress="return check_num(event)" onkeyup="change_focus(this.id,'otp4')" maxlength=1/>
					      <input type="text" class="otp_box mx-2" id="otp4" name="otp4" onkeypress="return check_num(event)" onkeyup="change_focus(this.id,'otp5')" maxlength=1/>
					      <input type="text" class="otp_box mx-2" style="left : 184px" id="otp5" name="otp5" onkeypress="return check_num(event)" onkeyup="change_focus(this.id,'otp6')" maxlength=1/>
                          <input type="text" class="otp_box mx-2" style="left : 230px" id="otp6" name="otp6" onkeypress="return check_num(event)" maxlength=1/>
						  </div>  						  
						<div id="Resend_ga" class="d-flex pl4 mt-3 r-c2 ">						  
                        <span class="p-2">Resend</span>
					    </div>
						</div>					
						</div>
						
						<div  class="d-flex pl4 mb-3">
						  <input type="hidden" id="response_detail3" name="detail"
                          value='<?php if (!empty($_SESSION['detail'])) echo($_SESSION['detail']); ?>'>	
					    </div>
							
						<div  class="d-flex pl4 mb-3">
                        <div style='color : red;font-size:14px '>
							<?php
							if (!empty($error))
								echo $error;
							if (!empty($_SESSION['otp_status']))
								echo $_SESSION['otp_status'];
							if (!empty($_SESSION['user_exists']))
								echo $_SESSION['user_exists'];
							?>
						</div>
                        </div>

						
						<div  class="d-flex pl4 mb-3 justify-content-end">
                              <a href="#" onclick='submit_form("IDForm")' id="ar-image">
                                <img src="<?= base_url() ?>/assets/homeooo_css/imgs/ar.png" alt="logo" class="img-fluid img-fluid1">
                              </a>
                        </div>						
						</form>
						</div>
					</div>			 
		       </div>			   
			 </div>			 
		</div>
		</main>
</div>
<script type="text/javascript" src="<?= base_url('templatejs/login.js') ?>"></script>
	 <script>
	 function send_otp(ev){
		 ev.preventDefault();
	   var phone_id = 'phone_input';
	  var id = 'send_otp3';
	  var detail_id = 'response_detail3';
      document.getElementById(id).style.display = 'none';
      phone = document.getElementById(phone_id).value;
      var response_array;
      if(phone.length == 10){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				response_array = JSON.parse(this.responseText);
                if(response_array.Status && response_array.Status == "Success"){
					document.getElementById(detail_id).value  = this.responseText;
					document.getElementById('phone_feedback').innerHTML = 'OTP Sent Successfully';
					document.getElementById('phone_feedback').style.color = 'green';
				} else {
					document.getElementById('phone_feedback').style.color = 'red';
					document.getElementById('phone_feedback').innerHTML = response_array;
				}
            }
        };
        xhttp.open("GET" , "<?php echo base_url(); ?>users/send_OTP?phone="+phone+"&signup=true", true);
        xhttp.send();
      }
    }
	document.getElementById("send_otp3").addEventListener("click", send_otp);
	 </script>
</body>
</html>