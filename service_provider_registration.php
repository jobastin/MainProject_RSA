<?php
require('fun.php');
sessiondeleteotp();
sessiondeletetime();
$con = connect();
?>

<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Service Provider Registration</title>
        <link rel="shortcut icon" href="image/favicon.png" type="image/png">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="msapplication-TileColor" content="#dd3d31">
        <meta name="theme-color" content="#dd3d31">

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="js\MechValidation1.js"></script>
        <script src="js\FuelValidation1.js"></script>
        <script src="js\HospitalValidation1.js"></script>
    <link id="sb-website-styles-css" rel="stylesheet" href="css/styles.css">
    <link id="sb-website-dynamic-css" rel="stylesheet" href="css/styles-admin.css">
    <link rel="stylesheet" href="css/service_provider_reg.css">
    <link rel="canonical" href="register.html">
    <style>
    #pageloader
    {
    background: rgba( 255, 255, 255, 0.8 );
    display: none;
    height: 100%;
    position: fixed;
    width: 100%;
    z-index: 9999;
    }

    #pageloader img
    {
    left: 50%;
    margin-left: -32px;
    margin-top: -32px;
    position: absolute;
    top: 50%;
    }

    #myMap {
   height: 350px;
   width: 790px;
}
#myMap1 {
height: 350px;
width: 790px;
}
#myMap2 {
height: 350px;
width: 790px;
}
    </style>

    <style ng-transition="serverApp">[_nghost-sc110]{position:fixed;bottom:0;right:0;margin:.5em;z-index:1200;width:350px}</style><style ng-transition="serverApp">#overlay[_ngcontent-sc112]{display:flex;justify-content:center;position:fixed;top:0;left:0;width:100vw;height:100%;min-height:100vh;z-index:1090;background-color:rgba(0,0,0,.5)}
    </style>
    <style ng-transition="serverApp">[_nghost-sc132]{display:contents}</style>
    <style ng-transition="serverApp">.btn-auth[_ngcontent-sc190]{font-size:.75rem;font-weight:500}
    </style>

    <script>
    function mechView()
    {
      document.getElementById("mechReg").style.display ="inline";
      document.getElementById("fuelReg").style.display ="none";
      document.getElementById("hospitalReg").style.display ="none";
      // document.getElementById("n1").style.color = "blue";
      // document.getElementById("n2").style.color = "#69717a";
      // document.getElementById("n2").style.color = "#69717a";
      // document.getElementByClassName("").style.opacity = "1";
    }
    function fuelView()
    {
      document.getElementById("mechReg").style.display ="none";
      document.getElementById("fuelReg").style.display ="inline";
      document.getElementById("hospitalReg").style.display ="none";
    }
    function hospitalView()
    {
      document.getElementById("mechReg").style.display ="none";
      document.getElementById("fuelReg").style.display ="none";
      document.getElementById("hospitalReg").style.display ="inline";
    }

    //for district selection
    $(document).ready(function(){
      $('#Mstate').on('change', function(){
       var countryID = $(this).val();
       if(countryID){
           $.ajax({
               type:'post',
               url:"district.php",
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

// district selection for fule station
$(document).ready(function(){
      $('#Fstate').on('change', function(){
       var countryID = $(this).val();
       if(countryID){
           $.ajax({
               type:'post',
               url:"district.php",
               data:'st_id='+countryID,
               success:function(html){
                   $('#Fdist').html(html);
               }
           });
       }else{
           $('#Fdist').html('<option value="">Select state first</option>');
       }
   });
});

// district selection for Hospital
$(document).ready(function(){
      $('#Hstate').on('change', function(){
       var countryID = $(this).val();
       if(countryID){
           $.ajax({
               type:'post',
               url:"district.php",
               data:'st_id='+countryID,
               success:function(html){
                   $('#Hdist').html(html);
               }
           });
       }else{
           $('#Hdist').html('<option value="">Select state first</option>');
       }
   });
});


//map validation for mechanical
$(document).ready(function(){
  $('div.map1').mouseleave(function(){
      var m1 = document.getElementsByName('Mlon')[0];
      var m2 = document.getElementsByName('Mlat')[0];
      if(m1.value==75.79432069140624 && m2.value==11.255465261761628)
      {
        c1[10]=0;
        c1[9]=0;
        button1();
        document.getElementById("myMap").style.border= "1px solid red";
      }
      else {
        c1[10]=1;
        c1[9]=1;
        button1();
        document.getElementById("myMap").style.borderColor = "#eef2f8";
      }
  });

//mechanical form empty validation
  $('#Mreg').click(function (e) {
              var isValid = true;
              $('#McPassword,#Mpassword,#MOphno,#Mowner,#Mpin,#Maddress,#Mstate,#Mdist,#Mlicense,#Memail,#Mphno,#Mname').each(function () {
                  if ($.trim($(this).val()) == '') {
                      isValid = false;
                      $(this).css({
                          "border": "1px solid red",
                          // "background": "#FFCECE"
                      });
                  }
                  else {
                      $(this).css({
                          "border": "",
                          "background": ""
                      });
                  }
              });
              if (isValid == false)
              {
                  e.preventDefault();
                }
                else {
                  button1();
                }
          });



});





//map validation for fuel station
$(document).ready(function(){
  $('div.map2').mouseleave(function(){
      var f1 = document.getElementsByName('Flon')[0];
      var f2 = document.getElementsByName('Flat')[0];
      if(f1.value==75.79432069140624 && f2.value==11.255465261761628)
      {
        c2[10]=0;
        c2[9]=0;
        button3();
        document.getElementById("myMap1").style.border= "1px solid red";
      }
      else {
        c2[10]=1;
        c2[9]=1;
        button3();
        document.getElementById("myMap1").style.borderColor = "#eef2f8";
      }
  });

});



//map validation for hospital
$(document).ready(function(){
  $('div.map3').mouseleave(function(){
      var h1 = document.getElementsByName('Hlon')[0];
      var h2 = document.getElementsByName('Hlat')[0];
      if(h1.value==75.79432069140624 && h2.value==11.255465261761628)
      {
        c3[6]=0;
        c3[7]=0;
        button5();
        document.getElementById("myMap2").style.border= "1px solid red";
      }
      else {
        c3[6]=1;
        c3[7]=1;
        button5();
        document.getElementById("myMap2").style.borderColor = "#eef2f8";
      }
  });


  //Hospital form empty validation
    $('#Hreg').click(function (e) {
                var isValid = true;
                $('#HcPassword,#Hpassword,#Hpin,#Hadd,#Hemail,#Hstate,#Hdist,#Hphno,#Hname').each(function () {
                    if ($.trim($(this).val()) == '') {
                        isValid = false;
                        $(this).css({
                            "border": "1px solid red",
                            // "background": "#FFCECE"
                        });
                    }
                    else {
                        $(this).css({
                            "border": "",
                            "background": ""
                        });
                    }
                });
                if (isValid == false)
                {
                    e.preventDefault();
                  }
                  else {
                    button5();
                  }
            });
});




//map validation for hospital
$(document).ready(function(){
  $('div.map3').mouseleave(function(){
      var f1 = document.getElementsByName('Hlon')[0];
      var f2 = document.getElementsByName('Hlat')[0];
      if(f1.value==75.79432069140624 && f2.value==11.255465261761628)
      {
        c2[10]=0;
        c2[9]=0;
        button3();
        document.getElementById("myMap1").style.border= "1px solid red";
      }
      else {
        c2[10]=1;
        c2[9]=1;
        button3();
        document.getElementById("myMap1").style.borderColor = "#eef2f8";
      }
  });

//fuel form empty validation
  $('#Freg').click(function (e) {
              var isValid = true;
              $('#FcPassword,#Fpassword,#FOphno,#Fowner,#Fpin,#Fadd,#Fstate,#Fdist,#Flicense,#Femail,#Fphno,#FCname').each(function () {
                  if ($.trim($(this).val()) == '') {
                      isValid = false;
                      $(this).css({
                          "border": "1px solid red",
                          // "background": "#FFCECE"
                      });
                  }
                  else {
                      $(this).css({
                          "border": "",
                          "background": ""
                      });
                  }
              });
              if (isValid == false)
              {
                  e.preventDefault();
                }
                else {
                  button1();
                }
          });

});






    </script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHTWkA5K-6EpKCyTPcdS3ONyCxDBqJ74o">
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
    </script>

    <!-- mechanical registration -->
    <script type="text/javascript">
    var map;
    var marker;
    var myLatlng = new google.maps.LatLng(11.255465261761628,75.79432069140624);
    var geocoder = new google.maps.Geocoder();
    var infowindow = new google.maps.InfoWindow();
    function initialize(){
    var mapOptions = {
    zoom: 18,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("myMap"), mapOptions);

    marker = new google.maps.Marker({
    map: map,
    position: myLatlng,
    draggable: true
    });

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
    google.maps.event.addDomListener(window, 'load', initialize);


    </script>

    <!-- fuel registration -->
    <script type="text/javascript">
    var map;
    var marker;
    var myLatlng = new google.maps.LatLng(11.255465261761628,75.79432069140624);
    var geocoder = new google.maps.Geocoder();
    var infowindow = new google.maps.InfoWindow();
    function initialize(){
    var mapOptions = {
    zoom: 18,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("myMap1"), mapOptions);

    marker = new google.maps.Marker({
    map: map,
    position: myLatlng,
    draggable: true
    });

    geocoder.geocode({'latLng': myLatlng }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
    if (results[0]) {
    $('#Flat,#Flon').show();
    $('#address').val(results[0].formatted_address);
    $('#Flat').val(marker.getPosition().lat());
    $('#Flon').val(marker.getPosition().lng());
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
    $('#Flat').val(marker.getPosition().lat());
    $('#Flon').val(marker.getPosition().lng());
    infowindow.setContent(results[0].formatted_address);
    infowindow.open(map, marker);
    }
    }
    });
    });

    }
    google.maps.event.addDomListener(window, 'load', initialize);


    </script>



    <!-- Hospital registration -->
    <script type="text/javascript">
    var map;
    var marker;
    var myLatlng = new google.maps.LatLng(11.255465261761628,75.79432069140624);
    var geocoder = new google.maps.Geocoder();
    var infowindow = new google.maps.InfoWindow();
    function initialize(){
    var mapOptions = {
    zoom: 18,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("myMap2"), mapOptions);

    marker = new google.maps.Marker({
    map: map,
    position: myLatlng,
    draggable: true
    });

    geocoder.geocode({'latLng': myLatlng }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
    if (results[0]) {
    $('#Hlat,#Hlon').show();
    $('#address').val(results[0].formatted_address);
    $('#Hlat').val(marker.getPosition().lat());
    $('#Hlon').val(marker.getPosition().lng());
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
    $('#Hlat').val(marker.getPosition().lat());
    $('#Hlon').val(marker.getPosition().lng());
    infowindow.setContent(results[0].formatted_address);
    infowindow.open(map, marker);
    }
    }
    });
    });

    }
    google.maps.event.addDomListener(window, 'load', initialize);


    </script>




    </head>

    <body>

      <!-- Loader -->
      <div id="pageloader">
         <img src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif" alt="processing..." />
      </div>


        <div _ngcontent-sc159="" id="layoutAuthentication" class="bg-primary">
        <div _ngcontent-sc159="" id="layoutAuthentication_content">
        <main _ngcontent-sc159=""><div _ngcontent-sc194="" class="container">
        <div _ngcontent-sc194="" class="row justify-content-center">
        <sbpro-page-card _ngcontent-sc194="" size="large" _nghost-sc132="">
        <div _ngcontent-sc132="" class="col-xl-10 col-lg-12">
        <div _ngcontent-sc132="" class="card border my-5">
        <div _ngcontent-sc194="" class="card-body p-5 text-center">
        <a href="index.html">
        <img _ngcontent-sc205="" src="image/favicon.png" style="height: 7rem; width: 7rem;"></a>

        <div _ngcontent-sc194="" class="row justify-content-center"><div _ngcontent-sc194="" class="col-lg-8 mb-4">
        <h1 _ngcontent-sc194="">Roadside Assistance</h1>

        <h2 _ngcontent-sc194="">Sign up</h2>
