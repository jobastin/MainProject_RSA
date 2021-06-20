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


var c1=[0,0,0,0,0,0,0,0,0,0,0];
function valMname()
{
  var uname = document.getElementsByName('Mname')[0];
  if (checkName(uname.value)){
      document.getElementById("Mname").style.borderColor="#eef2f8";
      document.getElementById("Mname").style.background="#eef2f8";
      //document.getElementById("vuname").innerHTML = "";
      c1[0]=1;
  }
  else
      {
         document.getElementById("Mname").style.background="#FFCECE";
         //document.getElementById("vuname").innerHTML = "Enter a valid name";
          c1[0]=0;
      }
      button1();
}

function valMphno()
{
    var m = document.getElementsByName('Mphno')[0];
        if (checkPhone(m.value)){
            document.getElementById("Mphno").style.borderColor="#eef2f8";
            document.getElementById("Mphno").style.background="#eef2f8";
            c1[1]=1;
        }
        else
            {
            //document.getElementById("Mphno").style.borderColor = "red";
            document.getElementById("Mphno").style.background="#FFCECE";
            c1[1]=0;
        }
            button1();
}

function valMlicense()
{
    var m = document.getElementsByName('Mlicense')[0];
        if (checkLicense(m.value)){
            document.getElementById("Mlicense").style.borderColor="#eef2f8";
            document.getElementById("Mlicense").style.background="#eef2f8";
            c1[2]=1;
        }
        else
            {
            //document.getElementById("Mlicense").style.borderColor = "red";
            document.getElementById("Mlicense").style.background="#FFCECE";
            c1[2]=0;
        }
            button1();
}


function valMaddress()
    {
        var ma = document.getElementsByName('Maddress')[0];
            if (checkAddress(ma.value)){
                document.getElementById("Maddress").style.borderColor="#eef2f8";
                document.getElementById("Maddress").style.background="#eef2f8";
                c1[3]=1;
            }
            else
                {
                //document.getElementById("Maddress").style.borderColor = "red";
                document.getElementById("Maddress").style.background = "#FFCECE";
                c1[3]=0;
                }
                button1();
    }


function valMpin()
{
  var hp = document.getElementsByName('Mpin')[0];
  if (checkPin(hp.value)){
          document.getElementById("Mpin").style.borderColor ="#eef2f8";
          document.getElementById("Mpin").style.background ="#eef2f8";
          c1[4]=1;
          }
          else
          {
          //document.getElementById("Mpin").style.borderColor = "red";
          document.getElementById("Mpin").style.background = "#FFCECE";
          c1[4]=0;
          }
          button1();
        }


        function valMowner()
        {
          var uname = document.getElementsByName('Mowner')[0];
          if (checkName(uname.value)){
              document.getElementById("Mowner").style.borderColor="#eef2f8";
              document.getElementById("Mowner").style.background="#eef2f8";
              //document.getElementById("vuname").innerHTML = "";
              c1[5]=1;
          }
          else
              {
                 //document.getElementById("Mowner").style.borderColor="red";
                 document.getElementById("Mowner").style.background="#FFCECE";
                 //document.getElementById("vuname").innerHTML = "Enter a valid name";
                  c1[5]=0;
              }
              button1();
        }


        function valMOphno()
        {
            var m = document.getElementsByName('MOphno')[0];
                if (checkPhone(m.value)){
                    document.getElementById("MOphno").style.borderColor="#eef2f8";
                    document.getElementById("MOphno").style.background="#eef2f8";
                    c1[6]=1;
                }
                else
                    {
                    //document.getElementById("MOphno").style.borderColor = "red";
                    document.getElementById("MOphno").style.background = "#FFCECE";
                    c1[6]=0;
                }
                    button1();
        }




function valMpassword()
{
  var mu = document.getElementsByName('Mpassword')[0];
  if (checkPassword(mu.value)){
    document.getElementById("Mpassword").style.borderColor = "#eef2f8";
    document.getElementById("Mpass").innerHTML = "";
    document.getElementById("Mpassword").style.background = "#eef2f8";
    c1[7]=1;
    }
    else
    {
      //document.getElementById("Mpassword").style.borderColor = "red";
      document.getElementById("Mpass").innerHTML = "Minimum length 8";
      document.getElementById("Mpassword").style.background ="#FFCECE";
      c1[7]=0;
    }
    button1();
  }

function valMcPassword()
{
  var mc = document.getElementsByName('McPassword')[0];
  var mu = document.getElementsByName('Mpassword')[0];
  if ((checkPassword(mc.value))&&(mc.value == mu.value)&&(mc.value!= null)){
    document.getElementById("McPassword").style.borderColor ="#eef2f8";
    document.getElementById("McPassword").style.background ="#eef2f8";
    c1[8]=1;
  }
  else
  {
    //document.getElementById("McPassword").style.borderColor ="red";
    document.getElementById("McPassword").style.background ="#FFCECE";
    c1[8]=0;
  }
  button1();
}

function valMlon()
{
    var m = document.getElementsByName('Mlon')[0];
        if (checkLocation(m.value)){
            document.getElementById("Mlon").style.borderColor="#eef2f8";
            c1[9]=1;
        }
        else
            {
            document.getElementById("Mlon").style.borderColor = "red";
            c1[9]=0;
        }
            button1();
}


function valMlat()
{
    var m = document.getElementsByName('Mlat')[0];
        if (checkLocation(m.value)){
            document.getElementById("Mlat").style.borderColor="#eef2f8";
            c1[10]=1;
        }
        else
            {
            document.getElementById("Mlat").style.borderColor = "red";
            c1[10]=0;
        }
            button1();
}


function button1()
{
    var l = c1.length;
    var s=0;
    for(var i=0;i<l;i++)
    {
        s=s+c1[i];
    }
    if(l==s)
    {
        document.getElementById("Mreg").disabled = false;
    }
    else
    {
         document.getElementById("Mreg").disabled = true;
    }
}
