<?php
require('../fun.php');
if(sessioncheck() == true or isset($_POST['p_id']))
{
$con = connect();
$fid=$_POST['rid'];
$login=$_POST['login'];
$lat=$_POST['myLat'];
$long=$_POST['myLong'];

$q2=mysqli_query($con,"SELECT * FROM `tbl_fuel_service` WHERE `Fid`=$login and `status`=1")or die("Sign in Error q1");



?>
<table class="table" style="font-size:15px">

  <tr>
      <th valign="top">Type of Service</th>
      <td>
        <select class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" name="Frequest" id="Frequest" required >
        <?php
        if(mysqli_num_rows($q2)==0){
          echo '<option value="">--Service not Avaliable--</option>';
        }
        else{
          ?>
          <option value="">--Select--</option>
          <?php
          while($s = mysqli_fetch_array($q2))
          {
            $sno=$s['Sno'];
            $q3=mysqli_query($con,"SELECT * FROM `tbl_services` WHERE `Sno`=$sno")or die("Sign in Error");
            $s1=mysqli_fetch_array($q3);
            ?>
            <option value="<?php echo $sno; ?>"><?php echo $s1['Sname']; ?></option>
            <?php
          }
        }
         ?>
      </select>
    </td>
  </tr>
  <tr>
      <th valign="top">Service Description</th>
      <td><textarea placeholder="Small decsription" name="Fdesc" id="Fdesc"  tabindex="5" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[a-zA-Z0-9,. ]/i.test(event.key)" required></textarea></td>
  </tr>
</table>
<?php
}
?>
<!-- <script>
var s1=[0,0];
function Fselect()
{
var name = document.getElementsByName('Frequest')[0];
if(name.value=="")
{
  s1[0]=0;
}
else {
  s1[0]=1;
}
button13();
}

function valDescription()
{
  var s3 = document.getElementsByName('Pplace')[0];
  if(s3.value=="")
  {
    s1[1]=0;
  }
  else {
    s1[1]=1;
  }
  button13();
}

function button13()
{
    var l = s1.length;
    var s=0;
    for(var i=0;i<l;i++)
    {
        s=s+s1[i];
    }
    if(l==s)
    {
        document.getElementById("Fsubmit1").disabled = false;
    }
    else
    {
         document.getElementById("Fsubmit1").disabled = true;
    }
}
</script> -->
