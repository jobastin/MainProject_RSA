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

    <style>
    #myMap {
   height: 100%;
   width: 100%;
   }
    </style>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="..\js\policeValidation1.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="../css/dash_style.css">
  
    <link rel="stylesheet" type="text/css" href="../css/viewTbl.css">
    <link rel="stylesheet" type="text/css" href="../css/registraion_form.css">
    <link rel="stylesheet" type="text/css" href="../css/registration_form1.css">
    <title>RSA - Admin</title>


	     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	    <!--fontawesome-->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

     <style>
     #map {
       height: 100%;
     }
     </style>




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

        <!-- Student View -->
<div class="row"  id="stu_view">
<div class="col-md-12 mt-4">
<div class="container-xl">
<div class="table-responsive">
<div class="table-wrapper">
<div class="table-title">
<div class="row">
  <div class="col-sm-6">
    <h2>Police Station</h2>
  </div>
  <div class="col-sm-6">
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <a href="AddPolice.php" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Police Station</span></a>
  </div>
</div>
</div>
<table class="table table-striped table-hover">
<thead>
  <tr>
    <th>Place</th>
    <th>Address</th>
    <th>State</th>
    <th>District</th>
    <th>Pin</th>
    <th>Phone</th>
    <th>Actions</th>
  </tr>
