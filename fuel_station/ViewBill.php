<?php
require('../fun.php');
require('../config.php');
$con = connect();
if(sessioncheck() == false)
{
header('Location: ../login.php');
}
else
{
	$lid=$_SESSION['loginid'];
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


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
    console.log(<?php echo   $_SESSION['loginid']; ?>);
    </script>


    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="../css/dash_style.css">
    <link rel="stylesheet" type="text/css" href="../css/calendar.css">
    <link rel="stylesheet" type="text/css" href="../css/viewTbl.css">
    <link rel="stylesheet" type="text/css" href="../css/registraion_form.css">
    <link rel="stylesheet" type="text/css" href="../css/registration_form1.css">
    <title>RSA</title>

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
          <span class="align-middle">Fuel Station</span>
        </a>

				 <ul class="navbar-nav align-self-stretch">
	<li class="">
		  <a class="nav-link text-left active"  role="button"
		  aria-haspopup="true" aria-expanded="false" href="index.php">
       <i class="flaticon-bar-chart-1"></i>  <h5>Dashboard</h5>
         </a>
		  </li>
        <a href="ViewServiceRequest.php"><li class="sidebar-header">
		        View Request
        </li></a>
        <a href="manageService.php"><li class="sidebar-header">
		        Manage Services
        </li></a>
        <a href="ViewBill.php"><li class="sidebar-header">
		        Payments
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
		  </li>
		  <li class="sidebar-header">
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
		  </li>


		   <li class="has-sub">
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
		  </li>

		  <li class="sidebar-header"><h5>Tasks</h5></li>
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
											<li><a href="#">Blocks</a></li>
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
		  </li>
		   <li class="has-sub">
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
<!--
          <li class="has-sub">
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
<div>
          <div class="row">
                <div class="col-md-12 mt-4">
                <div class="container-xl">
        	    <div class="table-responsive">
        		<div class="table-wrapper">
        			<div class="table-title">
        				<div class="row">
        					<div class="col-sm-6">
        						<h2>Services</h2>
        					</div>
        					<div class="col-sm-6">
        						<input class="form-control" id="myInput" type="text" placeholder="Search..">
        					</div>
        				</div>
        			</div>
              <?php
              $lid;
              $qs1=mysqli_query($con,"SELECT * FROM `tbl_fuel` WHERE `login_id`='$lid'")or die("Sign in Error");
              $sv = mysqli_fetch_array($qs1);
              $fid=$sv['Fid'];


              $qs2=mysqli_query($con,"SELECT * FROM `tbl_fuel_service_request` WHERE `Fid`='$fid'")or die("Sign in Error");
              $s = mysqli_fetch_array($qs2);

               ?>
                <table class="table table-striped table-hover">
        				<thead>
        					<tr>
        						<th>Payment ID</th>
                    <th>Login ID</th>
        						<th>Paied By</th>
                    <th>Description</th>
                    <th>Total Amount</th>
                    <th>Payment Status</th>
                    <th>Action<th>
        					</tr>
        				</thead>
        				<tbody id="myTable">
                    <?php

                    $qs2=mysqli_query($con,"SELECT * FROM `tbl_payment` WHERE `reciever_id`='$lid' ORDER BY `payment_id` desc")or die("Sign in Error");
                    if(mysqli_num_rows($qs2)>0)
                    {
                     while($s = mysqli_fetch_array($qs2))
                     {
                     $sid=$s['login_id'];
                     $s1=mysqli_query($con,"SELECT * FROM `tbl_user` WHERE `login_id`=$sid")or die("Sign in Error");
                     while($s5 = mysqli_fetch_array($s1))
                     {
                    ?>
        					  <tr>
        						<td><?php echo "P".$s['payment_id']; ?></td>
        						<td><?php echo $sid; ?></td>
                    <td><?php echo $s5['name']; ?></td>
                    <td><?php echo $s['description']; ?></td>
                    <td><?php echo $s['amount']; ?></td>
                    <?php
                    if(!$s['status'])
                    {
                      $amount=$s['amount'];
                      $amount=$amount*100;
                      ?>
                      <td>
                        <form action="submit.php" method="POST">
                          <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                          data-key="<?php echo $pubk?>"
                          data-amount="<?php echo $amount?>"
                          data-name="Roadside Assistance"
                          data-description="Payment Portal"
                          data-image="..\image\favicon.png"
                          data-currency="inr"
                          data-email="<?php echo $s5['email']; ?>"
                          ></script>
                          <input type="text" value="<?php echo $s['payment_id']; ?>" name="pid" style="display:none">
                          <input type="text" value="<?php echo $amount; ?>" name="amount" style="display:none">
                        </form>

                      </td>
                      <?php
                    }
                    else{
                      ?>
                      <td>Paid</td>
                      <?php
                    }
                    if($s['status'])
                    {
                      ?>
                      <td><a href="pdf.php" id="test" name="test" method="post" value="sdfs"><i class="material-icons" data-toggle="tooltip" title="Delete">print</i></a></td>
                      </tr>
                      <?php

                    }
                  }
                }
              }
              else
              {
              ?>
              <tr>
              <td colspan="7"><center>No payments Added !!!</center></td>
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

<!-- Comment section -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reason for Rejection</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="commentBody">
        <textarea class="form-control" id="commentContent"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button"  class="btn btn-primary addComment">Add Reason</button>
      </div>
    </div>
  </div>
</div>


<!-- Comment check section -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bill Generation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="commentBody1">
        <span><h6>Bill Description</h6></span>
        <textarea class="form-control" id="billDescription" required ></textarea>
        <br>
        <span><h6>Total Amount</h6></span>
        <input name="billAmount" id="billAmount" class="form-control" type="text" placeholder="Bill Amount" onkeypress="return /[0-9.]/i.test(event.key)" required />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button"  class="btn btn-primary addBill">Generate Bill</button>
      </div>
    </div>
  </div>
</div>




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
                                   <div id="map" style="width:100%; height: 450px;"></div>
                                       <!-- <div style="width:1500px; height: 300px;" class="map_canvas1" id="map_canvas1"></div> -->
                                     </div>
                               </td>
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


//comment section
var h_id;
$(document).ready(function(){

   $('.deleteService').click(function() {
      h_id = $(this).attr("id");
   });

   $('.addComment').click(function() {
     var sub = $("#commentContent").val();
     var sub = $("#commentContent").val();
     if(sub== "")
     {
       $("#commentContent").css("border-color","red");
     }
     else {
       $.ajax({
               url:"AddReason.php",
               method:"post",
               data:{h_id:h_id,sub:sub},
               success:function(data){
                    location.reload();
                    // $('#FuelSendMailModel').modal("hide");
               }
          });
        }
   });
});





//bill generation
var b_id;

$(document).ready(function(){

   $('.checkService').click(function() {
      b_id = $(this).attr("id");
   });

   $('.addBill').click(function() {
     var bdesc = $("#billDescription").val();
     var amount = $("#billAmount").val();
     if(amount == "" && bdesc== "")
     {
       $("#billDescription").css("border-color","red");
       $("#billAmount").css("border-color","red");
     }
     else if (amount == "") {
       $("#billAmount").css("border-color","red");
       $("#billDescription").css("border-color","#dddddd");
     }
     else if (bdesc == "") {
       $("#billDescription").css("border-color","red");
       $("#billAmount").css("border-color","#dddddd");
     }
     else {
       $.ajax({
               url:"AddPayment.php",
               method:"post",
               data:{b_id:b_id,bdesc:bdesc,amount:amount},
               success:function(data){
                    location.reload();
                    // $('#FuelSendMailModel').modal("hide");
               }
          });
        }
   });
});





//Mechanical Reasign
$(document).ready(function(){
   var r_id;
   $('.reassignService').click(function() {
      var r_id = $(this).attr("id");
       $.ajax({
               url:"FuelSerReassign.php",
               method:"post",
               data:{r_id:r_id},
               success:function(data){
                  location.reload();
               }
          });
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


$('#bar').click(function(){
	$(this).toggleClass('open');
	$('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled' );

});
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHTWkA5K-6EpKCyTPcdS3ONyCxDBqJ74o"></script>
<script>


// $(document).ready(function(){
//    var id;
//    $("a").click(function () {
//        id = $(this).attr('id');
//        alert(id);
//    });
//   });





var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;

// var x=11.3220495,y=75.9033984;
function getLocation(x1,y1)
{
  x=x1;
  y=y1;
}

<?php
  $resut=mysqli_query($con,"SELECT * FROM `tbl_fuel` WHERE `login_id`=$lid")or die("Sign in Error");
  $s5 = mysqli_fetch_array($resut);
  $lat=$s5['Flat'];
  echo $lat;
 ?>;
function initialize() {
/*INITIALIZE GOOGLE MAPS V3*/
  directionsDisplay = new google.maps.DirectionsRenderer();
  var npcc = new google.maps.LatLng(<?php echo $s5['Flat']; ?>,<?php echo $s5['Flon']; ?>);
  var mapOptions = {

    zoom: 8,
    zoomControl: true,
      center: npcc,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
         disableDefaultUI: true,
         styles: [{
         featureType: 'poi',
         stylers: [{ visibility: 'off' }]
           },
         ]
    };

    map = new google.maps.Map(document.getElementById('map'), mapOptions);

    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById('directions-panel'));

    var marker = new google.maps.Marker({
    position: mapOptions.center,
    map: map,
    title: 'My initial starting point'
    });

    //remove all unnecessary styles from Google Maps v3
    setTimeout(function(){$('base').prevAll().remove();}, 1000);
/**/
}


function calcRoute(x,y) {
/*CALCULATE AND DISPLAY ROUTE DATA*/
    var from = new google.maps.LatLng(<?php echo $s5['Flat']; ?>,<?php echo $s5['Flon']; ?>);
    var to = new google.maps.LatLng(x,y);
    var directionsRequest = {
        origin: from,
        destination: to,
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC
    };

  directionsService.route(directionsRequest, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
    else {
    console.log("Unable to retrieve your route<br />");
      }
  });
/**/
}

// function getRoute() {
// /*ON HTML FORM SUBMIT, PROCESS ROUTE DATA*/
//   $('#coming-from').submit(function(e){
//   e.preventDefault();
//   calcRoute();
//   });
//  /**/
//  }

google.maps.event.addDomListener(window, 'load', initialize);

// $(window).load(function(){
//   //getRoute();
//     calcRoute();
// });
      </script>
  </body>
</html>
<?php } ?>