<!--        <p _ngcontent-sc194="" class="mb-0">Join our community of designers and developers and manage your purchases, favorite themes and snippets, comments, and more!</p>-->
        </div>
        </div>
        </div>
        <hr _ngcontent-sc194="" class="my-0">
        <div _ngcontent-sc194="" class="card-body p-5">
        <div _ngcontent-sc194="" class="text-center small text-muted mb-4">
        </div>
        <sbpro-register-form _ngcontent-sc194="" _nghost-sc193="">
        <form _ngcontent-sc193="" novalidate="" class="ng-untouched ng-pristine ng-invalid">
          <div _ngcontent-sc193="" class="form-group">
          <label _ngcontent-sc193="" for="emailInput" class="text-gray-600 small"><h5>Register as (choose option):</h5></label>
          <div class="cc-selector">
          <center>
          <table>
          <tr>
          <td id="p1">
          <!-- <input id="mech" type="radio" name="service_provider" value="Mechanical" /> -->
          <a href="#mechReg" onclick="mechView()"><label class="drinkcard-cc mech" for="visa"></label></a>
          </td>
          <td style="width:50%"></td>
          <td>
          <!-- <input id="fuel" type="radio" name="service_provider" value="Fuel Station" /> -->
          <a href="#fuelReg" onclick="fuelView()"><label class="drinkcard-cc fuel" for="mastercard"></label></a>
          </td>
          <td style="width:50%"></td>
          <td>
          <!-- <input id="hospital" type="radio" name="service_provider" value="Hospital" /> -->
          <a href="#hospitalReg" onclick="hospitalView()"><label class="drinkcard-cc hospital" for="hospital"></label></a>
          </td>
          </tr>
          <tr>
            <td id="n1">Mechanical Shop</td>
            <td style="width:50%"></td>
            <td id="n2">Fuel Station</td>
            <td style="width:50%"></td>
            <td id="n3">Hospital</td>
          </tr>
        </table>
        </form>
      </center>
      </div>
      </div>


