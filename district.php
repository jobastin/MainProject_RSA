<?php 
require('fun.php');
$con = connect();
if(!empty($_POST["st_id"])){ 
    ?>
<?php
     $result=mysqli_query($con,"SELECT * FROM `tbl_cities` WHERE `state_id`=".$_POST['st_id']." AND `status`=1 ORDER BY `Name` ASC")or die("Sign in Error");
    if(mysqli_num_rows($result) > 0){ 
        echo '<option value="">Select District</option>'; 
        while($row = mysqli_fetch_array($result)){  
            echo '<option value="'.$row['city_id'].'">'.$row['Name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">District not available</option>'; 
    } 
}
?>