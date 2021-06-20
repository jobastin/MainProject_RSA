<?php
require('fun.php');
$con = connect();

?>

<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Reset Password</title>
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

    </head>
    <body>


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
        <h1 _ngcontent-sc194="">Roadside Assistance</h1>
        <hr>
        <h2 _ngcontent-sc205="">Reset Your Password</h2>
        </div>
        </div>
        </div>

        <?php
        date_default_timezone_set('Asia/Kolkata');
        if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) && ($_GET["action"] == "reset") && !isset($_POST["action"])) {
          $key = $_GET["key"];
          $email = $_GET["email"];
          $curDate = date("Y-m-d H:i:s");
          $query = mysqli_query($con, "SELECT * FROM `password_reset_temp` WHERE `key`='" . $key . "' and `email`='" . $email . "';");
          $row = mysqli_num_rows($query);
          if ($row == "") {
            $error .= '<h2><center>Check the link/Invalid Link</center></h2>';
          } else {
            $row = mysqli_fetch_assoc($query);
            $expDate = $row['expDate'];
            if ($expDate >= $curDate) {
            ?>



        <div _ngcontent-sc205="" class="card-body p-5" style="visibility:visible">
        <div _ngcontent-sc205="" class="row justify-content-center">
        <div _ngcontent-sc205="" class="col-xl-8 col-lg-9">
        <center><div id="res"></div></center>
        <form _ngcontent-sc205="" method="post" action="" id="update" name="update" class="ng-untouched ng-pristine ng-invalid">
        <div _ngcontent-sc205="" class="form-group">
        <label _ngcontent-sc205="" for="pass1" class="text-gray-600 small">Enter New Password</label>
        <input _ngcontent-sc191="" id="pass1" name="pass1" type="password" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" placeholder="***********">
        </div>
        <div _ngcontent-sc205="" class="form-group">
        <label _ngcontent-sc205="" for="pass2" class="text-gray-600 small">Re-Enter New Password</label>
        <input _ngcontent-sc191="" id="pass2" name="pass2"  type="password" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" placeholder="***********">
        </div>
        <div _ngcontent-sc205="" class="text-right">
        <input _ngcontent-sc205="" type="submit" id="reset" name="reset" value="Reset Password"  class="btn btn-primary"/>
        </div>
        </form>

        <?php
                            } else {
                                $error .= "<h2>Link Expired</h2>";
                            }
                        }

                        if ($error != "") {
                            echo "<div class='error'>" . $error . "</div>";
                        }
                    }




                    if(isset($_POST['reset'])) {



                        $error = "";
                        $pass1 = mysqli_real_escape_string($con,$_POST["pass1"]);
                        $pass2 = mysqli_real_escape_string($con, $_POST["pass2"]);
                        $curDate = date("Y-m-d H:i:s");
                        if ($pass1 != $pass2) {
                            $error .= "<h3 style='visibility:hidden'><center>Password do not match, both password should be same.</center></h3>";
                            ?>
                            <script>
                            document.getElementById("res").innerHTML = "<h3>Password do not match, both password should be same.</h3>";
                            </script>
                            <?php
                        }
                        if ($error != "") {
                            echo $error;
                        } else {

                            $pass1 = md5($pass1);
                            mysqli_query($con, "UPDATE `tbl_login` SET `password`='" . $pass1 . "' WHERE `email`='" . $email . "'");

                            mysqli_query($con, "DELETE FROM `password_reset_temp` WHERE `email` = '$email'");
                            ?>
                            <script>
                            document.getElementById("update").style.visibility = "hidden";
                            </script>
                            <?php
                            echo '<div class="error"><h3>Your password has been updated successfully.<a href="login.php">Click to Login</a></h3>';
                        }
                    }
                    ?>




        <!-- <div _ngcontent-sc205="" class="card-body px-5 py-4">
        <div _ngcontent-sc205="" class="small text-center">New user?
        <a _ngcontent-sc205="" href="register.html">Create an account!</a>
        </div>
        </div> -->
      </div>
      </div>
      </div>

        </div>
        </div>
        </div>
        </div>
        </main>
        </div>
        </div>

</body>
</html>
