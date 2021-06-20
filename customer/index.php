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
    <link rel="stylesheet" type="text/css" href="../css/calendar.css">
    <link rel="stylesheet" type="text/css" href="../css/viewTbl.css">
    <link rel="stylesheet" type="text/css" href="../css/registraion_form.css">
    <link rel="stylesheet" type="text/css" href="../css/registration_form1.css">
    <title>RSA - Customer</title>

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	    <!--fontawesome-->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



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
<div class="container-fluid px-lg-4" >
<div class="row" style="display: inline;" id="dashboard">
<div class="col-md-12 mt-lg-4 mt-4">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Vehicle Info</h1>
            <a href="#" data-toggle="modal" data-target="#AddVehicleModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa fa-plus-circle fa-sm text-white-50"></i>
			      Add Vehicle</a>
          </div>
		  </div>



<?php
$lid=$_SESSION['loginid'];

$q1=mysqli_query($con,"SELECT * FROM `tbl_user` WHERE `login_id`=$lid")or die("Sign in Error res");
$r1 = mysqli_fetch_array($q1);
$uid=$r1['user_id'];

$q2=mysqli_query($con,"SELECT COUNT(`user_id`) FROM tbl_vehicle WHERE `user_id`=$uid")or die("Sign in Error res");
$c = mysqli_fetch_array($q2);

if($c[0] == 0)
{
?>
<div class="col-md-12">
       <div class="row" style="margin:50px">
         <center>
           <h3>No Vehicle's Added</h3>
         </center>
       </div>
     </div>
<?php
}
else
{
  $q3=mysqli_query($con,"SELECT * FROM `tbl_vehicle` WHERE `user_id`=$uid")or die("Sign in Error res");
  if(mysqli_num_rows($q3)>0)
  {
    ?>
    <div class="col-md-12">
    <div class="row">
    <?php
    while($r2 = mysqli_fetch_array($q3))
    {
      ?>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title mb-4"><?php echo $r2['Vregno']; ?></h5>
            <h5 style="float:right">
              <div class="mb-1">
                <?php
                if($r2['Vstatus'])
                {
                ?>
                <a href="#" id="<?php echo $r2['Vid']; ?>" class="delete deleteVech" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                <?php
                }
                else {
                  ?>
                  <a href="#reModel" id="<?php echo $r2['Vid']; ?>" class="reassig reassignVech" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Make as Active">autorenew</i></a>
                  <?php
                }
                ?>
              </div>
            </h5>
            <?php
            if($r2['Vtype']=="two")
            {
            ?>
            <h1 class="display-5 mt-1 mb-3">
             <i class="fa fa-motorcycle" aria-hidden="true"></i></h1>
           <?php
            }
            if($r2['Vtype']=="four")
            {
            ?>
            <h1 class="display-5 mt-1 mb-3">
             <i class="fa fa-car" aria-hidden="true"></i></h1>
           <?php
            }
            if($r2['Vtype']=="heavy")
            {
            ?>
            <h1 class="display-5 mt-1 mb-3">
             <i class="fa fa-truck" aria-hidden="true"></i></h1>
           <?php
            }
            ?>










            <div class="mb-1">
              <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> <?php echo $r2['Vcompany']; ?> </span>
              <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> <?php echo $r2['Vmodel']; ?></span>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
?>
</div>
</div>
<?php
  }
}
?>

                    <!-- column -->
                    <div class="col-md-12 mt-4">

                 <div class="container-fluid">

                  <div class="row" style="height: 600px;">

                    <h5>Accident Prone Areas</h5>
                    <br>
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15684.198130550561!2d76.05926761649933!3d10.653260066436266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba79544d84d21fd%3A0xc039d49d95c7ae39!2sKunnamkulam%2C%20Kerala!5e0!3m2!1sen!2sin!4v1618805637177!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->

                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Niy43WFZKKLKeb2mP7w0KxcRTQ2oA-LV&ll=11.306258733062101%2C75.71797438079896&z=10" style="border:0;" allowfullscreen="" loading="lazy" width="100%" height="100%"></iframe>

</div>
</div>
</div>
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


<!-- add vehicle  Modal  -->
<div class="modal fade" id="AddVehicleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Vehicle</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="VehicleAdd.php" method="POST">
      <!-- Modal body -->
      <div class="modal-body">
            <label _ngcontent-sc193="" for="Vregno" class="text-gray-600 small"><h6>Registration Number</h6></label>
            <input class="form-control" type="text" name="Vregno" id="Vregno" onblur="valVregno()" onkeypress="return /[0-9A-Za-z- ]/i.test(event.key)" placeholder="Enter Registration Number" required>
            <p>Eg: KL-57-E-4562</p>

            <label for="Vtype"><h6>Type of Vehicle</h6></label>

            <select name="Vtype" class="form-control" id="Vtype" required />
              <option value="">----Select----</option>
              <option value="two">Two Wheeler</option>
              <option value="four">Four Wheeler</option>
              <option value="heavy">Heavy Vehicle</option>
            </select>
            <br>
            <label for="Vcompany"><h6>Company Name</h6></label>
            <input class="form-control" type="text" name="Vcompany" id="Vcompany" onblur="valVcompany()" onkeypress="return /[0-9A-Za-z ]/i.test(event.key)" placeholder="Enter Company name" required>
            <br>
            <label for="Vmodel"><h6>Model</h6></label>
            <input class="form-control" type="text" name="Vmodel" id="Vmodel" onblur="valVmodel()" onkeypress="return /[0-9A-Za-z ]/i.test(event.key)" placeholder="Model of Vehicle" required>
            <br>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="submit" value="Add Vehicle" id="Vadd" class="btn btn-primary" />
      </div>
      </form>
    </div>
  </div>
</div>
<!-- add vehicle Modal ends -->




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
