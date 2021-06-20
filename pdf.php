<?php
require('fun.php');
require __DIR__.'/pdf/vendor/autoload.php';
$con = connect();

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
$html='
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        .outerDiv
			{
				background-color: #ffffff;
				height: 10%;
				width: 100%;
				margin: 0px auto;
				padding: 5px;
			}
      .outerDiv1
    {
      background-color: #ffffff;


      margin: auto;
      width: 60%;
      padding: 10px;
    }
        </style>
    </head>
    <body>
      <div class="outerDiv">
      <table>
      <tr>
      <td style="width:150px"><img src="image\favicon.png" style="height:100px;width:100px;"></td>
      <td style="width:340px;text-align: center;"><h3>Road side Assistance</h3></td>
      <td style="width:230px;text-align: right;"><h5>Contact:<br>rsaproject02@gmail.com</h5></td>
      </tr>
      </table>
      <hr>
		</div>
    <div class="outerDiv1">
    <table border="1">
    <tr>
    <td colspan="5" style="text-align: center;"><h4>Regiestered Users</h4></td>
    </tr>';







    $html.='<tr>
    <td style="width:50px;text-align: center;">#</td>
    <td style="width:100px;text-align: center;">Type Of User</td>
    <td style="width:250px;text-align: center;">Total Number of Users Regiestered</td>
    <td style="width:100px;text-align: center;">Active</td>
    <td style="width:100px;text-align: center;">Login Disabled</td>
    </tr>';


    $r1=mysqli_query($con,"SELECT COUNT(`user_id`) FROM tbl_user")or die("Sign in Error");
    $c = mysqli_fetch_array($r1);

    $r2=mysqli_query($con,"SELECT COUNT(`user_id`) FROM tbl_user WHERE `status`=1")or die("Sign in Error");
    $c1= mysqli_fetch_array($r2);

    $r3=mysqli_query($con,"SELECT COUNT(`user_id`) FROM tbl_user WHERE `status`=0")or die("Sign in Error");
    $c2= mysqli_fetch_array($r3);


    $html.='<tr>
    <td style="width:50px;text-align: center;">1</td>
    <td style="width:100px;text-align: center;">Customer</td>
    <td style="width:250px;text-align: center;">'.$c[0].'</td>
    <td style="width:100px;text-align: center;">'.$c1[0].'</td>
    <td style="width:100px;text-align: center;">'.$c2[0].'</td>
    </tr>';

    $r4=mysqli_query($con,"SELECT COUNT(`Mid`) FROM tbl_mech")or die("Sign in Error");
    $c4= mysqli_fetch_array($r4);

    $r5=mysqli_query($con,"SELECT COUNT(`Mid`) FROM tbl_mech WHERE `Mstatus`=1")or die("Sign in Error");
    $c5= mysqli_fetch_array($r5);

    $r6=mysqli_query($con,"SELECT COUNT(`Mid`) FROM tbl_mech WHERE `Mstatus`=0")or die("Sign in Error");
    $c6= mysqli_fetch_array($r6);



    $html.='<tr>
    <td style="width:50px;text-align: center;">2</td>
    <td style="width:100px;text-align: center;">Mechanical Shop</td>
    <td style="width:250px;text-align: center;">'.$c4[0].'</td>
    <td style="width:100px;text-align: center;">'.$c5[0].'</td>
    <td style="width:100px;text-align: center;">'.$c6[0].'</td>
    </tr>';


    $r4=mysqli_query($con,"SELECT COUNT(`Fid`) FROM tbl_fuel")or die("Sign in Error");
    $c4= mysqli_fetch_array($r4);

    $r5=mysqli_query($con,"SELECT COUNT(`Fid`) FROM tbl_fuel WHERE `Fstatus`=1")or die("Sign in Error");
    $c5= mysqli_fetch_array($r5);

    $r6=mysqli_query($con,"SELECT COUNT(`Fid`) FROM tbl_fuel WHERE `Fstatus`=0")or die("Sign in Error");
    $c6= mysqli_fetch_array($r6);

    $html.='<tr>
    <td style="width:50px;text-align: center;">3</td>
    <td style="width:100px;text-align: center;">Fuel Station</td>
    <td style="width:250px;text-align: center;">'.$c4[0].'</td>
    <td style="width:100px;text-align: center;">'.$c5[0].'</td>
    <td style="width:100px;text-align: center;">'.$c6[0].'</td>
    </tr>';


    $r4=mysqli_query($con,"SELECT COUNT(`Hid`) FROM tbl_hospital")or die("Sign in Error");
    $c4= mysqli_fetch_array($r4);

    $r5=mysqli_query($con,"SELECT COUNT(`Hid`) FROM tbl_hospital WHERE `Hstatus`=1")or die("Sign in Error");
    $c5= mysqli_fetch_array($r5);

    $r6=mysqli_query($con,"SELECT COUNT(`Hid`) FROM tbl_hospital WHERE `Hstatus`=0")or die("Sign in Error");
    $c6= mysqli_fetch_array($r6);


    $html.='<tr>
    <td style="width:50px;text-align: center;">4</td>
    <td style="width:100px;text-align: center;">Hospital</td>
    <td style="width:250px;text-align: center;">'.$c4[0].'</td>
    <td style="width:100px;text-align: center;">'.$c5[0].'</td>
    <td style="width:100px;text-align: center;">'.$c6[0].'</td>
    </tr>';

    $html.='</table>
    <hr>
  </div>
    </body>
    </html>
';
$html2pdf->writeHTML($html);
$html2pdf->output();
?>
