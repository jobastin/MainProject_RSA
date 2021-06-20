<?php
require('../fun.php');
require ('../pdf/vendor/autoload.php');
$con = connect();
session_start();

use Spipu\Html2Pdf\Html2Pdf;

$lid=$_GET['pid1'];
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
      <table border="0">
      <tr>
      <td style="width:150px"><img src="..\image\favicon.png" style="height:100px;width:100px;"></td>
      <td style="width:340px;text-align: center;"><h3>Road side Assistance</h3></td>
      <td style="width:230px;text-align: right;"><h5>Contact:<br>rsaproject02@gmail.com</h5></td>
      </tr>
      </table>
      <hr>
		</div>
    <div class="outerDiv1">
    <table border="0">
    <tr>
    <td colspan="5" style="text-align: center;"><h4>Payment Invoice</h4></td>
    </tr>';




    $r1=mysqli_query($con,"SELECT * FROM `tbl_payment` WHERE `payment_id`=$lid")or die("Sign in Error");
    $c = mysqli_fetch_array($r1);
    $loginid=$c[1];
    $re=$c[2];
    $desc=$c[4];
    $amount=$c[5];


    $r2=mysqli_query($con,"SELECT * FROM `tbl_user` WHERE `login_id`=$loginid")or die("Sign in Error");
    $c1 = mysqli_fetch_array($r2);
    $name=$c1[2];
    $e=$c1[3];


    $r3=mysqli_query($con,"SELECT * FROM `tbl_fuel` WHERE `login_id`=$re")or die("Sign in Error");
    $c2 = mysqli_fetch_array($r3);
    $fname=$c2[4];

    $html.='<tr>
    <td style="width:50px;text-align: center;">Name :</td>
    <td style="width:100px;text-align: center;">'.$name.'</td>
    <td style="width:250px;text-align: center;"></td>
    <td style="width:100px;text-align: center;">Paied to :</td>
    <td style="width:100px;text-align: center;">'.$fname.'</td>
    </tr>';



    $html.='<tr>
    <td style="width:150px;text-align: center;">Email ID:</td>
    <td style="width:100px;text-align: center;">'.$e.'</td>
    <td style="width:250px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    </tr>';

    $html.='<tr>
    <td style="width:150px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    <td style="width:250px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    </tr>';

    $html.='<tr>
    <td style="width:150px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    <td style="width:250px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    </tr>';
    $html.='<tr>
    <td style="width:150px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    <td style="width:250px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    </tr>';
    $html.='<tr>
    <td style="width:150px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    <td style="width:250px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    </tr>';

    $html.='<tr>
    <td style="width:150px;text-align: center;">1.</td>
    <td style="width:100px;text-align: center;">'.$desc.'</td>
    <td style="width:250px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    </tr>';

    $html.='<tr>
    <td style="width:150px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    <td style="width:250px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    </tr><hr>';

    $html.='<tr>
    <td style="width:150px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    <td style="width:250px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    </tr>';
    $html.='<tr>
    <td style="width:150px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    <td style="width:250px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    </tr>';
    $html.='<tr>
    <td style="width:150px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    <td style="width:250px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    </tr>';

    $html.='<tr>
    <td style="width:150px;text-align: center;"></td>
    <td style="width:100px;text-align: center;"></td>
    <td style="width:250px;text-align: center;"></td>
    <td style="width:100px;text-align: center;">Total Amount :</td>
    <td style="width:100px;text-align: center;">Rs.'.$amount.'</td>
    </tr>';


    $html.='</table>

  </div>
    </body>
    </html>
';
$html2pdf->writeHTML($html);
$html2pdf->output();
?>