<!-- Mechanical Shop Registration page -->
<div id="mechReg" style="display:none;">
  <hr>
        <form _ngcontent-sc193="" class="ng-untouched ng-pristine ng-invalid" id="form1" action="php/MechReg.php" method="post">
        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Mname" class="text-gray-600 small">Name of the Shop</label>
        <input _ngcontent-sc193="" id="Mname" name="Mname" onblur="valMname();" type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[a-zA-Z ]/i.test(event.key)" placeholder="Enter name of shop" required />
        </div>
        </div>
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Mphno" class="text-gray-600 small">Phone Number</label>
        <input _ngcontent-sc193="" id="Mphno" name="Mphno" type="text" onblur="valMphno();" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[0-9]/i.test(event.key)" placeholder="Enter shop Mobile Number" required />
        </div>
        </div>
        </div>
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Memail" class="text-gray-600 small">Email address</label>
        <input _ngcontent-sc193="" id="Memail" name="Memail" type="email" onblur="valMemail();"  class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" placeholder="example@something.com" required />
        <div _ngcontent-sc193="" id="MEmail1"></div>
        </div>
        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Mlicense" class="text-gray-600 small">Shop License Number</label>
        <input _ngcontent-sc193="" name="Mlicense" id="Mlicense" type="text" onblur="valMlicense();" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[0-9A-Za-z]/i.test(event.key)" placeholder="Enter Shop License Number" required/>
        </div>
        </div>
        </div>

        <label _ngcontent-sc193="" class="text-gray-600 small">Types Of Vehicle Serviced</label>
        <br>

        <div _ngcontent-sc193="" class="form-group d-flex align-items-center justify-content-between">
        <div _ngcontent-sc193="" class="custom-control custom-control-solid custom-checkbox">
        <table>
        <tr>
        <td>
        <input _ngcontent-sc193="" id="Mtwo" checked="true" name="Mtwo" type="checkbox" class="custom-control-input small ng-untouched ng-pristine ng-invalid require-one">
        <label _ngcontent-sc193="" for="Mtwo" class="custom-control-label">Two Wheeler</label>
        </td>
        <td style="width:150px"></td>
        <td>
        <input _ngcontent-sc193="" id="Mfour" checked="true" name="Mfour" type="checkbox" class="custom-control-input small ng-untouched ng-pristine ng-invalid require-one">
        <label _ngcontent-sc193="" for="Mfour" class="custom-control-label">Four Wheeler</label>
        </td>
        <td style="width:150px"></td>
        <td>
        <input _ngcontent-sc193="" id="Mheavy" checked="true" name="Mheavy" type="checkbox" class="custom-control-input small ng-untouched ng-pristine ng-invalid require-one">
        <label _ngcontent-sc193="" for="Mheavy" class="custom-control-label">Heavy Vehicle</label>
        </td>
        </tr>
        <tr>
          <td colspan="3" id="checkMessage">
          </td>
        </tr>
        </table>
        </div>
        </div>

        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Maddress" class="text-gray-600 small">Address</label>
        <textarea _ngcontent-sc193="" id="Maddress" name="Maddress" type="text" onblur="valMaddress();" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid"></textarea>
        </div>
        </div>
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Mpin" class="text-gray-600 small">Pincode</label>
        <input _ngcontent-sc193="" id="Mpin" name="Mpin" type="text" onblur="valMpin();" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" placeholder="Eg : 673571" onkeypress="return /[0-9]/i.test(event.key)" required />
        </div>
        </div>
        </div>
        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Mstate" class="text-gray-600 small">State</label>
        <select name="Mstate" id="Mstate" style="padding:.75rem 1.125rem;" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" name="Mstate" required />
        <option value="">--Select--</option>

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
        </div>
        </div>
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Mdist" class="text-gray-600 small">District</label>
        <select name="Mdist" id="Mdist"  style="padding:.75rem 1.125rem;" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" id="Mdist" required />
        <option value="">--Select state first--</option>
        </select>
        </div>
        </div>
        </div>


        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Mowner" class="text-gray-600 small">Name of Owner</label>
        <input _ngcontent-sc193="" id="Mowner" name="Mowner" onblur="valMowner();" type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[a-zA-Z ]/i.test(event.key)" placeholder="Enter name of Owner" required/>
        </div>
        </div>
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="MOphno" class="text-gray-600 small">Owner's Phone Number</label>
        <input _ngcontent-sc193="" id="MOphno"  name="MOphno" onblur="valMOphno();" type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[0-9]/i.test(event.key)" placeholder="Enter Your Mobile Number" required/>
        </div>
        </div>
        </div>
        <p>**Information from Google Map</p>


        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="myMap" class="text-gray-600 small">Select Your location in Map</label>
        <div id="myMap" class="map1"></div>
        </div>
        </div>
        </div>




        <div _ngcontent-sc193="" class="form-row" style="display:none">
          <!--  -->
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Mlat" class="text-gray-600 small">Latitude</label>
        <input _ngcontent-sc193="" id="Mlat" name="Mlat" type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[0-9.-]/i.test(event.key)" placeholder="Enter Latitude Information from Google Map" required />
        <!-- onfocusin="valMlat();" -->
        </div>
        </div>
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Mlon" class="text-gray-600 small">Longitude</label>
        <input _ngcontent-sc193="" id="Mlon" name="Mlon" type="text"  class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[0-9.-]/i.test(event.key)" placeholder="Enter Longitude Information from Google Map" required />
        <!-- onchange="valMlon();" -->
        </div>
        </div>
        </div>
        <br>

        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Mpassword" class="small text-muted">Password</label>
        <input _ngcontent-sc193="" id="Mpassword" name="Mpassword" onblur="valMpassword();" type="password" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" placeholder="********" required />
        <div _ngcontent-sc193="" id="Mpass"></div>
        </div>
        </div>
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="McPassword" class="text-gray-600 small">Confirm Password</label>
        <input _ngcontent-sc193="" id="McPassword" name="McPassword" onblur="valMcPassword();" type="password" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" placeholder="********" required />
        </div>
        </div>
        </div>
        <div _ngcontent-sc193="" class="form-group d-flex align-items-center justify-content-between">

        <button _ngcontent-sc193="" id="Mreg"  type="submit" class="btn btn-primary">Register</button>
        </div>
        </form>
      </div>
