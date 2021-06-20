<?php
require('fun.php');
sessiondeleteotp();
sessiondeletetime();
$con = connect();
?>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Register</title>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <link rel="shortcut icon" href="image/favicon.png" type="image/png">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="msapplication-TileColor" content="#dd3d31">
        <meta name="theme-color" content="#dd3d31">


    <link id="sb-website-styles-css" rel="stylesheet" href="css/styles.css">
    <link id="sb-website-dynamic-css" rel="stylesheet" href="css/styles-admin.css">


    <script src="js/validation1.js"></script>


    <style ng-transition="serverApp">[_nghost-sc110]{position:fixed;bottom:0;right:0;margin:.5em;z-index:1200;width:350px}</style><style ng-transition="serverApp">#overlay[_ngcontent-sc112]{display:flex;justify-content:center;position:fixed;top:0;left:0;width:100vw;height:100%;min-height:100vh;z-index:1090;background-color:rgba(0,0,0,.5)}
    </style>
    <style ng-transition="serverApp">[_nghost-sc132]{display:contents}</style>
    <style ng-transition="serverApp">.btn-auth[_ngcontent-sc190]{font-size:.75rem;font-weight:500}
    </style>
    <style>
    #pageloader
    {
    background: rgba( 255, 255, 255, 0.8 );
    display: none;
    height: 100%;
    position: fixed;
    width: 100%;
    z-index: 9999;
    }

    #pageloader img
    {
    left: 50%;
    margin-left: -32px;
    margin-top: -32px;
    position: absolute;
    top: 50%;
    }
    </style>
    </head>
    <script>

      // form empty validation
    $(document).ready(function(){
      $('#userreg').click(function (e) {
                  var isValid = true;
                  $('#username,#phno,#useremail,#dob,#gender,#add,#pin,#pass,#CPass,#Mstate,#Mdist').each(function () {
                      if ($.trim($(this).val()) == '') {
                          isValid = false;
                          $(this).css({
                              "border": "1px solid red",
                              // "background": "#FFCECE"
                          });
                      }
                      else {
                          $(this).css({
                              "border": "",
                              "background": ""
                          });
                      }
                  });
                  if (isValid == false)
                  {
                      e.preventDefault();
                    }
                    else {
                      button();
                    }
              });
    });
    </script>
    <body>

      <!-- Loader -->
      <div id="pageloader">
         <img src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif" alt="processing..." />
      </div>


        <div _ngcontent-sc159="" id="layoutAuthentication" class="bg-primary">
        <div _ngcontent-sc159="" id="layoutAuthentication_content">
        <main _ngcontent-sc159=""><div _ngcontent-sc194="" class="container">
        <div _ngcontent-sc194="" class="row justify-content-center">
        <sbpro-page-card _ngcontent-sc194="" size="large" _nghost-sc132="">
        <div _ngcontent-sc132="" class="col-xl-10 col-lg-12">
        <div _ngcontent-sc132="" class="card border my-5">
        <div _ngcontent-sc194="" class="card-body p-5 text-center">
        <a href="index.html">
        <img _ngcontent-sc205="" src="image/favicon.png" style="height: 7rem; width: 7rem;"></a>

        <div _ngcontent-sc194="" class="row justify-content-center"><div _ngcontent-sc194="" class="col-lg-8 mb-4">
        <h1 _ngcontent-sc194="">Roadside Assistance</h1>

        <h2 _ngcontent-sc194="">Sign up</h2>
