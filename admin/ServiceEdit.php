<?php
require('../fun.php');
if(sessioncheck() == true or isset($_POST['p_id']))
{
$con = connect();
$lid=$_POST['p_id'];


$q2=mysqli_query($con,"SELECT * FROM `tbl_services` WHERE `Sno`=$lid")or die("Sign in Error q1");
$r1 = mysqli_fetch_array($q2);

?>

<table class="table" style="font-size:15px">
                    <tr>
                        <th valign="top">Service Name :</th>
                        <td><input type="text" id="Pplace" name="Pplace" value="<?php echo $r1['Sname']; ?>" onblur="valPplace1();" onkeypress="return /[a-zA-Z ]/i.test(event.key)" class="form-control" placeholder="Enter Service Name" /></td>
                    </tr>
                    <tr>
                        <th valign="top">Service For :</th>
                        <td>
                          <select name="Mstate" id="Mstate" oninput="Sselect()" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" name="Mstate" required >
                          <option value="">--Select--</option>
                          <option value="<?php echo $r1['Sfor']; ?>" selected="selected" ><?php echo $r1['Sfor']; ?></option>
                          <?php
                          if($r1['Sfor']=='mech')
                          {
                            ?>
                            <option value="fuel">fuel</option>
                            <?php
                          }
                           elseif($r1['Sfor']=='fuel')
                           {
                             ?>
                             <option value="mech">Mech</option>
                             <?php
                           }
                           else {
                             ?>
                             <option value="mech">Mech</option>
                             <option value="fuel">fuel</option>
                             <?php
                           }
                            ?>
                          </select>
                        </td>
                        </tr>
            </table>
<?php
}
?>
<script>
var s1=[0,0];
function valPplace1()
{
var name = document.getElementsByName('Pplace')[0];
if(name.value=="")
{
  s1[0]=0;
}
else {
  s1[0]=1;
}
button11();
}
function Sselect()
{
  var s3 = document.getElementsByName('Mstate')[0];
  if(s3.value=="")
  {
    s1[1]=0;
  }
  else {
    s1[1]=1;
  }
  button11();
}

function button11()
{
    var l = s1.length;
    var s=0;
    for(var i=0;i<l;i++)
    {
        s=s+s1[i];
    }
    if(l==s)
    {
        document.getElementById("Psubmit1").disabled = false;
    }
    else
    {
         document.getElementById("Psubmit1").disabled = true;
    }
}
</script>
