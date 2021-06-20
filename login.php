<?php
require('fun.php');
$con = connect();
sessiondelete();
?>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Login Page</title>
        <link rel="shortcut icon" href="favicon.png" type="image/png">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="msapplication-TileColor" content="#dd3d31">
        <meta name="theme-color" content="#dd3d31">
        <link rel="icon" type="image/png" href="image/favicon.png">



    <link id="sb-website-styles-css" rel="stylesheet" href="css/styles.css">
    <link id="sb-website-dynamic-css" rel="stylesheet" href="css/styles-admin.css">


    <style ng-transition="serverApp">[_nghost-sc110]{position:fixed;bottom:0;right:0;margin:.5em;z-index:1200;width:350px}</style>
    <style ng-transition="serverApp">#overlay[_ngcontent-sc112]{display:flex;justify-content:center;position:fixed;top:0;left:0;width:100vw;height:100%;min-height:100vh;z-index:1090;background-color:rgba(0,0,0,.5)}</style><style ng-transition="serverApp">#inputPassword[_ngcontent-sc192]{flex:0.9 0 auto}</style>
    <style ng-transition="serverApp">[_nghost-sc132]{display:contents}</style>
    <style ng-transition="serverApp">.btn-auth[_ngcontent-sc190]{font-size:.75rem;font-weight:500}</style>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    </head>
    <body>


        <div _ngcontent-sc159="" id="layoutAuthentication" class="bg-primary">
        <div _ngcontent-sc159="" id="layoutAuthentication_content">
        <main _ngcontent-sc159="">
        <div _ngcontent-sc192="" class="container">
        <div _ngcontent-sc192="" class="row justify-content-center">
        <sbpro-page-card _ngcontent-sc192="" size="large" _nghost-sc132="">
        <div _ngcontent-sc132="" class="col-xl-10 col-lg-12">
        <div _ngcontent-sc132="" class="card border my-5">
        <div _ngcontent-sc192="" class="card-body p-5 text-center">
        <a href="index.html">
         <img _ngcontent-sc205="" src="image/favicon.png" style="height: 7rem; width: 7rem;"></a>
        <div _ngcontent-sc192="" class="row justify-content-center">
        <div _ngcontent-sc192="" class="col-xl-8 col-lg-9 mb-4">
        <h1 _ngcontent-sc194="">Roadside Assistance</h1>
        <hr>
        <h2 _ngcontent-sc192="">Login Page</h2>
        </div>
        </div>
        <sbpro-brand-login _ngcontent-sc192="" _nghost-sc190="">

        </sbpro-brand-login>
        </div>
        <hr _ngcontent-sc192="" class="my-0">
        <div _ngcontent-sc192="" toastcontainer="">
        </div>
        <div _ngcontent-sc192="" class="card-body p-5">
        <div _ngcontent-sc192="" class="row justify-content-center">
        <div _ngcontent-sc192="" class="col-xl-8 col-lg-9">
        <sbpro-login-form _ngcontent-sc192="" _nghost-sc191="">


        <form _ngcontent-sc191="" novalidate="" class="ng-untouched ng-pristine ng-invalid">
        <center><div style="display:none;background-color:#FF6263;" id="invalid">
          <h3>Invalid User name and Password</h3>
        </div>
      </center>
        <div _ngcontent-sc191="" class="form-group">
        <label _ngcontent-sc191="" for="emailInput" class="text-gray-600 small">Email address</label>
        <input _ngcontent-sc191="" id="emailInput" type="email"  class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" placeholder="Email Address">
        <div _ngcontent-sc191="" class="invalid-feedback">Email required.</div>
        </div>
        <div _ngcontent-sc191="" class="form-group">
        <label _ngcontent-sc191="" for="passwordInput" class="small text-gray-600">Password</label>
        <input _ngcontent-sc191="" id="passwordInput" type="password" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" placeholder="***********">
        <div _ngcontent-sc191="" class="invalid-feedback">Password required.</div>
        </div>
        <div _ngcontent-sc191="" class="form-group">
        <a href="password-reset-request.php">Forgot your password?</a>
        </div>
        <div _ngcontent-sc191="" class="form-group d-flex align-items-center justify-content-between">
        <div _ngcontent-sc191="" class="custom-control custom-control-solid custom-checkbox">
        &nbsp;
        </div>
        <!-- <button _ngcontent-sc191=""  type="submit" class="btn btn-primary" disabled="">Login</button> -->
        <input _ngcontent-sc191="" type="button" name="loginButton" id="loginButton" class="btn btn-primary" value="Login" />
        </div>
        </form>


        </sbpro-login-form>
        </div>
        </div>
        </div>
        <hr _ngcontent-sc192="" class="my-0">
        <div _ngcontent-sc192="" class="card-body px-5 py-4"><div _ngcontent-sc192="" class="small text-center">New user? <a _ngcontent-sc192="" routerlink="../register" href="register.php">Create an account!</a></div></div>
        </div>
        </div>
        </sbpro-page-card>
        </div>
        </div>
        </main>
        </div>
        </div>

        <script>
$(document).ready(function(){
 $('#loginButton').click(function(){
  var username = $('#emailInput').val();
  var password = $('#passwordInput').val();
  if($.trim(username).length > 0 && $.trim(password).length > 0)
  {
   $.ajax({
    url:"Checklogin.php",
    method:"POST",
    data:{username:username, password:password},
    success:function(data)
    {
     if(data)
     {
       if(data == 1)
       {
         window.location.href="admin/";
       }
       else if (data == 2) {
         window.location.href="customer/";
       }
       else if (data == 3) {
         window.location.href="mechanical_shop/";
       }
       else if (data == 4) {
         window.location.href="fuel_station/";
       }
       else if (data == 5) {
         window.location.href="hospital/";
       }

     }
     else
     {
      // var options = {
      //  distance: '40',
      //  direction:'left',
      //  times:'3'
      // }
      // $("#box").effect("shake", options, 800);
      // $('#login').val("Login");
      // $('#error').html("<span class='text-danger'>Invalid username or Password</span>");
      $('#invalid').show();
      $('#invalid').fadeOut(2000);
     }
    }
   });
  }
  else
  {
    $('#invalid').show();
    $('#invalid').fadeOut(2000);
  }
 });
});
</script>
</body>
</html>
