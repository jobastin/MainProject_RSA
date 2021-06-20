function checkEmail(text){
    return (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(text))
}
function checkPhone(number){
    return (/^(6|7|8|9)[0-9]{9}$/.test(number));
}
function checkNumber(number){
    return (/^[0-9]{1,}$/.test(number));
}
function checkName(text){
    return (/^[A-Za-z ]+$/.test(text));
}
function checkAddress(text){
    return (/[A-Za-z0-9, ():-]+$/.test(text));
}
function checkPin(number){
    return (/^[0-9]{6}$/.test(number));
}
function checkLand(number){
    return (/^[0-9]{11}$/.test(number));
}
function checkPassword(text){
    return (/^.{8,}$/.test(text));
}
function checkLicense(text){
    return (/[A-Za-z0-9 -]+$/.test(text));
}
function checkLocation(text){
    return (/^-?[0-9]\d*(\.\d+)?$/.test(text));
}


// user registration page validation


var c2=[0,0,0,0,0,0,0,0,0,0,0,0];

function valFCname()
{
  var uname = document.getElementsByName('FCname')[0];
  if (checkName(uname.value)){
      document.getElementById("FCname").style.borderColor="#eef2f8";
      //document.getElementById("vuname").innerHTML = "";
      document.getElementById("FCname").style.background="#eef2f8";
      c2[0]=1;
  }
  else
      {
         document.getElementById("FCname").style.background="#FFCECE";
         // document.getElementById("FCname").style.borderColor="red";
         //document.getElementById("vuname").innerHTML = "Enter a valid name";
          c2[0]=0;
      }
      button3();
}

function valFphno()
{
    var m = document.getElementsByName('Fphno')[0];
        if (checkPhone(m.value)){
            document.getElementById("Fphno").style.borderColor="#eef2f8";
            document.getElementById("Fphno").style.background="#eef2f8";
            c2[1]=1;
        }
        else
            {
            // document.getElementById("Fphno").style.borderColor = "red";
            document.getElementById("Fphno").style.background="#FFCECE";
            c2[1]=0;
        }
            button3();
}

// function valFemail()
// {
//     var m = document.getElementsByName('Femail')[0];
//         if (checkLicense(m.value)){
//             document.getElementById("Femail").style.borderColor="#eef2f8";
//             c2[2]=1;
//         }
//         else
//             {
//             document.getElementById("Femail").style.borderColor = "red";
//             c2[2]=0;
//         }
//             button3();
// }


function valFlicense()
{
    var m = document.getElementsByName('Flicense')[0];
        if (checkLicense(m.value)){
            document.getElementById("Flicense").style.borderColor="#eef2f8";
            document.getElementById("Flicense").style.background="#eef2f8";
            c2[2]=1;
        }
        else
            {
            // document.getElementById("Flicense").style.borderColor = "red";
            document.getElementById("Flicense").style.background="#FFCECE";
            c2[2]=0;
        }
            button3();
}


function valFadd()
    {
        var ma = document.getElementsByName('Fadd')[0];
            if (checkAddress(ma.value)){
                document.getElementById("Fadd").style.borderColor="#eef2f8";
                document.getElementById("Fadd").style.background="#eef2f8";
                c2[3]=1;
            }
            else
                {
                  document.getElementById("Fadd").style.background = "#FFCECE";
                // document.getElementById("Fadd").style.borderColor = "red";
                c2[3]=0;
                }
                button3();
    }


function valFpin()
{
  var hp = document.getElementsByName('Fpin')[0];
  if (checkPin(hp.value)){
          document.getElementById("Fpin").style.borderColor ="#eef2f8";
          document.getElementById("Fpin").style.background ="#eef2f8";
          c2[4]=1;
          }
          else
          {
          // document.getElementById("Fpin").style.borderColor = "red";
          document.getElementById("Fpin").style.background = "#FFCECE";
          c2[4]=0;
          }
          button3();
        }


        function valFowner()
        {
          var uname = document.getElementsByName('Fowner')[0];
          if (checkName(uname.value)){
              document.getElementById("Fowner").style.borderColor="#eef2f8";
              //document.getElementById("vuname").innerHTML = "";
                document.getElementById("Fowner").style.background="#eef2f8";
              c2[5]=1;
          }
          else
              {
                 // document.getElementById("Fowner").style.borderColor="red";
                 document.getElementById("Fowner").style.background="#FFCECE";
                 //document.getElementById("vuname").innerHTML = "Enter a valid name";
                  c2[5]=0;
              }
              button3();
        }


        function valFOphno()
        {
            var m = document.getElementsByName('FOphno')[0];
                if (checkPhone(m.value)){
                    document.getElementById("FOphno").style.borderColor="#eef2f8";
                    document.getElementById("FOphno").style.background="#eef2f8";
                    c2[6]=1;
                }
                else
                    {
                    // document.getElementById("FOphno").style.borderColor = "red";
                    document.getElementById("FOphno").style.background = "#FFCECE";
                    c2[6]=0;
                }
                    button3();
        }




function valFpassword()
{
  var mu = document.getElementsByName('Fpassword')[0];
  if (checkPassword(mu.value)){
    document.getElementById("Fpassword").style.borderColor = "#eef2f8";
    document.getElementById("Fpass").innerHTML = "";
    document.getElementById("Fpassword").style.background = "#eef2f8";
    c2[7]=1;
    }
    else
    {
      // document.getElementById("Fpassword").style.borderColor = "red";
      document.getElementById("Fpassword").style.background ="#FFCECE";
      document.getElementById("Fpass").innerHTML = "Minimum length 8";
      c2[7]=0;
    }
    button3();
  }

function valFcPassword()
{
  var mc = document.getElementsByName('FcPassword')[0];
  var mu = document.getElementsByName('Fpassword')[0];
  if ((checkPassword(mc.value))&&(mc.value == mu.value)&&(mc.value!= null)){
    document.getElementById("FcPassword").style.borderColor ="#eef2f8";
    document.getElementById("FcPassword").style.background ="#eef2f8";
    c2[8]=1;
  }
  else
  {
    // document.getElementById("FcPassword").style.borderColor ="red";
    document.getElementById("FcPassword").style.background ="#FFCECE";
    c2[8]=0;
  }
  button3();
}

function valFlat()
{
    var m = document.getElementsByName('Flat')[0];
        if (checkLocation(m.value)){
            document.getElementById("Flat").style.borderColor="#eef2f8";
            c2[9]=1;
        }
        else
            {
            document.getElementById("Flat").style.borderColor = "red";
            c2[9]=0;
        }
            button3();
}


function valFlon()
{
    var m = document.getElementsByName('Flon')[0];
        if (checkLocation(m.value)){
            document.getElementById("Flon").style.borderColor="#eef2f8";
            c2[10]=1;
        }
        else
            {
            document.getElementById("Flon").style.borderColor = "red";
            c2[10]=0;
        }
            button3();
}


function button3()
{
    var l = c2.length;
    var s=0;
    for(var i=0;i<l;i++)
    {
        s=s+c2[i];
    }
    if(l==s)
    {
        document.getElementById("Freg").disabled = false;
    }
    else
    {
         document.getElementById("Freg").disabled = true;
    }
}