<!-- Mechanical Shop Registration page ends -->



<!-- fule station Registration page -->
<div id="fuelReg" style="display:none;">
  <hr>
        <form _ngcontent-sc193="" class="ng-untouched ng-pristine ng-invalid" id="form2" method="post" action="php/FuelReg.php">
        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="FCname" class="text-gray-600 small">Comany Name</label>
        <input _ngcontent-sc193="" id="FCname" name="FCname" onblur="valFCname();" type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[a-zA-Z ]/i.test(event.key)" placeholder="Enter Company name" required />
        </div>
        </div>
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Fphno" class="text-gray-600 small">Phone Number</label>
        <input _ngcontent-sc193="" id="Fphno" name="Fphno" onblur="valFphno();" type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid"onkeypress="return /[0-9]/i.test(event.key)" placeholder="Enter shop Mobile Number" required />
        </div>
        </div>
        </div>
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Femail" class="text-gray-600 small">Email address</label>
        <input _ngcontent-sc193="" id="Femail" name="Femail" type="email" onblur="valFemail();" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" placeholder="example@something.com" required />
        <div _ngcontent-sc193="" id="FEmail1"></div>
        </div>
        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Flicense" class="text-gray-600 small">License Number</label>
        <input _ngcontent-sc193="" id="Flicense" name="Flicense" onblur="valFlicense();" type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[0-9A-Za-z]/i.test(event.key)" placeholder="Enter Shop License Number" required />
        </div>
        </div>
        </div>

        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Fadd" class="text-gray-600 small">Address</label>
        <textarea _ngcontent-sc193="" id="Fadd" name="Fadd" onblur="valFadd();" type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" ></textarea>
        </div>
        </div>

        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Fpin" class="text-gray-600 small">Pincode</label>
        <input _ngcontent-sc193="" id="Fpin" name="Fpin" onblur="valFpin();" type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" placeholder="Eg : 673571" onkeypress="return /[0-9]/i.test(event.key)" required>
        </div>
        </div>
        </div>

        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Fstate" class="text-gray-600 small">State</label>
        <select name="Fstate" id="Fstate" style="padding:.75rem 1.125rem;"  class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" id="Fstate" required />
        <option value="">--Select--</option>
        <?php
                $res1=mysqli_query($con,"SELECT `state_id`,`Name` FROM `tbl_states` WHERE `status`=1 ORDER BY `Name` ASC")or die("Sign in Error");
                while($s1 = mysqli_fetch_array($res1))
                {
                ?>
                <option value="<?php echo $s1['state_id']; ?>" ><?php echo $s1['Name']; ?></option>
                <?php
              }
        ?>

        </select>
        </div>
        </div>

        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Fdist" class="text-gray-600 small">District</label>
        <select name="Fdist" id="Fdist" style="padding:.75rem 1.125rem;" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" id="Fdist" required />
        <option value="">--Select--</option>
        </select>
        </div>
        </div>
        </div>

        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Fowner" class="text-gray-600 small">Name of Owner</label>
        <input _ngcontent-sc193="" id="Fowner" name="Fowner" onblur="valFowner();" type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[a-zA-Z ]/i.test(event.key)" placeholder="Enter name of Owner" required />
        </div>
        </div>
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="FOphno" class="text-gray-600 small">Owner's Phone Number</label>
        <input _ngcontent-sc193="" id="FOphno" name="FOphno" onblur="valFOphno();" type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[0-9]/i.test(event.key)" placeholder="Enter Your Mobile Number" required />
        </div>
        </div>
        </div>
        <p>**Information from Google Map</p>



        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="myMap1" class="text-gray-600 small">Select Your location in Map</label>
        <div id="myMap1" class="map2"></div>
        </div>
        </div>
        </div>






        <div _ngcontent-sc193="" class="form-row" style="display:none">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Flat" class="text-gray-600 small">Latitude</label>
        <input _ngcontent-sc193="" id="Flat" name="Flat"  type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[0-9.-]/i.test(event.key)" placeholder="Enter Latitude Information from Google Map" required />
        <!-- onblur="valFlat();" -->
        </div>
        </div>
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Flon" class="text-gray-600 small">Longitude</label>
        <input _ngcontent-sc193="" id="Flon" name="Flon" type="text" onkeypress="return /[0-9.-]/i.test(event.key)" placeholder="Enter Longitude Information from Google Map" required class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" />
        <!-- onblur="valFlon();" -->
        </div>
        </div>
        </div>
        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Fpassword" class="small text-muted">Password</label>
        <input _ngcontent-sc193="" id="Fpassword" name="Fpassword" onblur="valFpassword();" type="password" placeholder="********" required class="form-control form-control-solid ng-untouched ng-pristine ng-invalid">
        <div _ngcontent-sc193="" id="Fpass"></div>
        </div>
        </div>
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="FcPassword" class="text-gray-600 small">Confirm Password</label>
        <input _ngcontent-sc193="" id="FcPassword" name="FcPassword" onblur="valFcPassword();" type="password" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" required />
        </div>
        </div>
        </div>
        <div _ngcontent-sc193="" class="form-group d-flex align-items-center justify-content-between">
        <button _ngcontent-sc193="" id="Freg" type="submit"  class="btn btn-primary">Register</button>
        </div>
        </form>
      </div>
