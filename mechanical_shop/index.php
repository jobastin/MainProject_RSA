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
    <script src="js\validation7.js"></script>

    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="../css/dash_style.css">
    <link rel="stylesheet" type="text/css" href="../css/calendar.css">
    <link rel="stylesheet" type="text/css" href="../css/viewTbl.css">
    <link rel="stylesheet" type="text/css" href="../css/registraion_form.css">
    <link rel="stylesheet" type="text/css" href="../css/registration_form1.css">
    <title>HMS</title>

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	    <!--fontawesome-->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

		 <link rel="stylesheet" href="font/font/flaticon.css">





  </head>
  <body>
  <div id="wrapper">
   <div class="overlay"></div>

        <!-- Sidebar -->
    <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
       <div class="simplebar-content" style="padding: 0px;">
				<a class="sidebar-brand" href="#">
          <span class="align-middle">Mechanical Shop</span>
        </a>

				 <ul class="navbar-nav align-self-stretch">
	<li class="">
		  <a class="nav-link text-left active"  role="button"
		  aria-haspopup="true" aria-expanded="false" href="index.php">
       <i class="flaticon-bar-chart-1"></i>Dashboard
         </a>
		  </li>
        <!-- <li class="sidebar-header">
		<h5>Inmates</h5>
        </li> -->


        <a href="#"><li class="sidebar-header">
		        View Request
        </li></a>
        <a href="manageService.php"><li class="sidebar-header">
		        Manage Service
        </li></a>
        <a href="#"><li class="sidebar-header">
		        Generate Bill
        </li></a>


        <!-- <li class="has-sub">
        <a class="nav-link collapsed text-left" href="#collapseExample1" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i>   Student
         </a>
        <div class="collapse menu mega-dropdown" id="collapseExample1">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box">
										<ul class="list-unstyled m-0">
											<li><a href="#">New Regisration</a></li>
											<br>
											<li><a href="#">View Student</a></li>
                                            <br>
										    <li><a href="#">Vacated Students</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
		     </div>
		  </div>
		  </li> -->
		  <!-- <li class="sidebar-header">
		  <h5> Employees</h5>
		  </li>
		  <li class="has-sub">
		  <a class="nav-link collapsed text-left" href="#collapseExample2" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i>Employe</a>
		  <div class="collapse menu mega-dropdown" id="collapseExample2">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box">
										<ul class="list-unstyled m-0">
											<li><a href="#">New Regisration</a></li>
											<br>
											<li><a href="#">View Employee</a></li>
                                            <br>
										    <li><a href="#">Resigned / Deleted employee</a></li>
										    <br>
										</ul>
									</div>
								</div>

							</div>
						</div>
		     </div>
		  </div>
		  </li> -->


		   <!-- <li class="has-sub">
		  <a class="nav-link collapsed text-left" href="#collapseExample3" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i>Warden</a>
		  <div class="collapse menu mega-dropdown" id="collapseExample3">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box">
										<ul class="list-unstyled m-0">
											<li><a href="#">New Regisration</a></li>
											<br>
											<li><a href="#">View </a></li>
                                            <br>
										    <li><a href="#">Deleted List</a></li>
										</ul>
									</div>
								</div>

							</div>
						</div>
		     </div>
		  </div>
		  </li> -->

		  <!-- <li class="sidebar-header"><h5>Tasks</h5></li>
		   <li class="has-sub">
		  <a class="nav-link collapsed text-left" href="#collapseExample4" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i>Room Allocation</a>
		  <div class="collapse menu mega-dropdown" id="collapseExample4">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box">
										<ul class="list-unstyled m-0">
											<li><a href="#">Blocks</a></li> -->
<!--
                                            <br>
                                            <li><a href="#room_allocation" onclick="Room_allocation()">Rooms</a></li>
                                            <br>
