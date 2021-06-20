<script>
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
</script>

<?php
require('../fun.php');
if(sessioncheck() == true or isset($_POST['p_id']))
{
$con = connect();
$lid=$_POST['p_id'];


$q2=mysqli_query($con,"SELECT * FROM `tbl_police` WHERE `Pid`=$lid")or die("Sign in Error q1");
$r1 = mysqli_fetch_array($q2);

?>

<table class="table" style="font-size:15px">
                    <tr>
                        <th valign="top">Place</th>
                        <td><input type="text" id="Pplace" name="Pplace" value="<?php echo $r1['Pplace']; ?>" onblur="valPplace1();" onkeypress="return /[a-zA-Z ]/i.test(event.key)" class="form-control" placeholder="Enter Town / City name" /></td>
                    </tr>
                    <tr>
                        <th valign="top">Address</th>
                        <td><textarea name="Padd" id="Padd" onblur="valPadd1();" type="text" class="form-control" placeholder="Enter your Address" ><?php echo $r1['Padd']; ?></textarea></td>
                    </tr>
                    <tr>
                        <th valign="top">State</th>
                        <td>
                          <select name="Mstate" id="Mstate" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" name="Mstate" required >
                          <option value="">--Select--</option>



                          <?php
                          $s=$r1['state_id'];
                          $q22=mysqli_query($con,"SELECT * FROM `tbl_states` WHERE `state_id`=$s")or die("Sign in Error q1");
                          $r11= mysqli_fetch_array($q22);
                          ?>
                          <option value="<?php echo $r11['state_id']; ?>" selected="selected" ><?php echo $r11['Name']; ?></option>
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
                        </td>
                        </tr>
                        <tr>
                        <th valign="top">District</th>
                        <td><select name="Mdist" id="Mdist" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" id="Mdist" required />
                        <!-- <option value="">--Select state first--</option> -->
                        <?php
                        $c=$r1['city_id'];
                        $q23=mysqli_query($con,"SELECT * FROM `tbl_cities` WHERE `city_id`=$c")or die("Sign in Error q1");
                        $r12= mysqli_fetch_array($q23);
                        ?>
                        <option value="<?php echo $r12['city_id']; ?>" selected="selected" ><?php echo $r12['Name']; ?></option>
                        </select>
                        </td>
                    </tr>

                    <tr>
                        <th valign="top">Pincode</th>
                        <td><input type="text" onblur="valPpin1();" id="Ppin" name="Ppin" value="<?php echo $r1['Ppin']; ?>" onkeypress="return /[0-9]/i.test(event.key)" class="form-control" placeholder="Enter Pincode" /></td>
                      </tr>
                      <tr>
                        <th valign="top">Contact Number</th>
                        <td><input type="text" onblur="valPphno1();" id="Pphno" value="<?php echo $r1['Pphno']; ?>" name="Pphno" onkeypress="return /[0-9]/i.test(event.key)" class="form-control" placeholder="Enter Mobile Number" /></td>
                    </tr>


                    <!-- <tr>
                   <td valign="top">
                       <input type="submit" disabled="true" id="Psubmit" value="Add Station" class="btn btn-primary" />
                   </td>
                   <td></td>
               </tr> -->
            </table>
<?php
}
?>
