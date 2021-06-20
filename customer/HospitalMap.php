<?php
require('../fun.php');
$con = connect();
if(sessioncheck() == false)
{
header('Location: ../login.php');
}
else
{
  $lid=$_SESSION['loginid'];
  $result=mysqli_query($con,"SELECT * FROM `tbl_hospital` WHERE `Hstatus`=1")or die("Sign in Error");
  // $result=mysqli_query($con,"SELECT * FROM `tbl_mech` WHERE `Mstatus`=1")or die("Sign in Error");

  ?>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Main dash -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">

    <!-- view table student and employee -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
    console.log(<?php echo   $_SESSION['loginid']; ?>);
    </script>
    <script src="..\js\AddVehicleValidation.js"></script>
    <script src="..\js\EditPassvalidation1.js"></script>

    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="../css/dash_style.css">
  
    <link rel="stylesheet" type="text/css" href="../css/viewTbl.css">
    <link rel="stylesheet" type="text/css" href="../css/registraion_form.css">
    <link rel="stylesheet" type="text/css" href="../css/registration_form1.css">
    <title>RSA - Customer</title>

	  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	    <!--fontawesome-->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <style>

        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
  #map {
    height: 100%;
  }

  /* Optional: Makes the sample page fill the window. */
  html,
  body {
    height: 100%;
    margin: 0;
    padding: 0;
  }

  .custom-map-control-button {
    appearance: button;
    background-color: #fff;
    border: 0;
    border-radius: 2px;
    box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
    cursor: pointer;
    margin: 10px;
    padding: 0 0.5em;
    height: 40px;
    font: 400 18px Roboto, Arial, sans-serif;
    overflow: hidden;
  }
  .custom-map-control-button:hover {
    background: #ebebeb;
  }

        </style>
        <style>

        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
      #map {
      height: 100%;
      }
      #map-canvas {
      margin: 0;
      padding: 0;
      height: 400px;
      max-width: none;
      }
      #map-canvas img {
      max-width: none !important;
      }
      .gm-style-iw {
      width: 350px !important;
      top: 15px !important;
      left: 0px !important;
      background-color: #fff;
      box-shadow: 0 1px 6px rgba(178, 178, 178, 0.6);
      border: 1px solid rgba(72, 181, 233, 0.6);
      border-radius: 2px 2px 10px 10px;
      }
      #iw-container {
      margin-bottom: 10px;
      }
      #iw-container .iw-title {
      font-family: 'Open Sans Condensed', sans-serif;
      font-size: 22px;
      font-weight: 400;
      padding: 16px;
      background-color: #48b5e9;
      color: white;
      }
      #iw-container .iw-content {
      font-size: 13px;
      line-height: 18px;
      font-weight: 400;
      margin-right: 1px;
      padding: 15px 5px 20px 15px;
      max-height: 140px;
      }


      .iw-bottom-gradient {
      position: absolute;
      width: 326px;
      height: 25px;
      bottom: 10px;
      right: 18px;
      background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
      background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
      background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
      background: -ms-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
      }
      /* Optional: Makes the sample page fill the window. */
      html,
      body {
      height: 100%;
      margin: 0;
      padding: 0;
      }

      .custom-map-control-button {
      appearance: button;
      background-color: #fff;
      border: 0;
      border-radius: 2px;
      box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
      cursor: pointer;
      margin: 10px;
      padding: 0 0.5em;
      height: 40px;
      font: 400 18px Roboto, Arial, sans-serif;
      overflow: hidden;
      }
      .custom-map-control-button:hover {
      background: #ebebeb;
      }

        </style>


     <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHTWkA5K-6EpKCyTPcdS3ONyCxDBqJ74o"
     type="text/javascript"></script>



     <script type="text/javascript">

     // Multiple markers location, latitude, and longitude

     var myLat,myLong;
     x = navigator.geolocation;
     x.getCurrentPosition(success, failure);
     function success(position)
     {
        myLat = position.coords.latitude;
        myLong = position.coords.longitude;
       var coords = new google.maps.LatLng(myLat,myLong);
       var mapOptions = {

         zoom:17,
         center: coords,
         mapTypeId: google.maps.MapTypeId.ROADMAP,
         disableDefaultUI: true,
         styles: [{
         featureType: 'poi',
         stylers: [{ visibility: 'off' }]
           },
         ]
       }

       var map = new google.maps.Map(document.getElementById("map"), mapOptions);
       var marker = new google.maps.Marker({map:map, position:coords});
       setMarkers(map);
     }

     function failure(){
       alert("Allow Location access in browser Settings");
       document.getElementById("map").innerHTML = "Allow Location access in browser Settings";
       }



     var markers = [
     <?php if(mysqli_num_rows($result) > 0){
       while($row = $result->fetch_assoc()){

         $s=$row['state_id'];
         $s1=mysqli_query($con,"SELECT * FROM `tbl_states` WHERE `state_id`=$s")or die("Sign in Error");
         $s2 = mysqli_fetch_array($s1);
         $sn=$s2['Name'];

         $c=$row['city_id'];
         $c1=mysqli_query($con,"SELECT * FROM `tbl_cities` WHERE `city_id`=$c and `state_id`=$s")or die("Sign in Error");
         $c2 = mysqli_fetch_array($c1);
         $cn=$c2['Name'];


           echo '["'.$row['Hname'].'", '.$row['Hlat'].', '.$row['Hlon'].', "'.$row['Hemail'].'","'.$row['Hphno'].'","'.$row['Hadd'].'","'.$row['Hpin'].'","'.$sn.'","'.$cn.'","'.$row['Hid'].'","'.$row['login_id'].'",],';
       }
     }
     ?>
     ];

     console.log(markers);
     function setMarkers(map) {
     // Adds markers to the map.
     // Marker sizes are expressed as a Size of X,Y where the origin of the image
     // (0,0) is located in the top left of the image.
     // Origins, anchor positions and coordinates of the marker increase in the X
     // direction to the right and in the Y direction down.
     const image = {
     url:
       "../image/hos.png",
       scaledSize: new google.maps.Size(50, 50), // scaled size
       origin: new google.maps.Point(0,0), // origin
       anchor: new google.maps.Point(0, 0) // anchor
     };

     const shape = {
     coords: [1, 1, 1, 20, 18, 20, 18, 1],
     type: "poly",
     };

     var infoWindow = new google.maps.InfoWindow(), marker, i;
     var bounds = new google.maps.LatLngBounds();


     for( i = 0; i < markers.length; i++ ) {
       var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
       // bounds.extend(position);
       marker = new google.maps.Marker({
           position: position,
           map: map,
           icon: image
       });

       google.maps.event.addListener(marker, 'click', (function(marker, i) {
           return function() {
               infoWindow.setContent('<div id="iw-container">' +
                                '<div class="iw-title">'+markers[i][0]+'<input type="button"  data-toggle="modal" data-target="#exampleModal" style="float:right;" value="Make a Request" class="btn btn-success makeRequest" onclick="myFunction('+markers[i][9]+','+markers[i][10]+')" /></div>' +
                                '<div class="iw-content">' +
                                  '<div class="iw-subTitle"><b>Contact Number :</b>'+markers[i][4]+'</div>' +
                                  '<br><div class="iw-subTitle"><b>Address:</b></div>' +
                                  '<p>'+markers[i][5]+'<br>State :'+markers[i][7]+'<br>'+
                                  'District :'+markers[i][8]+'<br>Pin :'+markers[i][6]+'</p>'+
                                '</div>');
               infoWindow.open(map, marker);
           }
       })(marker, i));


     }
     }



     function myFunction(x,y) {
         rid=x; //hospital id
         login=y; //hospital loginid
         // alert(myLong);
         $.ajax({
                 url:"HosSRegiester.php",
                 method:"post",
                 data:{rid:rid,login:login,myLat:myLat,myLong:myLong},
                 success:function(data){
                   window.location.href = 'HospitalRequest.php';
                 }
            });
     }
     </script>

  </head>
  <body>
  <div id="wrapper">
   <div class="overlay"></div>

        <!-- Sidebar -->
    <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
       <div class="simplebar-content" style="padding: 0px;">
				<a class="sidebar-brand" href="#">
          <span class="align-middle">Customer</span>
        </a>

				 <ul class="navbar-nav align-self-stretch">
	<li class="">
		  <a class="nav-link text-left active"  role="button"
		  aria-haspopup="true" aria-expanded="false">
       <i class="flaticon-bar-chart-1"></i>
       <h5>Vehicle Info</h5>
         </a>
		  </li>
        <li class="has-sub">
        <a class="nav-link collapsed text-left" href="#collapseExample1" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i><h6>Mechanical Shop</h6></a>
        <div class="collapse menu mega-dropdown" id="collapseExample1">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box">
										<ul class="list-unstyled m-0">
											<li><a href="MechMap.php">View On Map</a></li>
											<br>
											<li><a href="MechRequest.php">Regiestered Complaint</a></li>
                      <br>
										</ul>
									</div>
								</div>
							</div>
						</div>
		     </div>
		  </div>
		  </li>
		  <li class="has-sub">
		  <a class="nav-link collapsed text-left" href="#collapseExample2" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i><h6>Fuel Station</h6></a>
		  <div class="collapse menu mega-dropdown" id="collapseExample2">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box">
										<ul class="list-unstyled m-0">
											<li><a href="FuelMap.php">View On Map</a></li>
											<br>
											<li><a href="FuelRequest.php">Request Service</a></li>
										    <br>
										</ul>
									</div>
								</div>

							</div>
						</div>
		     </div>
		  </div>
		  </li>


		   <li class="has-sub">
		  <a class="nav-link collapsed text-left" href="#collapseExample3" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i><h6>Hospital</h6></a>
		  <div class="collapse menu mega-dropdown" id="collapseExample3">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box">
										<ul class="list-unstyled m-0">
											<li><a href="HospitalMap.php">View On Map</a></li>
											<br>
											<li><a href="HospitalRequest.php">Request Service</a></li>
                      <br>
										</ul>
									</div>
								</div>

							</div>
						</div>
		     </div>
		  </div>
		  </li>

		   <li class="has-sub">
		  <a class="nav-link collapsed text-left" href="#collapseExample4" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i><h6>Police Station</h6></a>
		  <div class="collapse menu mega-dropdown" id="collapseExample4">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box">
										<ul class="list-unstyled m-0">
											<li><a href="PoliceMap.php">View On Map</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
		     </div>
		  </div>
		  </li>
		   <li class="has-sub">
		  <a class="nav-link collapsed text-left" href="#collapseExample5" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i><h6>Payments</h6></a>
		  <div class="collapse menu mega-dropdown" id="collapseExample5">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box">
										<ul class="list-unstyled m-0">
											<li><a href="payment.php">View Details</a></li>
											<br>
										</ul>
									</div>
								</div>

							</div>
						</div>
		     </div>
		  </div>
		  </li>
		  </ul>