-->
										<!-- </ul>
									</div>
								</div>

							</div>
						</div>
		     </div>
		  </div>
		  </li> -->
		   <!-- <li class="has-sub">
		  <a class="nav-link collapsed text-left" href="#collapseExample5" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i>Notice Publishing</a>
		  <div class="collapse menu mega-dropdown" id="collapseExample5">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box">
										<ul class="list-unstyled m-0">
											<li><a href="#">Publish New</a></li>
											<br>
										    <li><a href="#">Deleted List</a></li>
										    <br>
										</ul>
									</div>
								</div>

							</div>
						</div>
		     </div>
		  </div>
		  </li> -->

          <!-- <li class="has-sub">
		  <a class="nav-link collapsed text-left" href="#collapseExample6" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i>Mess Update</a>
		  <div class="collapse menu mega-dropdown" id="collapseExample6">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box">
										<ul class="list-unstyled m-0">
											<li><a href="#">Publish Menu</a></li>
											<br>
											<li><a href="#">Edit Published</a></li>
                                            <br>
										</ul>
									</div>
								</div>

							</div>
						</div>
		     </div>
		  </div>
		  </li> -->

          <!-- <li class="has-sub">
		  <a class="nav-link collapsed text-left" href="#collapseExample7" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i>Complaint Management</a>
		  <div class="collapse menu mega-dropdown" id="collapseExample7">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box">
										<ul class="list-unstyled m-0">
                                            <li><a href="#">View Complaints</a></li>
                                            <br>
											<li><a href="#">Complaint Category</a></li>
											<br>
											<li><a href="#">Resolved Complaints</a></li>
                                            <br>
										</ul>
									</div>
								</div>

							</div>
						</div>
		     </div>
		  </div>
		  </li> -->
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
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    <a href="../pdf.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>
        			Generate Report</a>
                  </div>
        		  </div>
      <div class="col-md-12">
             <div class="row">
      									<div class="col-sm-3">
      										<div class="card">
      											<div class="card-body">
      												<h5 class="card-title mb-4">Customers</h5>
                              <?php
                              $r1=mysqli_query($con,"SELECT COUNT(`user_id`) FROM tbl_user")or die("Sign in Error");
                              $c = mysqli_fetch_array($r1);

                              $r2=mysqli_query($con,"SELECT COUNT(`user_id`) FROM tbl_user WHERE `status`=1")or die("Sign in Error");
                              $c1= mysqli_fetch_array($r2);

                              $r3=mysqli_query($con,"SELECT COUNT(`user_id`) FROM tbl_user WHERE `status`=0")or die("Sign in Error");
                              $c2= mysqli_fetch_array($r3);
                              ?>
      												<h1 class="display-5 mt-1 mb-3"><?php echo $c[0]; ?></h1>
      												<div class="mb-1">
      													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i>Active</span>
      													<span class="text-muted"><?php echo $c1[0]; ?></span>
      													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i>Black Listed</span>
      													<span class="text-muted"><?php echo $c2[0]; ?></span>
      												</div>
      											</div>
      										</div>

      									</div>
      									<div class="col-sm-3">
      										<div class="card">
      											<div class="card-body">
      												<h5 class="card-title mb-4">Mechanical Shop</h5>
                              <?php
                              $r4=mysqli_query($con,"SELECT COUNT(`Mid`) FROM tbl_mech")or die("Sign in Error");
                              $c4= mysqli_fetch_array($r4);

                              $r5=mysqli_query($con,"SELECT COUNT(`Mid`) FROM tbl_mech WHERE `Mstatus`=1")or die("Sign in Error");
                              $c5= mysqli_fetch_array($r5);

                              $r6=mysqli_query($con,"SELECT COUNT(`Mid`) FROM tbl_mech WHERE `Mstatus`=0")or die("Sign in Error");
                              $c6= mysqli_fetch_array($r6);
                              ?>

      												<h1 class="display-5 mt-1 mb-3"><?php echo $c4[0]; ?></h1>
      												<div class="mb-1">
                                <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i>Active</span>
      													<span class="text-muted"><?php echo $c5[0]; ?></span>
      													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i>Black Listed</span>
      													<span class="text-muted"><?php echo $c6[0]; ?></span>
      												</div>
      											</div>
      										</div>

      									</div>
      									<div class="col-sm-3">
      										<div class="card">
      											<div class="card-body">
      												<h5 class="card-title mb-4">Fuel Station</h5>
                              <?php
                              $r4=mysqli_query($con,"SELECT COUNT(`Fid`) FROM tbl_fuel")or die("Sign in Error");
                              $c4= mysqli_fetch_array($r4);

                              $r5=mysqli_query($con,"SELECT COUNT(`Fid`) FROM tbl_fuel WHERE `Fstatus`=1")or die("Sign in Error");
                              $c5= mysqli_fetch_array($r5);

                              $r6=mysqli_query($con,"SELECT COUNT(`Fid`) FROM tbl_fuel WHERE `Fstatus`=0")or die("Sign in Error");
                              $c6= mysqli_fetch_array($r6);
                              ?>


      												<h1 class="display-5 mt-1 mb-3"><?php echo $c4[0]; ?></h1>
      												<div class="mb-1">
      													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i>Active</span>
      													<span class="text-muted"><?php echo $c5[0]; ?></span>
      													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i>Black Listed</span>
      													<span class="text-muted"><?php echo $c6[0]; ?></span>
      												</div>
      											</div>
      										</div>

      									</div>
      									<div class="col-sm-3">
      										<div class="card">
      											<div class="card-body">
      												<h5 class="card-title mb-4">Hospital</h5>
                              <?php
                              $r4=mysqli_query($con,"SELECT COUNT(`Hid`) FROM tbl_hospital")or die("Sign in Error");
                              $c4= mysqli_fetch_array($r4);

                              $r5=mysqli_query($con,"SELECT COUNT(`Hid`) FROM tbl_hospital WHERE `Hstatus`=1")or die("Sign in Error");
                              $c5= mysqli_fetch_array($r5);

                              $r6=mysqli_query($con,"SELECT COUNT(`Hid`) FROM tbl_hospital WHERE `Hstatus`=0")or die("Sign in Error");
                              $c6= mysqli_fetch_array($r6);
                              ?>
      												<h1 class="display-5 mt-1 mb-3"><?php echo $c4[0]; ?></h1>
                              <div class="mb-1">
      													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i>Active</span>
      													<span class="text-muted"><?php echo $c5[0]; ?></span>
      													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i>Black Listed</span>
      													<span class="text-muted"><?php echo $c6[0]; ?></span>
      												</div>
      											</div>
      										</div>

      									</div>


      								</div>
      </div>
                          <!-- column -->
                          <div class="col-md-12 mt-4">

                       <div class="container-fluid">
                        <div class="row" style="height: 600px;">


                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15684.198130550561!2d76.05926761649933!3d10.653260066436266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba79544d84d21fd%3A0xc039d49d95c7ae39!2sKunnamkulam%2C%20Kerala!5e0!3m2!1sen!2sin!4v1618805637177!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

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

