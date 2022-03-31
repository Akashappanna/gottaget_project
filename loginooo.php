<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>shop - Gottaget </title>		
	<link rel="stylesheet" href="<?= base_url() ?>/assets/homeooo_css/loginooo_css.css">

	<!-- GOOGLE FONTS  -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
    <div id="wrapper">
	    <main class="bg-white">
		   <div class="container my-5 px-5 py-2 gt-section">
			<div class="row mt-5">
			   <div class="col-md-6 df">
			        <div >
					 <img id="India-01" src="<?= base_url('template/imgs/India-01_gm.png') ?>">
				    </div>
			   </div>
			   
			   <div class="col-md-6">
			        <div class="d-flex flex-column align-items-center pr-3 gt-section1">
					    <div id="Gotta_Get_gl" class="d-flex pl-4 mb-3 gt-section2 ">
						  Gotta Get
					    </div>
                        
						<div id="Welcome_to_our_community_fz" class="d-flex pl-4 mb-3 gt-section2 ">
						  Welcome to our community!
					    </div>
						
						<div  class="d-flex pl-4 gt-section2" style = "font-style: italic;color: red;">
						  <span id = "phone_feedback"></span>
					    </div>
	
						
						
						 <form id = 'IDForm'  method = 'POST' action = '<?= base_url('users/g2g_login') ?>' class="d-flex flex-column pl-4 mb-3 align-items-end gt-section2">
                          <div class="d-flex flex-row align-items-center gt-section2 " id="phone_input_box">
						  <input type="text" class="pl-3 py-3 mb-3" id="phone_input" name="phone"  value = "<?php if(!empty($_SESSION['phone'])) echo $_SESSION['phone']; ?>" placeholder="Phone Number" onkeypress="return check_num(event)" onkeyup="valid_phone(this.value)"  maxlength = 10 /> 
						  <button id = "send_otp3" class="mr-3" >Send OTP</button>
						  </div>
                         
						 <div class="d-flex flex-row mb-3 align-items-start gt-section2" style="height: 106px;">
						  <div id="OTP_f">
                                <span>OTP</span>
                          </div>
						  
						  <div class="d-flex flex-column">
						  <div id="Group_1264_f" class="d-flex flex-row mx-2">
                          <input type="text" class="otp_box mx-2" id="otp1" name="otp1" onkeypress="return check_num(event)" onkeyup = "change_focus(this.id,'otp2')" maxlength = 1 />
                          <input type="text" class="otp_box mx-2" id="otp2" name="otp2"	onkeypress="return check_num(event)" onkeyup = "change_focus(this.id,'otp3')" maxlength = 1 />
                          <input type="text" class="otp_box mx-2" id="otp3" name="otp3"	onkeypress="return check_num(event)" onkeyup = "change_focus(this.id,'otp4')" maxlength = 1 />
                          <input type="text" class="otp_box mx-2" id="otp4" name="otp4"	onkeypress="return check_num(event)" onkeyup = "change_focus(this.id,'otp5')" maxlength = 1 />
			              <input type="text" class="otp_box mx-2" id="otp5" name="otp5" onkeypress="return check_num(event)" onkeyup = "change_focus(this.id,'otp6')" maxlength = 1/>
          	              <input type="text" class="otp_box mx-2" id="otp6" name="otp6" onkeypress="return check_num(event)"  maxlength = 1/>
							<input type = "hidden"  id = "response_detail3" name = "detail" value = '<?php if(!empty($_SESSION['detail'])) echo($_SESSION['detail']); ?>'>
                          </div>  					      						
						<div id="Resend_ga" class="d-flex pl-4 mt-3 ">						  
                        <span class="p-2">Resend</span>
					    </div>
						</div>	
						</div>
						
						<div class="d-flex pl-4 gt-section2 ">
						  <div style = 'color : red; font-size:14px '>
                          <?php 
                         if (!empty($_SESSION['login_failed']))
                          echo $_SESSION['login_failed']; 
			             if (!empty($_SESSION['otp_status']))
				         echo $_SESSION['otp_status'];
                          ?>
                          </div>
	                      <?php 
	                    if (!empty($_SESSION['user_created'])){
		               echo "<div style = 'color : green '>" .$_SESSION['user_created']."</div>";
	                      }
		
	                     ?>
					    </div>
						
						<div class="d-flex mb-3 gt-section3">
						  <a href="#" onclick = 'submit_form("IDForm")' class="px-4 py-2" id="Log_in">          
                            <div id="Log_in_ge">
                            <span>Log in</span>                            
							</div>
                          </a>
					    </div>
						 
						 </form>
												
					</div>
					
					<div class="d-flex  align-items-center mt-4 justify-content-between">
					   <div class="col-md-6 cb-su1 p-2">
					       <a href="<?= base_url('buisness/register') ?>">
								<div id="Create_a_Business_Account">
									<span>Create a Business Account</span>
								</div>
							</a>
                        </div>
						
                        <div class="col-md-4 cb-su2 p-2">
					     	<a href="<?= base_url('register') ?>">
		                      <div id="Sign_Up_gh">
			                    <span>Sign Up</span>
		                      </div>
                         	</a>
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
	  if (id=="send_otp3"){
      document.getElementById(id).style.display = 'none';
	  }
      phone = document.getElementById(phone_id).value;
      var response_array;
      if(phone.length == 10){
		document.getElementById('phone_feedback').innerHTML = 'OTP Sent Successfully';
		document.getElementById('phone_feedback').style.color = 'green';		
         var xhttp = new XMLHttpRequest();
         xhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
		 		response_array = JSON.parse(this.responseText);
                 if(response_array.Status && response_array.Status == "Success"){
		 			document.getElementById(detail_id).value  = this.responseText;
		 			if (id=="send_otp3"){
		 			document.getElementById('phone_feedback').innerHTML = 'OTP Sent Successfully';
		 			document.getElementById('phone_feedback').style.color = 'green';
		 			}else{
		 				document.getElementById('phone_feedback').innerHTML = 'Resent OTP';
		 			    document.getElementById('phone_feedback').style.color = 'green';
		 			}
		 		} else {
		 			document.getElementById('phone_feedback').style.color = 'red';
		 			document.getElementById('phone_feedback').innerHTML = response_array;
		 		}
             }
         };
         xhttp.open("GET" , "<?php echo base_url(); ?>users/send_OTP?phone="+phone+"&login=true", true);
         xhttp.send();
      }
    }

	document.getElementById("send_otp3").addEventListener("click", send_otp);
	 </script>
</body>
</html>