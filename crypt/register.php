<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" charset="text/html;utf-8"/>
    <title>Login to ICONSMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#1a7922">

    <link rel="apple-touch-icon" sizes="180x180" href="../static/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../static/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../static/img/favicon-16x16.png">
    <link rel="manifest" href="../static/img/site.html">

<meta name="msapplication-TileColor" content="#1a7922">
<meta name="msapplication-TileImage" content="../static/img/bg.html">
<meta itemprop="name" content="ICONSMS- Buy Airtime and Data for all Network. Make payment for DSTV, GOTV, PHCN other services">
    <meta itemprop="description" content="Buy Cheap Internet Data Plan and Airtime Recharge for Airtel, 9mobile, GLO, MTN, Pay DSTV, GOTV, PHCN.">
    <meta itemprop="image" content="../static/img/bg.html">
  <link rel="stylesheet" href="../static/ogbam/w3.css">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="../static/img/bg.html">
    <meta name="twitter:title" content="ICONSMS- Buy Airtime and Data for all Network. Make payment for DSTV, GOTV, PHCN other services">
    <meta name="twitter:description" content="Buy Cheap Internet Data Plan and Airtime Recharge for Airtel, 9mobile, GLO, MTN, Pay DSTV, GOTV, PHCN.">
    <meta name="twitter:image:src" content="../static/img/bg.html">

    <!-- Open Graph data -->
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="ICONSMS- Buy Airtime and Data for all Network. Make payment for DSTV, GOTV, PHCN other services">
    <meta property="og:image" content="../static/img/bg.html">
    <meta property="og:description" content="Buy Cheap Internet Data Plan and Airtime Recharge for Airtel, 9mobile, GLO, MTN, Pay DSTV, GOTV, PHCN."/>
    <meta property="og:site_name" content="ICONSMS"/>
    <meta property="og:url" content="https://www.ICONSMS.com.ng/">
    <meta property="og:type" content="website">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../static/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../static/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../static/assets/libs/css/style.css">
    <link rel="stylesheet" href="../static/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #1a7922;


    }
    </style>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/donarilinks/static/dashboard/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	
	<script>
	toastr.error('Error','Error Title')

</script>
	<!-- CSS Files -->
	<link rel="stylesheet" href="../donarilinks/static/dashboard/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../donarilinks/static/dashboard/assets/css/atlantis.css">
	

	
</head>
<body class="login" >
	<div class="wrapper wrapper-login">
	
		<div class="container container-login animated fadeIn">
		   

			<center> <a href="../index.html" class="logo">
				<img src="../donarilinks/static/styling/images/logo/logo_2.png" style="width:150px;"> 
		   </a></center>
			<h3 class="text-center">Sign Up </h3>
			 <form method="POST" >
                    <input type="hidden" name="csrfmiddlewaretoken" value="iQZ4k4Wl1VE0b0rEJeZ5y5V4KizaBr4LfsliCNH8yJqCJCDoWQPq5quCunoBXtWF">
			 <div class="form-group">
                        
                        


    
    <div id="div_id_FullName" class="form-group">
        
            <label for="id_FullName" class=" requiredField">
                FullName<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <input type="text" name="FullName" maxlength="200" class="textinput textInput form-control" required id="id_FullName">
                    


    




    



                </div>
            
        
    </div>
    



            
                        


    
    <div id="div_id_username" class="form-group">
        
            <label for="id_username" class=" requiredField">
                Username<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <input type="text" name="username" autofocus class="textinput textInput form-control" required id="id_username">
                    


    




    



                </div>
            
        
    </div>
    



            
                        


    
    <div id="div_id_email" class="form-group">
        
            <label for="id_email" class=" requiredField">
                Email<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <input type="email" name="email" maxlength="254" class="emailinput form-control" required id="id_email">
                    


    




    



                </div>
            
        
    </div>
    



            
                        


    
    <div id="div_id_Phone" class="form-group">
        
            <label for="id_Phone" class=" requiredField">
                Phone<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <input type="number" name="Phone" class="form-control textinput textInput form-control" autocomplete="off" pattern="[0-9]+" title="Enter numbers Only " maxlength="11" minlength="11" required id="id_Phone">
                    


    




    



                </div>
            
        
    </div>
    



            
                        


    
    <div id="div_id_Address" class="form-group">
        
            <label for="id_Address" class=" requiredField">
                Address<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <input type="text" name="Address" maxlength="500" class="textinput textInput form-control" required id="id_Address">
                    


    




    



                </div>
            
        
    </div>
    



            
                        


    
    <div id="div_id_referer_username" class="form-group">
        
            <label for="id_referer_username" class="">
                Referral username [optional]
            </label>
        

        

        

        
            
                <div class="">
                    <input type="text" name="referer_username" class="textinput textInput form-control" id="id_referer_username">
                    


    




    
    
        <small id="hint_id_referer_username" class="form-text text-muted">Leave blank if no referral</small>
    




                </div>
            
        
    </div>
    



            
                        


    
    <div id="div_id_password1" class="form-group">
        
            <label for="id_password1" class=" requiredField">
                Password<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <input type="password" name="password1" class="textinput textInput form-control" required id="id_password1">
                    


    




    
    
        <small id="hint_id_password1" class="form-text text-muted">min_lenght-8 mix characters [i.e musa1234] </small>
    




                </div>
            
        
    </div>
    



            
                        


    
    <div id="div_id_password2" class="form-group">
        
            <label for="id_password2" class=" requiredField">
                Confirm Password<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <input type="password" name="password2" class="textinput textInput form-control" required id="id_password2">
                    


    




    
    
        <small id="hint_id_password2" class="form-text text-muted">Enter same password as before</small>
    




                </div>
            
        
    </div>
    



               
            <div class="row form-sub m-0">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="agree" id="agree" required>
						<label class="custom-control-label" for="agree"><a href="../terms/index.html">I Agree the terms and conditions.</a></label>
					</div>
				</div>
			
<div class="form-group form-action-d-flex mb-3">
				
					
					<button type="submit" class="btn btn-primary  mt-3 mt-sm-0 fw-bold" onClick="this.form.submit(); this.disabled=true; this.innerText ='Authenticating.....'; ">Sign Up</button>
				</div>
			
			
				<div class="login-account">
					<span class="msg">Already a member?</span>
					<a href="../login/index.html" id="show-signup" class="link">Sign In</a>
				</div>
			</div>
			</form>
		</div>

	
	</div>
	<script src="../donarilinks/static/dashboard/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../donarilinks/static/dashboard/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../donarilinks/static/dashboard/assets/js/core/popper.min.js"></script>
	<script src="../donarilinks/static/dashboard/assets/js/core/bootstrap.min.js"></script>
	<script src="../donarilinks/static/dashboard/assets/js/atlantis.min.js"></script>
	<script src="../../cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	
	<script>
        // by hameed
        const queryString = window.location.search;
        console.log(queryString);

        const urlParams = new URLSearchParams(queryString);
        const referal = urlParams.get('referal')
        console.log('referal = ', referal)
        if (referal != null) {
            $('#id_referer_username').val(referal).attr('readonly', 'readonly')
        }
    </script>

</body>

<!-- Mirrored from Donarilinkssubng.com/signup/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Feb 2022 04:12:16 GMT -->
</html>