<!-- fuel station Registration page ends -->


<!-- Hospital registration Registration page -->
<div id="hospitalReg" style="display:none;">
  <hr>
        <form _ngcontent-sc193="" class="ng-untouched ng-pristine ng-invalid" method="post" action="php/HospitalReg.php" id="form3" >
        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Hname" class="text-gray-600 small">Name of Hospital</label>
        <input _ngcontent-sc193="" id="Hname" name="Hname" onblur="valHname();" onkeypress="return /[a-zA-Z ]/i.test(event.key)" placeholder="Enter name of Hospital" required type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" />
        </div>
        </div>
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Hphno" class="text-gray-600 small">Phone Number</label>
        <input _ngcontent-sc193="" id="Hphno" name="Hphno" onblur="valHphno();" type="text" onkeypress="return /[0-9]/i.test(event.key)" placeholder="Enter Mobile Number" required class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" value="">
        </div>
        </div>
        </div>

        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Hemail" class="text-gray-600 small">Email address</label>
        <input _ngcontent-sc193="" placeholder="example@something.com" id="Hemail" name="Hemail" onblur="valHemail();" type="email" aria-describedby="emailHelp" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" required />
        <div _ngcontent-sc193="" id="HEmail1"></div>
        </div>

        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Hadd" class="text-gray-600 small">Address</label>
        <textarea _ngcontent-sc193="" id="Hadd" name="Hadd" onblur="valHadd();" type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" required /></textarea>
        </div>
        </div>
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Hpin" class="text-gray-600 small">Pincode</label>
        <input _ngcontent-sc193="" id="Hpin" name="Hpin" onblur="valHpin();" placeholder="Eg : 673571" onkeypress="return /[0-9]/i.test(event.key)" required class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" required />
        </div>
        </div>
        </div>

        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Hstate"  class="text-gray-600 small">State</label>
        <select name="Hstate" id="Hstate" style="padding:.75rem 1.125rem;"  class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" id="Hstate" required />
        <option value="">--Select--</option>
        <?php
                $res2=mysqli_query($con,"SELECT `state_id`,`Name` FROM `tbl_states` WHERE `status`=1 ORDER BY `Name` ASC")or die("Sign in Error");
                while($s2 = mysqli_fetch_array($res2))
                {
                ?>
                <option value="<?php echo $s2['state_id']; ?>" ><?php echo $s2['Name']; ?></option>
                <?php
              }
        ?>

        </select>
        </div>
        </div>

        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Hdist" class="text-gray-600 small">District</label>
        <select name="Hdist" id="Hdist" style="padding:.75rem 1.125rem;" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" id="Hdist" required />
        <option value="">--Select--</option>
        </select>
        </div>
        </div>
        </div>
        <p>**Information from Google Map</p>

        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="myMap1" class="text-gray-600 small">Select Your location in Map</label>
        <div id="myMap2" class="map3"></div>
        </div>
        </div>
        </div>




        <div _ngcontent-sc193="" class="form-row" style="display:none">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Hlat" class="text-gray-600 small">Latitude</label>
        <input _ngcontent-sc193="" id="Hlat" onblur="valHlat();" name="Hlat" type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[0-9.-]/i.test(event.key)" placeholder="Enter Latitude Information from Google Map" required />
        </div>
        </div>
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Hlon" class="text-gray-600 small">Longitude</label>
        <input _ngcontent-sc193="" id="Hlon" name="Hlon" onblur="valHlon();" type="text" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" onkeypress="return /[0-9.-]/i.test(event.key)" placeholder="Enter Longitude Information from Google Map" required />
        </div>
        </div>
        </div>
        <div _ngcontent-sc193="" class="form-row">
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="Hpassword" class="small text-muted">Password</label>
        <input _ngcontent-sc193="" id="Hpassword" name="Hpassword" onblur="valHpassword();" type="password" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" required />
        <div _ngcontent-sc193="" id="Hpass"></div>
        </div>
        </div>
        <div _ngcontent-sc193="" class="col-md-6">
        <div _ngcontent-sc193="" class="form-group">
        <label _ngcontent-sc193="" for="HcPassword" class="text-gray-600 small">Confirm Password</label>
        <input _ngcontent-sc193="" id="HcPassword" name="HcPassword" onblur="valHcPassword();" type="password" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid" required />
        </div>
        </div>
        </div>
        <div _ngcontent-sc193="" class="form-group d-flex align-items-center justify-content-between">
        <button _ngcontent-sc193="" id="Hreg" type="submit" class="btn btn-primary">Register</button>
        </div>
        </form>
      </div>
