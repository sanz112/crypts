<?php 
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="content-type" charset="text/html;utf-8"/>
    <title>Login to Crypto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#1a7922">

    <link rel="apple-touch-icon" sizes="180x180" href="../static/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../static/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../static/img/favicon-16x16.png">
    <link rel="manifest" href="../static/img/site.html">

<meta name="msapplication-TileColor" content="#1a7922">
<meta name="msapplication-TileImage" content="../static/img/bg.html">
<meta itemprop="name" content="Crypto- Buy Airtime and Data for all Network. Make payment for DSTV, GOTV, PHCN other services">
    <meta itemprop="description" content="Buy Cheap Internet Data Plan and Airtime Recharge for Airtel, 9mobile, GLO, MTN, Pay DSTV, GOTV, PHCN.">
    <meta itemprop="image" content="../static/img/bg.html">
  <link rel="stylesheet" href="../static/ogbam/w3.css">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="../static/img/bg.html">
    <meta name="twitter:title" content="Crypto- Buy Airtime and Data for all Network. Make payment for DSTV, GOTV, PHCN other services">
    <meta name="twitter:description" content="Buy Cheap Internet Data Plan and Airtime Recharge for Airtel, 9mobile, GLO, MTN, Pay DSTV, GOTV, PHCN.">
    <meta name="twitter:image:src" content="../static/img/bg.html">

    <!-- Open Graph data -->
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="Crypto- Buy Airtime and Data for all Network. Make payment for DSTV, GOTV, PHCN other services">
    <meta property="og:image" content="../static/img/bg.html">
    <meta property="og:description" content="Buy Cheap Internet Data Plan and Airtime Recharge for Airtel, 9mobile, GLO, MTN, Pay DSTV, GOTV, PHCN."/>
    <meta property="og:site_name" content="Crypto"/>
    <meta property="og:url" content="https://www.Crypto.com.ng/">
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
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">



        <div class="card ">
            

            <div class="card-header text-center">
                <a href="../index.html" style="font-size: 30px; font-weight: bolder;">Crypto</a>
            </div>
                <div class="card-body">

             
                



                <form method="POST" action="log.php" class="form-signin">
            
                    <!-- <input type="hidden" name="csrfmiddlewaretoken" value="bfeGzUe5pshSDJI7tw4URRIFi8ZL0mH55zcaaumnCusXPyQEiOYKt1vRXXRgm7mm"> -->
                    <div class="form-group">
                        
                        


    
    <div id="div_id_username" class="form-group">
        
            <label for="uid" class=" requiredField">
                Username/Phone Number/Email<span class="asteriskField">*</span>
            </label>
     
                <div class="">
                    <input type="text" name="uid" autofocus autocapitalize="none" autocomplete="username" maxlength="150" class="textinput textInput form-control" required id="uid">
                    


    




    



                </div>
            
        
    </div>
    



            
                        


    
    <div id="div_id_password" class="form-group">
        
            <label for="id_password" class=" requiredField">
                Password<span class="asteriskField">*</span>
            </label>
        

        

        

        
            
                <div class="">
                    <input type="password" name="pwd" autocomplete="current-password" class="textinput textInput form-control" required id="id_password">
                    


    




    



                </div>
            
        
    </div>
    
    <!-- <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text fa fa-user" id="user_type"> User Type</span>
  </div>
  <select class="form-control" id="user_type" name="userType">
  <option disabled value="-1">Select User Type </option>
  <option id="adm" disabled value="Admin">Admin </option>
  <option id="usr" selected value="User">User </option>
  </select>
  </div> -->


               
                <div class="form-label-group">
      <button style="background: #f1a947;" class="btn btn-lg btn-block" name="login-submit"  style="background:linear-gradient(45deg, #1a7922, #1a7921); color: white;" onClick="this.form.submit(); this.innerText ='Authenticating.....'; " type="submit">Sign in</button>
      </div>
      </div>
      <!-- <button type="submit" name="login-submit" class="btn btn-lg btn-block">Sign in</button> -->
                </form>
            </div>
            <div class="card-footer bg-white p-0 ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="register" class="footer-link">Create An Account</a></div>
                <!-- <div class="card-footer-item card-footer-item-bordered">
                    <a href="password_reset.php" class="footer-link">Forgot Password</a>
                </div> -->
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../static/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../static/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>


<!-- Mirrored from www.Crypto.com/login/?next=/EditProfile/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Oct 2020 13:02:26 GMT -->
</html>