function checkPassword(text){
    return (/^.{8,}$/.test(text));
}
var t=[0,0];

function valFPasswod()
    {
        var mu = document.getElementsByName('npass1')[0];
            if (checkPassword(mu.value)){
                document.getElementById("npass1").style.borderColor = "green";
                t[0]=1;
            }
            else
                {
                document.getElementById("npass1").style.borderColor = "red";
                t[0]=0;
            }
        button2();
    }

function valCFPasswod()
    {
        var mc = document.getElementsByName('ncpass1')[0];
        var mu = document.getElementsByName('npass1')[0];
            if ((checkPassword(mc.value))&&(mc.value == mu.value)&&(mc.value!= null)){
                document.getElementById("ncpass1").style.borderColor = "green";
                t[1]=1;
            }
            else
                {
                document.getElementById("ncpass1").style.borderColor = "red";
                t[1]=0;
            }
        button2();
    }

function button2()
{
    var l = t.length;
    var s=0;
    for(var i=0;i<l;i++)
    {
        s=s+t[i];
    }
    if(l==s)
    {
        document.getElementById("Epass").disabled = false;
    }
    else
    {
         document.getElementById("Epass").disabled = true;
    }
}


$('#bar').click(function(){
	$(this).toggleClass('open');
	$('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled' );

});
</script>
  </body>
</html>
<?php } ?>