</thead>
<tbody id="myTable">

  <?php
        $qs2=mysqli_query($con,"SELECT * FROM `tbl_police`")or die("Sign in Error");
        if(mysqli_num_rows($qs2)>0)
        {
        while($sv2 = mysqli_fetch_array($qs2))
        {
        ?>
        <tr>
        <td><?php echo $sv2['Pplace']; ?></td>
        <td><?php echo $sv2['Padd']; ?></td>
        <?php
             $s=$sv2['state_id'];
             $s1=mysqli_query($con,"SELECT * FROM `tbl_states` WHERE `state_id`=$s")or die("Sign in Error q1");
             $row1 = mysqli_fetch_array($s1);
             ?>
        <td><?php echo $row1['Name']; ?></td>

        <?php
            $d=$sv2['city_id'];
            $d1=mysqli_query($con,"SELECT * FROM `tbl_cities` WHERE `city_id`=$d AND `state_id`=$s")or die("Sign in Error q1");
           $row2 = mysqli_fetch_array($d1);
          ?>

        <td><?php echo $row2['Name']; ?></td>
        <td><?php echo $sv2['Ppin']; ?></td>
        <td><?php echo $sv2['Pphno']; ?></td>
        <td>
          <!-- <a href="#" id="<?php echo $sv2['Pid']; ?>" class="CustViewMap" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="View on Map">location_on</i></a> -->
          <a href="#" data-target="#CustViewMapModel" id="<?php echo $sv2['Pid']; ?>" class="CustViewMap"  data-toggle="modal" data-lat="<?php echo $sv2['Plat']; ?>" data-lng="<?php echo $sv2['Plon']; ?>"><i class="material-icons" data-toggle="tooltip" title="View on Map">map</i></a>
          <a href="#" class="editPolice" data-target="#editPoliceModel" id="<?php echo $sv2['Pid']; ?>" data-toggle="modal" data-lat1="<?php echo $sv2['Plat']; ?>" data-lng1="<?php echo $sv2['Plon']; ?>"><i class="material-icons" data-toggle="tooltip" title="Edit">pin_drop</i></a>
          <a href="#" class="editPolice1" data-target="#editPoliceModel1" id="<?php echo $sv2['Pid']; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
          <?php
          if($sv2['Pstatus'])
          {
          ?>
          <a href="#" id="<?php echo $sv2['Pid']; ?>" class="delete deleteCust" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
          <?php
          }
          else {
            ?>
            <a href="#" id="<?php echo $sv2['Pid']; ?>" class="reassig reassignCust" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Make as Active">autorenew</i></a>
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
      <td colspan="7"><center>Not Yet Regiestered  !!!!</center></td>
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
<!-- Student view ends -->

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

<!-- Mech view on Map Modal  -->
<div id="CustViewMapModel" class="modal fade">
<div class="modal-dialog">
		<div class="modal-content">
			<form method="post">
				<div class="modal-header">
					<h4 class="modal-title">Current Location</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body" id="CustViewMapBody">
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

<!-- edit police location model -->
<div id="editPoliceModel" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">
					<h4 class="modal-title">Location</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body" id="editPoliceBody">


          <table class="table" style="font-size:15px">
                              <tr>
                               <td colspan="6">
                                 <label _ngcontent-sc193="" for="myMap" class="text-gray-600 small">Your location in Map</label>
                                 <div class="location-map1" id="location-map1">
                                       <div style="width:1500px; height: 300px;" class="map_canvas1" id="map_canvas1"></div>
                                     </div>
                               </td>
                              </tr>
                              <tr style="display:none">
                                  <th valign="top">Latitude</th>
                                  <!-- <td><input type="text" onblur="valPlat();" class="form-control" onkeypress="return /[0-9.-]/i.test(event.key)" id="Plat" name="Plat" placeholder="Enter Latitude Information from Google Map" /></td> -->
                                  <td><input _ngcontent-sc193="" id="Mlat" name="Mlat" type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[0-9.-]/i.test(event.key)" placeholder="Enter Latitude Information from Google Map" required /></td>
                                </tr>
                                <tr style="display:none">
                                  <th valign="top">Longitude</th>
                                  <!-- <td><input type="text" onblur="valPlon();" class="form-control" id="Plon" name="Plon" onkeypress="return /[0-9.-]/i.test(event.key)" placeholder="Enter Longitude Information from Google Map" /></td> -->
                                  <td><input _ngcontent-sc193="" id="Mlon" name="Mlon" type="text"  class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[0-9.-]/i.test(event.key)" placeholder="Enter Longitude Information from Google Map" required /></td>
                              </tr>
                      </table>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="button" id="Plocation" value="Update Location" class="btn btn-primary" />
					<!-- <input type="submit" class="btn btn-info" value="Update"> -->
				</div>
			</form>
		</div>
	</div>
</div>



<!-- edit police location model -->
<div id="editPoliceModel1" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="post">
				<div class="modal-header">
					<h4 class="modal-title">Location</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body" id="editPoliceBody1">


				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <!-- <input type="submit" class="btn btn-info editComplaintType" id="editComplaintType" value="Update"> -->
          <input type="button" class="btn btn-primary Psubmit1" id="Psubmit1" value="Update" />
				</div>
			</form>
		</div>
	</div>
</div>


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

// $(document).ready(function(){
//    var m_id;
//    $('.CustViewMap').click(function() {
//       var m_id = $(this).attr("id");
//        $.ajax({
//                url:"PoliceViewMap.php",
//                method:"post",
//                data:{m_id:m_id},
//                success:function(data){
//                     $('#CustViewMapBody').html(data);
//                     $('#CustViewMapModel').modal("show");
//                }
//           });
//    });
// });


//edit police model
$(document).ready(function(){
  var p_id;
   $('.editPolice1').click(function() {
      p_id = $(this).attr("id");
       $.ajax({
               url:"PoliceEdit.php",
               method:"post",
               data:{p_id:p_id},
               success:function(data){
                    $('#editPoliceBody1').html(data);
                    $('#editPoliceModel1').modal("show");
               }
          });
   });

   $('.Psubmit1').click(function() {
     var Pplace = $('#Pplace').val();
     var Padd = $('#Padd').val();
     var Mstate = $('#Mstate').val();
     var Mdist = $('#Mdist').val();
     var Ppin = $('#Ppin').val();
     var Pphno = $('#Pphno').val();
        $.ajax({
                url:"PoliceUpdateDetails.php",
                method:"post",
                data:{p_id:p_id,Pplace:Pplace,Padd:Padd,Mstate:Mstate,Mdist:Mdist,Ppin:Ppin,Pphno:Pphno},
                success:function(data){
                $('#editPoliceModel1').modal("hide");
                location.reload();
                }
           });
    });


});


$(document).ready(function(){
   $('.deleteCust').click(function() {
      var d_id = $(this).attr("id");
       $.ajax({
               url:"PoliceDelete.php",
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
   $('.reassignCust').click(function() {
      var r_id = $(this).attr("id");
       $.ajax({
               url:"PoliceReassign.php",
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




// updating location
$(document).ready(function(){
   var id;
   $("a").click(function () {
       id = $(this).attr('id');
   });

   $('#Plocation').click(function() {
     var latP = $('#Mlat').val();
     var longP = $('#Mlon').val();
       $.ajax({
               url:"LocationUpdatePolice.php",
               method:"post",
               data:{id:id,latP:latP,longP:longP},
               success:function(data){
                 location.reload();
               }
          });
   });

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
  $('#CustViewMapModel').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    initializeGMap(button.data('lat'), button.data('lng'));
    $("#location-map").css("width", "100%");
    $("#map_canvas").css("width", "100%");
  });

  // Trigger map resize event after modal shown
  $('#CustViewMapModel').on('shown.bs.modal', function() {
    google.maps.event.trigger(map, "resize");
    map.setCenter(myLatlng);
  });
});

$(document).ready(function() {
  var map = null;
  var marker;
  var myLatlng;
  var geocoder = new google.maps.Geocoder();
  var infowindow = new google.maps.InfoWindow();

  function initializeGMap1(lat, lng) {
    myLatlng = new google.maps.LatLng(lat, lng);

    var myOptions = {
      zoom: 12,
      zoomControl: true,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("map_canvas1"), myOptions);

    marker= new google.maps.Marker({
      position: myLatlng,
      draggable: true
    });
    marker.setMap(map);

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
  var x,y;
  // Re-init map before show modal
  $('#editPoliceModel').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    x=button.data('lat1');
    y=button.data('lng1')
    initializeGMap1(x,y);
    $("#location-map1").css("width", "100%");
    $("#map_canvas1").css("width", "100%");
  });

  // Trigger map resize event after modal shown
  $('#editPoliceModel').on('shown.bs.modal', function() {
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