</div>


    </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
        <div id="content">

       <div class="container-fluid p-0 px-lg-0 px-md-0">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light my-navbar">

          <!-- Sidebar Toggle (Topbar) -->
            <div type="button"  id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
               <span></span>
			    <span></span>
				 <span></span>
            </div>



          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - User Information -->

              <li class="nav-item dropdown no-arrow">
                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#EdiPassModal">
                  <i class="fas fa fa-cog fa-sm fa-fw mr-2 text-gray-400"></i>
                  Edit Profile
                </a>
            </li>
             <li class="nav-item dropdown no-arrow">
                  <a class="dropdown-item" href="#"  id="logout" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
            </li>
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Dashboard begin -->
        <div>
         <div id="map"></div>
        </div>

        </div>
       <!-- Dashboard end -->
      </div>
    </div>



<!-- Model classes -->


<!-- logout Modal  -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Select "Logout" below if you are ready to end your current session.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="../logout.php" id="logout">Logout</a>
      </div>
    </div>
  </div>
</div>
<!-- logout Modal  ends -->

 </div>




<!-- edit password Modal  -->
<div class="modal fade" id="EdiPassModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="resetPass.php" method="POST">
      <!-- Modal body -->
      <div class="modal-body">
            <input class="form-control" type="password" name="cpass1" id="cpass1"   placeholder="Enter Current Password" required>
            <span id="msg1"></span>
            <br>
                <input class="form-control" type="password" name="npass1" id="npass1"  disabled oninput="valFPasswod()" placeholder="New Password" required>
            <br>
                <input class="form-control" type="password" name="ncpass1" id="ncpass1"  disabled oninput="valCFPasswod()"  placeholder="Confirm New Password" required>
            <br>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="submit" value="Update" id="Epass" disabled class="btn btn-primary" />
      </div>
      </form>
    </div>
  </div>
