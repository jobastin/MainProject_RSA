<?php
require('../fun.php');
$con = connect();
if(sessioncheck() == false)
{
header('Location: ../login.php');
}
else
{
  ?>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="image\favicon.png" type="../image/png">

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

    <script src="..\js\policeValidation.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="../css/dash_style.css">
    <link rel="stylesheet" type="text/css" href="../css/calendar.css">
    <link rel="stylesheet" type="text/css" href="../css/viewTbl.css">
    <link rel="stylesheet" type="text/css" href="../css/registraion_form.css">
    <link rel="stylesheet" type="text/css" href="../css/registration_form1.css">
    <title>RSA - Admin</title>


	     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	    <!--fontawesome-->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

		 <link rel="stylesheet" href="font/font/flaticon.css">

     <style>
     #myMap {
    height: 350px;
    width: 1150px;
    }
     </style>

     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHTWkA5K-6EpKCyTPcdS3ONyCxDBqJ74o">
     </script>


     <script type="text/javascript">
     var map;
     var marker;
     var myLatlng = new google.maps.LatLng(11.255465261761628,75.79432069140624);
     var geocoder = new google.maps.Geocoder();
     var infowindow = new google.maps.InfoWindow();
     function initialize(){
     var mapOptions = {
     zoom: 18,
     center: myLatlng,
     mapTypeId: google.maps.MapTypeId.ROADMAP
     };

     map = new google.maps.Map(document.getElementById("myMap"), mapOptions);

     marker = new google.maps.Marker({
     map: map,
     position: myLatlng,
     draggable: true
     });

     geocoder.geocode({'latLng': myLatlng }, function(results, status) {
     if (status == google.maps.GeocoderStatus.OK) {
     if (results[0]) {
     $('#Mlat,#Mlon').show();
     $('#address').val(results[0].formatted_address);
     $('#Mlat').val(marker.getPosition().lat());
     $('#Mlon').val(marker.getPosition().lng());
     infowindow.setContent(results[0].formatted_address);
     infowindow.open(map, marker);
     }
     }
     });

     google.maps.event.addListener(marker, 'dragend', function() {

     geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
     if (status == google.maps.GeocoderStatus.OK) {
     if (results[0]) {
     $('#address').val(results[0].formatted_address);
     $('#Mlat').val(marker.getPosition().lat());
     $('#Mlon').val(marker.getPosition().lng());
     infowindow.setContent(results[0].formatted_address);
     infowindow.open(map, marker);
     }
     }
     });
     });

     }
     google.maps.event.addDomListener(window, 'load', initialize);

     $(document).ready(function(){
       $('div.map1').mouseleave(function(){
           var m1 = document.getElementsByName('Mlon')[0];
           var m2 = document.getElementsByName('Mlat')[0];
           if(m1.value==75.79432069140624 && m2.value==11.255465261761628)
           {
             c1[5]=0;
             c1[3]=0;
             button1();
             document.getElementById("myMap").style.border= "1px solid red";
           }
           else {
             c1[5]=1;
             c1[3]=1;
             button1();
             document.getElementById("myMap").style.borderColor = "#eef2f8";
           }
       });
});

     </script>

  </head>
  <body>
  <div id="wrapper">
   <div class="overlay"></div>

        <!-- Sidebar -->
    <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
       <div class="simplebar-content" style="padding: 0px;">
				<a class="sidebar-brand" href="#">
          <span class="align-middle">Admin Panel</span>
        </a>

				 <ul class="navbar-nav align-self-stretch">
	<li class="">
		  <a class="nav-link text-left active"  role="button"
		  aria-haspopup="true" aria-expanded="false" href="index.php">
       <i class="flaticon-bar-chart-1"></i><h5>Dashboard</h5>
         </a>
		  </li>
        <li class="has-sub">
        <a class="nav-link collapsed text-left" href="#collapseExample1" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i>Mechanical Shop</a>
        <div class="collapse menu mega-dropdown" id="collapseExample1">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box">
										<ul class="list-unstyled m-0">
											<li><a href="Mechview.php">View Registered</a></li>
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
        <i class="flaticon-user"></i>Fuel Station</a>
		  <div class="collapse menu mega-dropdown" id="collapseExample2">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box">
										<ul class="list-unstyled m-0">
											<li><a href="Fuelview.php">View Registered</a></li>
											<br>
											<!-- <li><a href="#">View Employee</a></li>
                                            <br>
										    <li><a href="#">Resigned / Deleted employee</a></li>
										    <br> -->
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
        <i class="flaticon-user"></i>Hospital</a>
		  <div class="collapse menu mega-dropdown" id="collapseExample3">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box">
										<ul class="list-unstyled m-0">
											<li><a href="Hospitalview.php">View Registered</a></li>
											<br>
											<!-- <li><a href="#">View </a></li>
                                            <br>
										    <li><a href="#">Deleted List</a></li> -->
										</ul>
									</div>
								</div>

							</div>
						</div>
		     </div>
		  </div>
		  </li>

      <li class="has-sub">
      <a class="nav-link collapsed text-left" href="#collapseExample13" role="button" data-toggle="collapse" >
       <i class="flaticon-user"></i>Customer</a>
      <div class="collapse menu mega-dropdown" id="collapseExample13">
       <div class="dropmenu" aria-labelledby="navbarDropdown">
      <div class="container-fluid ">
             <div class="row">
               <div class="col-lg-12 px-2">
                 <div class="submenu-box">
                   <ul class="list-unstyled m-0">
                     <li><a href="Customerview.php">View Registered</a></li>
                     <br>
                     <!-- <li><a href="#">View </a></li>
                                           <br>
                       <li><a href="#">Deleted List</a></li> -->
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
        <i class="flaticon-user"></i>Police Station</a>
		  <div class="collapse menu mega-dropdown" id="collapseExample4">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box">
										<ul class="list-unstyled m-0">
											<li><a href="AddPolice.php">Add Station</a></li>
                      <br>
                      <li><a href="PoliceView.php">View / Edit</a></li>
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
      		  <a class="nav-link collapsed text-left" href="#collapseExample6" role="button" data-toggle="collapse" >
              <i class="flaticon-user"></i>Services</a>
      		  <div class="collapse menu mega-dropdown" id="collapseExample6">
              <div class="dropmenu" aria-labelledby="navbarDropdown">
      		<div class="container-fluid ">
      							<div class="row">
      								<div class="col-lg-12 px-2">
      									<div class="submenu-box">
      										<ul class="list-unstyled m-0">
      											<li><a href="#">View Services</a></li>
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
        <i class="flaticon-user"></i>Payments</a>
		  <div class="collapse menu mega-dropdown" id="collapseExample5">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box">
										<ul class="list-unstyled m-0">
											<li><a href="#">View All Payments</a></li>
											<br>
										    <li><a href="#">Generate Bill</a></li>
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

        <!-- Student Registration -->
         <div class="row" id="stu_register" style="margin:50px;">
         <div class="col-md-12 mt-4">
 		<div id="container" class="effect aside-float aside-bright mainnav-lg">
         <div class="boxed">
             <div id="content-container">
                 <div id="page-content">
                     <div class="panel">
                         <form action="PoliceReg.php" method="post">
                             <div class="table-responsive">
                             <table class="table" style="font-size:15px">
                                                <h2>Add Police Station</h2>
                                                 <tr>
                                                     <th valign="top">Place</th>
                                                     <td><input type="text" id="Pplace" name="Pplace" onblur="valPplace();" onkeypress="return /[a-zA-Z ]/i.test(event.key)" class="form-control" placeholder="Enter Town / City name" /></td>
                                                     <td width="50px"></td>
                                                     <th valign="top">Address</th>
                                                     <td><textarea name="Padd" id="Padd" onblur="valPadd();" type="text"  class="form-control" placeholder="Enter your Address" ></textarea></td>
                                                 </tr>
                                                 <tr>
                                                     <th valign="top">State</th>
                                                     <td>
                                                       <select name="Mstate" id="Mstate" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" name="Mstate" required />
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
                                                     </td><td width="50px"></td>
                                                     <th valign="top">District</th>
                                                     <td><select name="Mdist" id="Mdist" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" id="Mdist" required />
                                                     <option value="">--Select state first--</option>
                                                     </select>
                                                     </td>
                                                     <td></td>
                                                 </tr>
                                                 <tr>
                                                     <th valign="top">Pincode</th>
                                                     <td><input type="text" onblur="valPpin();" id="Ppin" name="Ppin" onkeypress="return /[0-9]/i.test(event.key)" class="form-control" placeholder="Enter Pincode" /></td>
                                                     <td width="50px"></td>
                                                     <th valign="top">Contact Number</th>
                                                     <td><input type="text" onblur="valPphno();" id="Pphno" name="Pphno" onkeypress="return /[0-9]/i.test(event.key)" class="form-control" placeholder="Enter Mobile Number" /></td>
                                                     <td></td>
                                                 </tr>
                                                 <tr>
                                                  <td colspan="6">
                                                    <label _ngcontent-sc193="" for="myMap" class="text-gray-600 small">Select Your location in Map</label>
                                                    <div id="myMap" class="map1"></div>
                                                  </td>

                                                 </tr>
                                                 <tr style="display:none">
                                                     <th valign="top">Latitude</th>
                                                     <!-- <td><input type="text" onblur="valPlat();" class="form-control" onkeypress="return /[0-9.-]/i.test(event.key)" id="Plat" name="Plat" placeholder="Enter Latitude Information from Google Map" /></td> -->
                                                     <td><input _ngcontent-sc193="" id="Mlat" name="Mlat" type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[0-9.-]/i.test(event.key)" placeholder="Enter Latitude Information from Google Map" required /></td>
                                                     <td width="50px"></td>
                                                     <th valign="top">Longitude</th>
                                                     <!-- <td><input type="text" onblur="valPlon();" class="form-control" id="Plon" name="Plon" onkeypress="return /[0-9.-]/i.test(event.key)" placeholder="Enter Longitude Information from Google Map" /></td> -->
                                                     <td><input _ngcontent-sc193="" id="Mlon" name="Mlon" type="text"  class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[0-9.-]/i.test(event.key)" placeholder="Enter Longitude Information from Google Map" required /></td>
                                                     <td></td>
                                                 </tr>
                                                 <tr>
                                                <th>&nbsp;</th>
                                                <td valign="top">
                                                    <input type="submit" disabled="true" id="Psubmit" value="Add Station" class="btn btn-primary" />
                                                </td>
                                                <td></td>
                                            </tr>
                                         </table>
                                         </div>
                                         </form>

                         </div>
                         </div>
                         </div>
                         </div>
                         </div>
 </div>
         </div>
         <!-- Student Registration ends -->

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
</div>
</div>
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

$(document).ready(function(){
  $('#Mstate').on('change', function(){
   var countryID = $(this).val();
   if(countryID){
       $.ajax({
           type:'post',
           url:"../district.php",
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


$('#bar').click(function(){
	$(this).toggleClass('open');
	$('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled' );

});



</script>
  </body>
</html>
<?php } ?>