<!--        <p _ngcontent-sc194="" class="mb-0">Join our community of designers and developers and manage your purchases, favorite themes and snippets, comments, and more!</p>-->
        </div>
        </div>
        </div>
        <hr _ngcontent-sc194="" class="my-0">
        <div _ngcontent-sc194="" class="card-body p-5">
        <div _ngcontent-sc194="" class="text-center small text-muted mb-4">
        </div>

        <!-- Registration form -->
        <sbpro-register-form _ngcontent-sc194="" _nghost-sc193="">
        <form _ngcontent-sc193=""  class="ng-untouched ng-pristine ng-invalid" id="form1" action="php/userReg.php" method="post">
          <!-- novalidate=""  to remove requires stuff-->
        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="username" class="text-gray-600 small">Name</label>
        <input _ngcontent-sc193="" id="username" name="username" onblur="valUsername();" type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" placeholder="Enter Your name" onkeypress="return /[a-zA-Z ]/i.test(event.key)" required />
        <div _ngcontent-sc193="" id="vuname" class="vuname"></div>
        </div>
        </div>
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="phno" class="text-gray-600 small">Phone Number</label>
        <input _ngcontent-sc193="" id="phno" onblur="valuserMobile()" name="phno" type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[0-9]/i.test(event.key)" placeholder="Enter Your Mobile Number" required />
        <div _ngcontent-sc193="" class="invalid-feedback">Last name required.</div>
        </div>
        </div>
        </div>
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="useremail" class="text-gray-600 small">Email address</label>
        <input _ngcontent-sc193="" onblur="valUserEmail();" id="useremail" name="useremail" type="email" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" placeholder="example@something.com" required />
        <div _ngcontent-sc193="" id="vEmail"></div>
        </div>
        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="gender" class="text-gray-600 small">Gender</label>
        <select style="height:auto;" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" name="gender" id="gender" required />
        <option value="">---Select--</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </select>
        <div _ngcontent-sc193="" class="valid-feedback">Looks good!</div>
        <div _ngcontent-sc193="" class="invalid-feedback">First name required.</div>
        </div>
        </div>
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="dob" class="text-gray-600 small">Date Of Birth</label>
        <input _ngcontent-sc193="" onblur="valuserDate();" id="dob" name="dob" type="date" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" placeholder="YYYY-MM-DD" required />
        <div _ngcontent-sc193="" class="valid-feedback">Looks good!</div>
        <div _ngcontent-sc193="" class="invalid-feedback">Last name required.</div>
        </div>
        </div>
        </div>
        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="add" class="text-gray-600 small">Address</label>
        <textarea _ngcontent-sc193="" onblur="valuseradd();" name="add" id="add" data-cy="add" type="text" formcontrolname="firstName" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" value="" ></textarea>
        <div _ngcontent-sc193="" class="valid-feedback">Looks good!</div>
        <div _ngcontent-sc193="" class="invalid-feedback">First name required.</div>
        </div>
        </div>
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="pin" class="text-gray-600 small">Pincode</label>
        <input _ngcontent-sc193="" onblur="valuserPin();" name="pin" id="pin" type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" placeholder="Eg : 673571" onkeypress="return /[0-9]/i.test(event.key)" required />
        <div _ngcontent-sc193="" class="valid-feedback">Looks good!</div>
        <div _ngcontent-sc193="" class="invalid-feedback">Last name required.</div>
        </div>
        </div>
        </div>


        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Mstate" class="text-gray-600 small">State</label>
        <select name="Mstate" id="Mstate" style="padding:.75rem 1.125rem;" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" name="Mstate" required />
        <option value="">--Select--</option>

        <?php
        $res=mysqli_query($con,"SELECT `state_id`,`Name` FROM `tbl_states` WHERE `status`=1 ORDER BY `Name` ASC")or die("Sign in Error");
        while($s = mysqli_fetch_array($res))
        {
        ?>
        <option value="<?php echo $s['state_id']; ?>" ><?php echo $s['Name']; ?></option>
        <?php
      }
      ?>
        </select>
        </div>
        </div>
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Mdist" class="text-gray-600 small">District</label>
        <select name="Mdist" id="Mdist"  style="padding:.75rem 1.125rem;" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" id="Mdist" required />
        <option value="">--Select state first--</option>
        </select>
        </div>
        </div>
        </div>





        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="pass" class="small text-muted">Password</label>
        <input _ngcontent-sc193="" onblur="valuserPasswod();" id="pass" name="pass" type="password" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" placeholder="********" required />
        <div _ngcontent-sc193="" id="vpass"></div>
        </div>
        </div>
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="CPass" class="text-gray-600 small">Confirm Password</label>
        <input _ngcontent-sc193="" onblur="valuserCPasswod();" id="CPass" name="CPass" type="password" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" placeholder="********" required />
        <div _ngcontent-sc193="" class="valid-feedback">Looks good!</div>
        <div _ngcontent-sc193="" class="invalid-feedback">Confirm Password required.</div>
        </div>
        </div>
        </div>
        <div _ngcontent-sc193="" class="form-group d-flex align-items-center justify-content-between">
        <!-- <div _ngcontent-sc193="" class="custom-control custom-control-solid custom-checkbox">
        <input _ngcontent-sc193="" id="termsAndConditionsInput" data-cy="termsAndConditionsInput" type="checkbox" formcontrolname="termsAndConditions" class="custom-control-input small ng-untouched ng-pristine ng-invalid">
        <label _ngcontent-sc193="" for="termsAndConditionsInput" class="custom-control-label">I accept the terms &amp; conditions</label>
        <div _ngcontent-sc193="" class="invalid-feedback">You must accept the terms &amp; conditions.</div>
        </div> -->
        <input _ngcontent-sc193="" type="submit" id='userreg' value="Register" class="btn btn-primary" />
        </div>
        </form>
        </sbpro-register-form>
        <!-- Registration form ends -->


        </div>
        <div _ngcontent-sc194="" class="card-body px-5 py-4"><div _ngcontent-sc194="" class="small text-center">Have an account? <a _ngcontent-sc194="" routerlink="../login" href="login.php">Sign in!</a>
        </div>
        </div>
        </div>
        </div>
        </sbpro-page-card>
        </div>
        </div>
        </main>
        </div>
        </div>

    <script>
    function valUserEmail()
    {
      jQuery.ajax({
        url: "checkUserEmail.php",
        data:'uemail='+$("#useremail").val(),
        type: "POST",
        success:function(data){
          $("#vEmail").html(data);
        },
        error:function (){

        }
      });
  }

  //for district selection
  $(document).ready(function(){
    $('#Mstate').on('change', function(){
     var countryID = $(this).val();
     if(countryID){
         $.ajax({
             type:'post',
             url:"district.php",
             data:'st_id='+countryID,
             success:function(html){
                 $('#Mdist').html(html);
             }
         });
     }else{
         $('#Mdist').html('<option value="">Select state first</option>');
     }
  });
  });