<!-- hospital Registration page ends -->



        </sbpro-register-form>
        </div>
        <div _ngcontent-sc194="" class="card-body px-5 py-4"><div _ngcontent-sc194="" class="small text-center">Have an account? <a _ngcontent-sc194="" routerlink="../login" href="login.php">Sign in!</a>
        </div>
        </div>
        </div>
        </div>
        </sbpro-page-card>
        </div>
        </div>
        </main>
        </div>
        </div>

        <script>
        // loader on submitting form
          $(document).ready(function(){
            $("#form1").on("submit", function(){
              $("#pageloader").fadeIn();
            });
          });

          $(document).ready(function(){
            $("#form2").on("submit", function(){
              $("#pageloader").fadeIn();
            });
          });

          $(document).ready(function(){
            $("#form3").on("submit", function(){
              $("#pageloader").fadeIn();
            });
          });


          function valMemail()
          {
            jQuery.ajax({
              url: "checkMechEmail.php",
              data:'uemail='+$("#Memail").val(),
              type: "POST",
              success:function(data){
                $("#MEmail1").html(data);
              },
              error:function (){
                alert("error");
              }
            });
        }

        function valFemail()
        {
          jQuery.ajax({
            url: "checkFuelEmail.php",
            data:'uemail='+$("#Femail").val(),
            type: "POST",
            success:function(data){
              $("#FEmail1").html(data);
            },
            error:function (){
              alert("error");
            }
          });
      }

      function valHemail()
      {
        jQuery.ajax({
          url: "checkHospitalEmail.php",
          data:'uemail='+$("#Hemail").val(),
          type: "POST",
          success:function(data){
            $("#HEmail1").html(data);
          },
          error:function (){
            alert("error");
          }
        });
      }


        </script>
</body>
</html>
