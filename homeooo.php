<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home - Gottaget </title>
	<link rel="stylesheet" href="<?= base_url() ?>/assets/homeooo_css/homeooo.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/homeooo_css/header_css.css">

	<!-- GOOGLE FONTS  -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
<?php
//print_r($products[0]['id']);
// if(!empty($_SESSION['logged_user'])){
//     echo '<p> Hi Id '.$_SESSION['logged_user'].'</p><br>';
//     echo '<a href = "'.base_url().'logout"> Logout </a>';
// } else {
//     echo '<p> You are not Logged in. Please Login First</p>';
//     echo '<a href = "'.base_url().'login"> Login </a>';
// }
$rand_products = array_rand($products, count($products));
$n1 = 0;
?>
<div id="wrapper">
	<header  class="header py-0 fixed-top">
		<nav class="navbar navbar-expand-lg navbar-light py-0 shadow-sm bg-light">
			<div class="container px-2">
				<a class="navbar-brand" href="./">
					<div id="logo" class="text-red">
                            <img src="<?= base_url() ?>/assets/homeooo_css/imgs/gottaget_logo.png" alt="logo" class="img-fluid">
                    </div>
				</a>
				
				<a class="navbar-brand" href="./">
					<div id="comunity-image1">
                            <img src="<?= base_url() ?>/assets/homeooo_css/imgs/comunity.png" alt="communityimage" class="img-fluid">
                    </div>
				</a>
				<!--<button class=" rounded-pill p-3 navbar-toggler" style="font-size: 1.125rem; border:none;" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			    --><button class=" rounded-pill p-3 navbar-toggler" type="button" style="font-size: 1.125rem; border:none;" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02">
				<i class="bi bi-list" style="color: #11098f; font-size: 40px;"></i>
				<!--<span class="navbar-toggler-icon" style="color: #11098f;"></span>-->
				</button>
				
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02" >
					<ul class="navbar-nav align-items-center ml-auto  mt-lg-0 pb-5 pb-lg-0">
						<li class="nav-item active">
							<a href="<?= base_url() ?>" class="nav-link active">
							<i class="bi bi-house-door-fill"></i>
							HOME
							</a>
						</li>
						
						<li class="nav-item ">
							<a href="#E_-_STORES_cb" class="nav-link">
							<img src="<?= base_url() ?>/assets/homeooo_css/imgs/store.png"></img>
							E-STORES
							</a>
						</li>
						
						<li class="nav-item ">
						<a href = "<?= base_url('ShoppingCartPage') ?>" class="nav-link">
						<div  id="Group_888" class = "cart_icon" le = "display:none;">
                        <div  id= "d1" style = "position: absolute; left: 16px; top: -16px; height : 18px; width : 18px; background-color: rgba(17,52,88,1); border-radius: 50%; text-align : center ">
                        <span style = "color : white" class = "cart_qty"> <?php if(!empty($_SESSION['logged_user'])){
                        if(!empty($_COOKIE['cart'.$_SESSION['logged_user']])){
                        echo count(json_decode($_COOKIE['cart'.$_SESSION['logged_user']]));
                    
                        } else{
									echo "<script type='text/javascript'>
									       document.getElementById('d1').style.display='none';
										   </script>";																							 
								}}else{
									echo "<script type='text/javascript'>
									       document.getElementById('d1').style.display='none';
										   </script>";									
								}?>
						</span>
                        </div>
				        </div>
							<i class="bi bi-cart-fill"></i>
							CART
							</a>
						</li>
						
						
						<?php if (!empty($_SESSION['logged_user'])) { ?>
						<li class="nav-item dropdown" style="text-align: center;">
                         <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
						 <i class="bi bi-person-fill"></i>
						 ACCOUNT
						 </a>
                          <ul class="dropdown-menu">
                           <li><a href="<?= base_url('myaccount'); ?>" class="dropdown-item">My Profile </a></li>
                           <li><a href="<?= base_url('home/my_orders') ?>" class="dropdown-item">My Orders</a></li>
                           <li><a href="<?= base_url('home/fav_stores') ?>" class="dropdown-item">Favourite Stores</a></li>
						   <li><a href="<?= base_url('logout'); ?>" class="dropdown-item">Logout</a></li>
                          </ul>
                        </li>
						
						
						<li class="nav-item ">
							<a href="<?= base_url() ?>" class="nav-link ">
							 <i class="bi bi-chat-fill"></i>
							CHAT
							</a>
						</li>
						<?php } else { ?>
						  <li class="nav-item py-2 px-2" id="sign_up">
							<a href="<?= base_url('login') ?>" class="nav-link">						
							SIGN UP/LOG IN
							</a>
						</li>
						<?php } ?>
				    </ul>
				</div>				
			</div>
		</nav>
	</header>
	
	
	<main class="bg-white">
        <div class="container-fluid mt3 ">
		    <div class="container pt-5">
			    <div class="d-flex align-items-end field-wh justify-content-end mb-5">
			        <input class="bg-transparent br-none fl-wh" type="text" value="" id="loc_id" placeholder="Location" readonly ></input>
					<img  id="comunity-image" src="<?= base_url() ?>/assets/homeooo_css/imgs/comunity.png" alt="communityimage" style="height: 100%;"/>
				</div>
				<div class="d-flex align-items-end field-wh field-wh1 justify-content-end mb-5">
				    <div class="flex-column home-input">
				    <div class="text-red"> Find Anything </div>
					 <input  onkeyup="search_products(this.value, event.keyCode)" class="bg-transparent br-rad" name="product" placeholder="chips, nilgiris" id="product"/>
					<!--<img  src="<?= base_url() ?>/assets/homeooo_css/imgs/comunity.png" alt="communityimage" style="height: 100%;"/>-->
					</div>
				</div>
				<div class="d-flex align-items-end field-wh field-wh1 justify-content-end mb-5">
				    <div class="flex-column home-input">
				    <div class="text-red"> Search for a Store/Restaurant</div>
					 <input  onkeyup="search_store(this.value, event.keyCode, $('#loc_id').val())" class="bg-transparent br-rad" id="store" name="store" placeholder="Nilgiris, Aayurvedic, MedPlus"/>
					<!--<img  src="<?= base_url() ?>/assets/homeooo_css/imgs/comunity.png" alt="communityimage" style="height: 100%;"/>-->
					</div>
				</div>
				<div class="d-flex align-items-end field-wh field-wh1 justify-content-end mb-5">
				    <div class="flex-column home-input">
				    <div class="text-red">Search for Services</div>
					<input type="text" id="service" name="service" class="bg-transparent br-rad" placeholder="Plumber, Electrician, Designer, Architect" onkeyup="search_service(this.value, event.keyCode)"/>
					<!--<img  src="<?= base_url() ?>/assets/homeooo_css/imgs/comunity.png" alt="communityimage" style="height: 100%;"/>-->
					</div>
				</div>
				<div class="d-flex align-items-end field-wh2 justify-content-end mb-5 pb-5">
				    <a href="<?= base_url() ?>" class="col-xl-6">
				    <div class="browser_tr">
			        Browse through Restaurants
					</div>
					</a>
				</div>
			</div>
	    </div>
		
		<div class="d-flex flex-column justify-content-center align-items-center mt-3" style="max-height:587px;">
		    <div class="col-xl-6 e-store" >  
			    E - STORES
			</div> 
			
			<div class="col-xl-6 d-flex justify-content-center align-items-center" >  
            <div class="search-sub-start">
			    <i class="bi bi-search search-sub1"></i>
			    <input id="search" class="search-sub2" name="search" placeholder="Search for items or stores"
                 onkeyup="search_product(this.value,'Group_959','home')"/>
			</div>
            </div>
			
			<div class="container mt-5" style="overflow:auto;">
			
			   <div id="Group_959" class="row">
			    <div class="hvrbox1 col-md-3">
                <?php if ($n1 < count($rand_products)) { ?>
                 <a id="img-25_ca" class="hvrbox" href="<?= base_url($products[$rand_products[$n1]]['url']) ?>">
                <img class="hvrbox-layer_bottom sub-search-image"
                     src="<?= base_url('attachments/shop_images/' . $products[$rand_products[$n1]]['image']) ?>">
                <div class="hvrbox-layer_top hvrbox-layer_scale">
                    <div class="hvrbox-text">
                        <span><?= $products[$rand_products[$n1]]['title'] ?></span><br>
                        <br><span>RS. <?= $products[$rand_products[$n1]]['price'] ?></span>
                    </div>
                </div>
                </a>
                <div id="Group_844" class="image-product" onclick="cart(<?= $products[$rand_products[$n1]]['id'] ?>)">
				   <img src="<?= base_url() ?>/assets/homeooo_css/imgs/pl.png" alt="logo" >
                </div>
                <?php $n1 = $n1 + 1;
                 } ?>
				 </div>
			   
			   <div class="hvrbox1 col-md-3">
			   <?php if ($n1 < count($rand_products)) { ?>
               <a id="img-25_cb" class="hvrbox"href="<?= base_url($products[$rand_products[$n1]]['url']) ?>">
                <img class="hvrbox-layer_bottom sub-search-image"
                     src="<?= base_url('attachments/shop_images/' . $products[$rand_products[$n1]]['image']) ?>">
                <div class="hvrbox-layer_top hvrbox-layer_scale">
                    <div class="hvrbox-text">
                        <span><?= $products[$rand_products[$n1]]['title'] ?></span><br>
                        <br><span>RS. <?= $products[$rand_products[$n1]]['price'] ?></span>
                    </div>
                </div>
               </a>
                <div id="Group_849" class="image-product" onclick="cart(<?= $products[$rand_products[$n1]]['id'] ?>)">      
                     <img src="<?= base_url() ?>/assets/homeooo_css/imgs/pl.png" alt="logo" >
                </div>
               <?php $n1 = $n1 + 1;
               } ?>
			   </div>

              <div class="hvrbox1 col-md-3">
              <?php if ($n1 < count($rand_products)) { ?>
              <a id="img-25_cc" class="hvrbox" href="<?= base_url($products[$rand_products[$n1]]['url']) ?>">
                <img class="hvrbox-layer_bottom sub-search-image"
                     src="<?= base_url('attachments/shop_images/' . $products[$rand_products[$n1]]['image']) ?>">
                <div class="hvrbox-layer_top hvrbox-layer_scale">
                    <div class="hvrbox-text">
                        <span><?= $products[$rand_products[$n1]]['title'] ?></span><br>
                        <br><span>RS. <?= $products[$rand_products[$n1]]['price'] ?></span>
                    </div>
                </div>
              </a>
              <div id="Group_850" class="image-product" onclick="cart(<?= $products[$rand_products[$n1]]['id'] ?>)">
			    <img src="<?= base_url() ?>/assets/homeooo_css/imgs/pl.png" alt="logo" >
			  </div>
              <?php $n1 = $n1 + 1;
             } ?>	
             </div>	
			 
			 <div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>
			<div class="hvrbox1 col-md-3">
					<img style="width:100%" id="Mask_Group_2" src="<?= base_url('template/imgs/Mask_Group_2.png') ?>">
			</div>


			 
			 </div>
			</div>
            
			
			<div class="my-5" id="view-more">  
			<a href="<?= base_url('products?search_in_title=') ?>">
			    View more
			</a>
			</div>  
			
		</div>
		
		
		<div class="d-flex flex-column justify-content-center align-items-center mt-5" style="max-height:387px;">
		    <div class="col-xl-6" id="gottaget_sub">  
			    GOTTA GET
			</div>	
        
			 <div class="container d-flex flex-row bh_3">
        <a href="<?= base_url() ?>" class="bh_3_sub">
        <div id="Group_428_be" class="groceries_app_med">
                <img id="" src="<?= base_url('template/imgs/') ?>groceries.jpg">
        </div>
         </a>
        <a href="<?= base_url() ?>" class="bh_3_sub">
        <div id="Group_429_cfm" class="groceries_app_med">          
                <img id="" src="<?= base_url('template/imgs/') ?>appliances.jpg">
        </div>
         </a>
        <a href="<?= base_url() ?>" class="bh_3_sub">
        <div id="Group_828_cn" class="groceries_app_med">
            <img id="" src="<?= base_url('template/imgs/') ?>medicines.jpg">
		</div>
        </a>
        </div>