// loader on submitting form
  $(document).ready(function(){
    $("#form1").on("submit", function(){
      $("#pageloader").fadeIn();
    });
  });


    </script>
    <!-- <script src="js/runtime-es2015.a7312101c2b80a696194.js" crossorigin="anonymous" type="module"></script>
    <script src="js/runtime-es5.a7312101c2b80a696194.js" crossorigin="anonymous" nomodule="" defer=""></script>
    <script src="js/polyfills-es5.3e6b557be049eae06693.js" crossorigin="anonymous" nomodule="" defer=""></script>
    <script src="js/polyfills-es2015.9509cf6cf3660a1b8556.js" crossorigin="anonymous" type="module"></script>
    <script src="js/scripts.7db5a8a1df1d2146c813.js" crossorigin="anonymous" defer=""></script>
    <script src="js/vendor-es2015.39ea11c848a845592c4c.js" crossorigin="anonymous" type="module"></script>
    <script src=".js/vendor-es5.39ea11c848a845592c4c.js" crossorigin="anonymous" nomodule="" defer=""></script>
    <script src="js/main-es2015.418775d648a9ed214bc4.js" crossorigin="anonymous" type="module"></script>
    <script src="js/main-es5.418775d648a9ed214bc4.js" crossorigin="anonymous" nomodule="" defer=""></script> -->

</body>
</html>
