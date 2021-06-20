<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RSA</title>
    <link rel="shortcut icon" href="image/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i|PT+Serif:700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css\style12.css">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</head>
<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
                                <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <title>RSA</title>
                                    <defs>
                                        <radialGradient cy="0%" fx="50%" fy="0%" r="100%" id="logo-gradient">
                                            <stop stop-color="#FFF" offset="0%"/>
                                            <stop stop-color="#FFF" stop-opacity=".24" offset="100%"/>
                                        </radialGradient>
                                    </defs>
                                    <path d="M16 32C7.163 32 0 24.837 0 16S7.163 0 16 0s16 7.163 16 16-7.163 16-16 16zm0-10a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" fill="url(#logo-gradient)" fill-rule="evenodd"/>
                                </svg>
                            </a>
                        </h1>
                    </div>
                    <ul class="header-links list-reset m-0">
                        <li>
                            <a href="login.php">Login</a>
                        </li>
                        <li>
                            <a class="button button-sm button-shadow" href="register.php">Register</a>
                        </li>
                        <li>
                            &nbsp;&nbsp;<a class="button button-sm button-shadow" href="service_provider_registration.php">Service Provider Registration</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <main>
            <section class="hero text-light text-center">
                <div class="container-sm">
                    <div class="hero-inner">
                        <h1 class="hero-title h2-mobile mt-0 is-revealing">Road Side Assistance</h1>
                        <p class="hero-paragraph is-revealing">Roadside Assistance is our way of ensuring you keep riding more and never get stranded in case of a breakdown.</p>
                        <p class="hero-cta is-revealing"><a class="btn btn-warning button-shadow" href="#" data-toggle="modal" data-target="#exampleModal">Report an Accident</a></p>
                        <div class="hero-media">
                          <img src="image\favicon.png" style="height:100%;display:block;margin:auto;border-radius: 25px;">
                        </div>
                    </div>
                </div>
            </section>


            <section class="features section text-center">
                <div class="container">
                    <div class="features-inner section-inner has-top-divider">
                        <h2 class="section-title mt-0">Benefits of RSA</h2>
                        <div class="features-wrap">
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="image\icon1.jpg">
                                    </div>
                                    <h4 class="feature-title h3-mobile">On-site Minor Repairs</h4>
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="image\icon2.jpg">
                                    </div>
                                    <h4 class="feature-title h3-mobile">Battery Drain</h4>
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="image\icon3.jpg">
                                    </div>
                                    <h4 class="feature-title h3-mobile">Flat Tyre Assistance</h4>
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                      <img src="image\icon4.jpg">
                                    </div>
                                    <h4 class="feature-title h3-mobile">Medical Referral</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="features-extended section">
                <div class="container">
                    <div class="features-extended-inner section-inner has-top-divider">
                        <div class="feature-extended">
                            <div class="feature-extended-image is-revealing">
                                <svg width="480" height="360" viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <filter x="-500%" y="-500%" width="1000%" height="1000%" filterUnits="objectBoundingBox" id="dropshadow-1">
                                            <feOffset dy="16" in="SourceAlpha" result="shadowOffsetOuter"/>
                                            <feGaussianBlur stdDeviation="24" in="shadowOffsetOuter" result="shadowBlurOuter"/>
                                            <feColorMatrix values="0 0 0 0 0.12 0 0 0 0 0.17 0 0 0 0 0.21 0 0 0 0.2 0" in="shadowBlurOuter"/>
                                        </filter>
                                    </defs>
                                    <path fill="#F6F8FA" d="M0 220V0h200zM480 140v220H280z"/>
                                    <path fill="#FFF" d="M40 50h400v260H40z" style="mix-blend-mode:multiply;filter:url(#dropshadow-1)"/>
                                    <path fill="#FFF" d="M40 50h400v260H40z"/>
                                    <path fill="#FFF" d="M103 176h80v160h-80zM320 24h88v88h-88z" style="mix-blend-mode:multiply;filter:url(#dropshadow-1)"/>
                                    <path fill="#FFF" d="M103 176h80v160h-80zM320 24h88v88h-88z"/>
                                    <path fill="#FFF" d="M230.97 198l16.971 16.971-16.97 16.97L214 214.972z" style="mix-blend-mode:multiply;filter:url(#dropshadow-1)"/>
                                    <path fill="#02C6A4" d="M230.97 198l16.971 16.971-16.97 16.97L214 214.972z"/>
                                    <path fill="#FFF" d="M203 121H103v100z" style="mix-blend-mode:multiply;filter:url(#dropshadow-1)"/>
                                    <path fill="#84E482" d="M203 121H103v100z"/>
                                    <circle fill="#FFF" cx="288" cy="166" r="32" style="mix-blend-mode:multiply;filter:url(#dropshadow-1)"/>
                                    <circle fill="#0EB3CE" cx="288" cy="166" r="32" style="mix-blend-mode:multiply"/>
                                </svg>
                            </div>
                            <div class="feature-extended-body">
                                <h3 class="mt-0">On-site Minor Repairs</h3>
                                <p>For all minor faults and an immediate repair thereof, a technician will be despatched to the breakdown location to attend to the motorcycle.</p>
                            </div>
                        </div>
                        <div class="feature-extended">
                            <div class="feature-extended-image is-revealing">
                                <svg width="480" height="360" viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <filter x="-500%" y="-500%" width="1000%" height="1000%" filterUnits="objectBoundingBox" id="dropshadow-2">
                                            <feOffset dy="16" in="SourceAlpha" result="shadowOffsetOuter"/>
                                            <feGaussianBlur stdDeviation="24" in="shadowOffsetOuter" result="shadowBlurOuter"/>
                                            <feColorMatrix values="0 0 0 0 0.12 0 0 0 0 0.17 0 0 0 0 0.21 0 0 0 0.2 0" in="shadowBlurOuter"/>
                                        </filter>
                                    </defs>
                                    <path fill="#F6F8FA" d="M480 140v220H280zM0 220V0h200z"/>
                                    <path fill="#FFF" d="M40 50h400v260H40z" style="mix-blend-mode:multiply;filter:url(#dropshadow-2)"/>
                                    <path fill="#FFF" d="M40 50h400v260H40z"/>
                                    <path fill="#FFF" d="M86.225 161l62.226 62.225-62.226 62.225L24 223.225zM296 176h80v160h-80z" style="mix-blend-mode:multiply;filter:url(#dropshadow-2)"/>
                                    <path fill="#FFF" d="M86.225 161l62.226 62.225-62.226 62.225L24 223.225zM296 176h80v160h-80z"/>
                                    <path fill="#FFF" d="M245.092 218l9.378 22.092-22.093 9.378L223 227.378z" style="mix-blend-mode:multiply;filter:url(#dropshadow-2)"/>
                                    <path fill="#02C6A4" d="M245.092 218l9.378 22.092-22.093 9.378L223 227.378z"/>
                                    <path fill="#FFF" d="M270 96H170v100z" style="mix-blend-mode:multiply;filter:url(#dropshadow-2)"/>
                                    <path fill="#84E482" d="M270 96H170v100z"/>
                                    <circle fill="#FFF" cx="296" cy="177" r="32" style="mix-blend-mode:multiply;filter:url(#dropshadow-2)"/>
                                    <circle fill="#0EB3CE" cx="296" cy="177" r="32" style="mix-blend-mode:multiply"/>
                                </svg>
                            </div>
                            <div class="feature-extended-body">
                                <h3 class="mt-0">Battery Drain</h3>
                                <p>In case of a weak or dead battery, a technician shall be despatched who will attempt to jumpstart the motorcycle. In case a battery change is required, the technician shall fix a new battery. </p>
                            </div>
                        </div>
                        <div class="feature-extended">
                            <div class="feature-extended-image is-revealing">
                                <svg width="480" height="360" viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <filter x="-500%" y="-500%" width="1000%" height="1000%" filterUnits="objectBoundingBox" id="dropshadow-3">
                                            <feOffset dy="16" in="SourceAlpha" result="shadowOffsetOuter"/>
                                            <feGaussianBlur stdDeviation="24" in="shadowOffsetOuter" result="shadowBlurOuter"/>
                                            <feColorMatrix values="0 0 0 0 0.12 0 0 0 0 0.17 0 0 0 0 0.21 0 0 0 0.2 0" in="shadowBlurOuter"/>
                                        </filter>
                                    </defs>
                                    <path fill="#F6F8FA" d="M480 140v220H280zM0 220V0h200z"/>
                                    <path fill="#FFF" d="M40 50h400v260H40z" style="mix-blend-mode:multiply;filter:url(#dropshadow-3)"/>
                                    <path fill="#FFF" d="M40 50h400v260H40z"/>
                                    <path fill="#FFF" d="M72 248h88v88H72zM180 24h80v160h-80z" style="mix-blend-mode:multiply;filter:url(#dropshadow-3)"/>
                                    <path fill="#FFF" d="M72 248h88v88H72zM180 24h80v160h-80z"/>
                                    <path fill="#FFF" d="M277.664 261.919l-18.113 15.745-15.746-18.113 18.113-15.745z" style="mix-blend-mode:multiply;filter:url(#dropshadow-3)"/>
                                    <path fill="#02C6A4" d="M277.664 261.919l-18.113 15.745-15.746-18.113 18.113-15.745z"/>
                                    <path fill="#FFF" d="M315 129H215v100z" style="mix-blend-mode:multiply;filter:url(#dropshadow-3)"/>
                                    <path fill="#84E482" d="M315 129H215v100z"/>
                                    <circle fill="#FFF" cx="318" cy="219" r="32" style="mix-blend-mode:multiply;filter:url(#dropshadow-3)"/>
                                    <circle fill="#0EB3CE" cx="318" cy="219" r="32" style="mix-blend-mode:multiply"/>
                                </svg>
                            </div>
                            <div class="feature-extended-body">
                                <h3 class="mt-0">Medical Referral</h3>
                                <p>In case you require medical assistance while on a ride, We will refer you to the nearest medical center.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <form method="post">
	<input type="textbox" name="str" required/>
	<input type="submit" name="submit" value="Search"/>
</form>

<?php
require('fun.php');
$con = connect();
if(isset($_POST['submit'])){
  $str=$_POST['str'];
	$sql="SELECT * FROM `tbl_hospital` WHERE `Hstatus`=1 AND `Hname` like '%$str%'";

  // $sql="select id, title, details,'news' from news where title
	// like '%$str%' or details like '%$str%';


	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){
		while($row=mysqli_fetch_assoc($res)){
			echo "<a href='details.php?id=".$row['Hid']."&t=".$row['Hname']."'>".$row['Hname']."</a>";
			echo "<br/>";
		}
	}else{
		echo "No data found";
	}
}
?>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <script src="js/main.min1.js"></script>
</body>
</html>