</div>
<!-- edit password Modal  ends -->



<script>


//reset password
$(document).ready(function(){
  $("#cpass1").blur(function(){
    var pass1 = $("#cpass1").val();
        $.ajax({
                url:"EditPassword.php",
                method:"post",
                data:{pass:pass1},
                success:function(data){
                if(data==1)
                    {
                    $("#npass1").removeAttr("disabled");
                    $("#ncpass1").removeAttr("disabled");
                    }
                    if(data==0)
                    {
                    $("#npass1").attr("disabled", "disabled");
                    $("#ncpass1").attr("disabled", "disabled");
                    }
                }
           });
  });
});


//Mechanical Delete
$(document).ready(function(){
   $('.deleteVech').click(function() {
      var d_id = $(this).attr("id");
       $.ajax({
               url:"VechDelete.php",
               method:"post",
               data:{d_id:d_id},
               success:function(data){
                 location.reload();
               }
          });
   });
});

//Mechanical Reasign
$(document).ready(function(){
   var r_id;
   $('.reassignVech').click(function() {
      var r_id = $(this).attr("id");
       $.ajax({
               url:"VechReassign.php",
               method:"post",
               data:{r_id:r_id},
               success:function(data){
                  location.reload();
               }
          });
   });
});


$('#bar').click(function(){
	$(this).toggleClass('open');
	$('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled' );

});
</script>
  </body>
</html>
<?php } ?>