</div>		
</main>

    <footer class="bg-light mt-5 py-4 text-center ">
        Copyright &copy; 2020 Gottaget. All rights reserved.
    </footer>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
var x = document.getElementById("demo");

// function getLocation() {
    $( document ).ready(function() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
});
function showPosition(position) {

  var lat = position.coords.latitude;
                var long = position.coords.longitude;
                $.ajax({
                    type:'Post',
                    url:'<?=base_url();?>Home/geoloaction',
                    data:'latitude='+lat+'&longitude='+long,
                    success:function(address){
                        console.log("address is"+address);
                        if(address){
                            // x.innerHTML = address;
                            var str = address;
                           $("#loc_id").val(str.substring(0, 39) + "...");
                        }else{
                         
                            $("#Location_baq").html('Not Available');
                           $("#loc_id").html('Not Available');
                           $("#Location").html('Not Available');
                        }
                    }
                });


}
</script>
<script>
 
    function search_service(val, code) {
        // var location= "Lucknow";
    $.get("https://ipinfo.io/json", function (response) {
   var location= 'response.city';
}, "jsonp");
        if (code === 13) {
            window.location.replace("<?= base_url('home/services_show?search=') ?>" + val+"&location="+location);
            return;
        }
    }

    function search_store(val, code) { 
    //   var location= "Lucknow";
    $.get("https://ipinfo.io/json", function (response) {
   var location= 'response.city';
}, "jsonp");
        if (code === 13) {
            window.location.replace("<?= base_url('shop?search=') ?>" + val+"&location="+location);
            return;
        }
    }



    function search_products(val, code) {
        // var location= "Lucknow";
    $.get("https://ipinfo.io/json", function (response) {
   var location= 'response.city';
}, "jsonp");
        if (code === 13) {
            window.location.replace("<?= base_url('product_view?search=') ?>" + val+"&location="+location);
            return;
        }
    }



    // const navExpand = [].slice.call(document.querySelectorAll(".nav-expand"));
    // const backLink = `<li class="nav-item">
    //         <a class="nav-link nav-back-link" href="javascript:;">
    //             Back
    //         </a>
    //     </li>`;

    // navExpand.forEach((item) => {
    //     item
    //         .querySelector(".nav-expand-content")
    //         .insertAdjacentHTML("afterbegin", backLink);
    //     item
    //         .querySelector(".nav-link")
    //         .addEventListener("click", () => item.classList.add("active"));
    //     item
    //         .querySelector(".nav-back-link")
    //         .addEventListener("click", () => item.classList.remove("active"));
    // });

    // // ---------------------------------------
    // // not-so-important stuff starts here

    // const ham = document.getElementById("ham");
    // ham.addEventListener("click", function () {
    //     document.body.classList.toggle("nav-is-toggled");
    // });

    // let menu = document.getElementById('Mobile_-_360x640__5');
    // menu.removeChild(document.getElementById('Group_833'))


    // When the user scrolls the page, execute myFunction
    window.onscroll = function () {
        myFunction()
    };

    // Get the header
    var header = document.getElementById("myHeader");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        console.log(sticky);
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
<script type="text/javascript">
    $(function () {
        $('#Group_908_c').hover(function () {
            $('#Browse_through_Restaurants_ca').css("color", "rgb(255, 255, 255)");
            // $('#b').css('background-color', 'yellow');
        }, function () {
            // on mouseout, reset the background colour
            $('#Browse_through_Restaurants_ca').css("color", "rgb(222, 54, 92)");
        });
        $('#Group_910').hover(function () {
            $('#View_more_c').css("color", "rgb(255, 255, 255)");
            // $('#b').css('background-color', 'yellow');
        }, function () {
            // on mouseout, reset the background colour
            $('#View_more_c').css("color", "rgb(222, 54, 92)");
        });
    });

   
</script>
<!-- <script type="text/javascript">
           function getlocation() {
                if (navigator.geolocation) { 
                    if(document.getElementById('loc_id').innerHTML == '') {
                        navigator.geolocation.getCurrentPosition(visitorLocation);
                    } 
                } else { 
                    $('#loc_id').html('This browser does not support Geolocation Service.');
                }
            }
            function visitorLocation(position) {
                var lat = position.coords.latitude;
                var long = position.coords.longitude;  alert();
                $.ajax({
                    type:'Post',
                    url:'<?=base_url();?>Home/geoloaction',
                    data:'latitude='+lat+'&longitude='+long,
                    success:function(address){ alert(address)
                        if(address){
                           $("#loc_id").html(address);
                        }else{
                            $("#loc_id").html('Not Available');
                        }
                    }
                });
            }
        </script> -->
</body>
</html>


