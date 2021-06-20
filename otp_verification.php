<?php
require('fun.php');
if(sessioncheckotp() == true)
{
?>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>OTP verification</title>
        <link rel="shortcut icon" href="image/favicon.png" type="image/png">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="msapplication-TileColor" content="#dd3d31">
        <meta name="theme-color" content="#dd3d31">

    <link id="sb-website-styles-css" rel="stylesheet" href="css/styles.css">
    <link id="sb-website-dynamic-css" rel="stylesheet" href="css/styles-admin.css">
    <link rel="canonical" href="password-reset-request.html">

    <style ng-transition="serverApp">[_nghost-sc110]{position:fixed;bottom:0;right:0;margin:.5em;z-index:1200;width:350px}</style>
    <style ng-transition="serverApp">
        #overlay[_ngcontent-sc112]{display:flex;justify-content:center;position:fixed;top:0;left:0;width:100vw;height:100%;min-height:100vh;z-index:1090;background-color:rgba(0,0,0,.5)}</style><style ng-transition="serverApp">[_nghost-sc132]{display:contents}
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

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
    console.log("<?php echo $_SESSION['exp']; ?>");
  </script>
    </head>
    <body>

      <div id="pageloader">
         <img src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif" alt="processing..." />
      </div>


        <div _ngcontent-sc159="" id="layoutAuthentication" class="bg-primary">
        <div _ngcontent-sc159="" id="layoutAuthentication_content">
        <main _ngcontent-sc159="">
        <div _ngcontent-sc205="" class="container">
        <div _ngcontent-sc205="" class="row justify-content-center">
        <div _ngcontent-sc132="" class="col-xl-10 col-lg-12">
        <div _ngcontent-sc132="" class="card border my-5">
        <div _ngcontent-sc205="" class="card-body p-5 text-center">
        <a href="#">
        <img _ngcontent-sc205="" src="image/favicon.png" style="height: 7rem; width: 7rem;"></a>
        <div _ngcontent-sc205="" class="row justify-content-center">
        <div _ngcontent-sc205="" class="col-xl-8 col-lg-9">
        <hr>
        <h2 _ngcontent-sc205="">OTP Verification</h2>
        <p _ngcontent-sc205="" class="mb-0">We've sent a verification code to your regiestered <br>email-<b><?php
        $email=$_SESSION['email'];
        echo  $email; ?></b></p>
        </div>
        </div>
        </div>
        <hr _ngcontent-sc205="" class="my-0">
        <div _ngcontent-sc205="" class="card-body p-5">
        <div _ngcontent-sc205="" class="row justify-content-center">
        <div _ngcontent-sc205="" class="col-xl-8 col-lg-9">


        <form _ngcontent-sc205=""  class="ng-untouched ng-pristine ng-invalid">
        <div _ngcontent-sc205="" class="form-group">
        <input _ngcontent-sc205="" oninput="checkotp();" placeholder="Enter Verification Code" id="otpinput" name="otpinput" type="text" onkeypress="return /[0-9]/i.test(event.key)" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" />
        <div _ngcontent-sc205="" id="otpmessage"></b></div>
        </div>
        <div _ngcontent-sc205=""  id="div1" class="text-right">
        <!-- <input type="submit" id="btn1" _ngcontent-sc205=""   class="btn btn-primary otpButton" /> -->
        <table align="right">
        <tr>
            <td><p id="otp" style="visibility:hidden;"><b>Time left :</b></p>
            <td><p id="days" style="display:none;"></p></td>
            <td><p id="hours" style="display:none;"></p></td>
            <td><p id="mins"></p></td>
            <td><p id="secs"></p></td>
            <td><b><p id="end" style="visibility:hidden;"><a href="#" id="resendOtp">Resend OTP ??</a></p></b></td>
          </tr>
        </table>
        </div>
        </form>

        </div>
        </div>
        </div>
        <hr _ngcontent-sc205="" class="my-0">
        <div _ngcontent-sc194="" class="card-body px-5 py-4"><div _ngcontent-sc194="" class="small text-center">Have an account? <a _ngcontent-sc194="" routerlink="../login" href="login.php">Sign in!</a>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </main>
        </div>
        </div>

<script>

// function checkotp()
// {
// var t=document.getElementsByName('otpinput')[0];
// if(t.value <= 0)
// {
// document.getElementById("otpinput").style.borderColor = "red";
// document.getElementById("otpmessage").innerHTML = "Enter a Valid OTP";
// }
// else {
//     document.getElementById("otpinput").style.borderColor = "#eef2f8";
//     document.getElementById("otpmessage").innerHTML = "";
// }
// }




function checkotp()
{
jQuery.ajax({
url: "checkOtp.php",
data:'tp='+$("#otpinput").val(),
type: "POST",
success:function(data){
$("#otpmessage").html(data);

},
error:function (){
}
});
}




///timer


    var countDownDate = new Date("<?php echo $_SESSION['exp']; ?>").getTime();
    // Run myfunc every second
    var myfunc = setInterval(function() {
    var now = new Date().getTime();
    var timeleft = countDownDate - now;

    // Calculating the days, hours, minutes and seconds left
    var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

    // Result is output to the specific element
    document.getElementById("days").innerHTML = days + "d "
    document.getElementById("hours").innerHTML = hours + "h "
    document.getElementById("mins").innerHTML = "0"+minutes + ": "
    document.getElementById("secs").innerHTML = seconds + "s "
    document.getElementById("otp").style.visibility = "visible";
    // Display the message when countdown is over
    if (timeleft < 0) {
        clearInterval(myfunc);
        document.getElementById("days").innerHTML = ""
        document.getElementById("otp").innerHTML = ""
        document.getElementById("hours").innerHTML = ""
        document.getElementById("mins").innerHTML = ""
        document.getElementById("secs").innerHTML = ""
        //document.getElementById("end").innerHTML = "";
        document.getElementById("end").style.visibility = "visible";
    }
    }, 1000);


//resend otp function

$(document).ready(function() {
  var remail="<?php echo $_SESSION['email']; ?>";
  var rlogin=<?php echo $_SESSION['loginid']; ?>;
    $("#resendOtp").click(function() {
      $("#pageloader").fadeIn();
      jQuery.ajax({
      url: "resendOtp.php",
      data:{re:remail,rl:rlogin},
      type: "POST",
      success:function(data){
      $("#otpmessage").html(data);

      },
      error:function (){
      }
      });
    });
});

</script>
</body>
</html>
<?php
}
else {
  ?>
  <script>
  window.location.href ="login.php";
  </script>
  <?php
}
?>
