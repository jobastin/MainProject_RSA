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
   ?>
   <script>
   console.log(<?php echo $lid; ?>);
   </script>
<html lang="en">
  <head>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHTWkA5K-6EpKCyTPcdS3ONyCxDBqJ74o"
    type="text/javascript"></script>

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
    <script src="..\js\EditPassvalidation1.js"></script>
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
     #map {
       height: 100%;
     }
     </style>





  </head>
  <body>
  <div id="wrapper">
    <div id="pageloader">
       <img src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif" alt="processing..." />
    </div>
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
      											<li><a href="AddServices.php">View Services</a></li>
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

        <div class="row">
                <div class="col-md-12 mt-4">
                <div class="container-xl">
        	    <div class="table-responsive">
        		<div class="table-wrapper">
        			<div class="table-title">
        				<div class="row">
        					<div class="col-sm-6">
        						<h2>Fuel Station</h2>
        					</div>
        					<div class="col-sm-6">
        					<input class="form-control" id="myInput" type="text" placeholder="Search..">
        					</div>
        				</div>
        			</div>
              <table class="table table-striped table-hover">
        				<thead>
        					<tr>
        						<th>Name</th>
        						<th>Email</th>
        						<th>Phone Number</th>
        						<th>Name of Owner</th>
        						<th>Contact Number</th>
                    <th>Action</th>
        					</tr>
        				</thead>
        				<tbody id="myTable">
              <?php
                    $qs2=mysqli_query($con,"SELECT * FROM `tbl_fuel`")or die("Sign in Error");
                    if(mysqli_num_rows($qs2)>0)
                    {
                    while($sv1 = mysqli_fetch_array($qs2))
                    {
                    ?>
        					  <tr>
        						<td><?php echo $sv1['Fcompany']; ?></td>
        						<td><?php echo $sv1['Femail']; ?></td>
        						<td><?php echo $sv1['Fphno']; ?></td>
        						<td><?php echo $sv1['Fowner']; ?></td>
                    <td><?php echo $sv1['FOphno']; ?></td>
        						<td>
                      <a href="#" id="<?php echo $sv1['login_id']; ?>" class="FuelViewMore" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="View More">remove_red_eye</i></a>
                      <a href="#" data-target="#FuelViewMapModel" id="<?php echo $sv1['login_id']; ?>" class="FuelViewMap"  data-toggle="modal" data-lat="<?php echo $sv1['Flat']; ?>" data-lng="<?php echo $sv1['Flon']; ?>"><i class="material-icons" data-toggle="tooltip" title="View on Map">location_on</i></a>
                      <a href="#" id="<?php echo $sv1['login_id']; ?>" class="FuelSendMail" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Send a Mail">mail</i></a>
                      <?php
                      if($sv1['Fstatus'])
                      {
                      ?>
                      <a href="#" id="<?php echo $sv1['login_id']; ?>" class="delete deleteFuel" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                      <?php
                      }
                      else {
                        ?>
                        <a href="#reModel" id="<?php echo $sv1['login_id']; ?>" class="reassig reassignFuel" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Make as Active">autorenew</i></a>
                        <?php
                      }
                      ?>
                    </td>
        					</tr>
                <?php
              }
              }
                  else
                  {
                  ?>
                  <tr>
                  <td colspan="6"><center>Not Yet Regiestered  !!!!</center></td>
                  </tr>
                  <?php
                  }
                  ?>
        				</tbody>
        			</table>
        		</div>
        	</div>
        </div>
                </div>
                </div>


      </div>
    </div>

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

<!-- Mech view more Modal  -->
<div id="FuelViewMoreModel" class="modal fade">
<div class="modal-dialog">
		<div class="modal-content">
			<form method="post">
				<div class="modal-header">
					<h4 class="modal-title">Details</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body" id="FuelViewMoreBody">

				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Mech View Model  ends  -->


<!-- Mech view on Map Modal  -->
<div id="FuelViewMapModel" class="modal fade">
<div class="modal-dialog">
		<div class="modal-content">
			<form method="post">
				<div class="modal-header">
					<h4 class="modal-title">Details</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body" id="FuelViewMapBody">

          <div class="location-map" id="location-map">
                <div style="width:400px; height: 400px;" id="map_canvas"></div>
              </div>

				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Mech View  on Map ends  -->


<!-- Mech view on Map Modal  -->
<div id="FuelSendMailModel" class="modal fade">
<div class="modal-dialog">
		<div class="modal-content">
			<form method="post" id="form7">
				<div class="modal-header">
					<h4 class="modal-title">Details</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body" id="FuelSendMailBody">


          <div class="container">

          <h3>To : </h3>
          <fieldset>
          <input class="form-control" value="" disabled="true" type="text" name="email2" id="email2" tabindex="2" required>
          </fieldset>
          <br>
          <br>
          <fieldset>
          <input placeholder="Enter the Subject" class="form-control" type="text" name="emailSub1" id="emailSub1" tabindex="2" required>
          </fieldset>
          <br>
          <br>
          <fieldset>
          <textarea placeholder="Type your Message Here...." id="emailBody1"  class="form-control" name="emailBody1" tabindex="5" required></textarea>
          </fieldset>
          <br>
          <br>
          <fieldset>
          <input type="submit" id="mailsend" value="Send Mail" class="btn btn-primary" />
          </fieldset>
          </div>

				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Mech View  on Map ends  -->


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

//Mechanical view more
$(document).ready(function(){
   var h_id;
   $('.FuelViewMore').click(function() {
      var h_id = $(this).attr("id");
       $.ajax({
               url:"FuelViewMore.php",
               method:"post",
               data:{h_id:h_id},
               success:function(data){
                    $('#FuelViewMoreBody').html(data);
                    $('#FuelViewMoreModel').modal("show");
               }
          });
   });
});



//Mech view on maps
// $(document).ready(function(){
//    var m_id;
//    $('.FuelViewMap').click(function() {
//       var m_id = $(this).attr("id");
//        $.ajax({
//                url:"FuelViewMap.php",
//                method:"post",
//                data:{m_id:m_id},
//                success:function(data){
//                     $('#FuelViewMapBody').html(data);
//                     $('#FuelViewMapModel').modal("show");
//                }
//           });
//    });
// });

$(document).ready(function(){
  var e_id;
   $('.FuelSendMail').click(function() {
      e_id = $(this).attr("id");
       $.ajax({
               url:"FuelSendMail.php",
               method:"post",
               data:{e_id:e_id},
               success:function(data){
                    $("#email2").val(data);
                    $('#FuelSendMailModel').modal("show");
               }
          });
   });
   $("#form7").submit(function (event) {
     var sub = $("#emailSub1").val();
     var body= $("#emailBody1").val();
     $.ajax({
             url:"FuelMail.php",
             method:"post",
             data:{e_id:e_id,sub:sub,body:body},
             success:function(data){

             }
        });
   });
});


//Mechanical Delete
$(document).ready(function(){
   $('.deleteFuel').click(function() {
      var d_id = $(this).attr("id");
       $.ajax({
               url:"FuelDelete.php",
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
   $('.reassignFuel').click(function() {
      var r_id = $(this).attr("id");
       $.ajax({
               url:"FuelReassign.php",
               method:"post",
               data:{r_id:r_id},
               success:function(data){
                  location.reload();
               }
          });
   });
});




$(document).ready(function(){
  $("#form7").on("submit", function(){
    $("#pageloader").fadeIn();
  });
});

$('#bar').click(function(){
	$(this).toggleClass('open');
	$('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled' );

});

$(document).ready(function() {
  var map = null;
  var myMarker;
  var myLatlng;

  function initializeGMap(lat, lng) {
    myLatlng = new google.maps.LatLng(lat, lng);

    var myOptions = {
      zoom: 12,
      zoomControl: true,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    myMarker = new google.maps.Marker({
      position: myLatlng
    });
    myMarker.setMap(map);
  }

  // Re-init map before show modal
  $('#FuelViewMapModel').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    initializeGMap(button.data('lat'), button.data('lng'));
    $("#location-map").css("width", "100%");
    $("#map_canvas").css("width", "100%");
  });

  // Trigger map resize event after modal shown
  $('#FuelViewMapModel').on('shown.bs.modal', function() {
    google.maps.event.trigger(map, "resize");
    map.setCenter(myLatlng);
  });
});

$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>
  </body>
</html>
<?php } ?>
