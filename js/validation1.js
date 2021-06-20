

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
    return (/[A-Za-z0-9, ()]+$/.test(text));
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



// user registration page validation


var c=[0,0,0,0,0,0,0,0];
function valUsername()
{
  var uname = document.getElementsByName('username')[0];
  if (checkName(uname.value)){
      document.getElementById("username").style.borderColor="#eef2f8";
      document.getElementById("username").style.background="#eef2f8";
      //document.getElementById("vuname").innerHTML = "";
      c[0]=1;
  }
  else
      {
         // document.getElementById("username").style.borderColor="red";
         document.getElementById("username").style.background="#FFCECE";
         //document.getElementById("vuname").innerHTML = "Enter a valid name";
          c[0]=0;
      }
      button();
}

function valuserMobile()
{
    var m = document.getElementsByName('phno')[0];
        if (checkPhone(m.value)){
            document.getElementById("phno").style.borderColor="#eef2f8";
            document.getElementById("phno").style.background="#eef2f8";
            c[1]=1;
        }
        else
            {
            // document.getElementById("phno").style.borderColor = "red";
            document.getElementById("phno").style.background="#FFCECE";
            c[1]=0;
        }
            button();
}

function valuserDate() {
    var date = document.getElementById("dob").value;
    var ToDate = new Date();
    if(date == "") {
        // document.getElementById("dob").style.borderColor = "red";
        document.getElementById("dob").style.background="#FFCECE";
        var today = new Date();
        c[2]=0;
    }
     else if (new Date(date).getDate() >= ToDate.getDate()) {
         // document.getElementById("dob").style.borderColor = "red";
         document.getElementById("dob").style.background="#FFCECE";
        c[2]=0;
        }
    else
        {
        document.getElementById("dob").style.borderColor ="#eef2f8";
        document.getElementById("dob").style.background="#eef2f8";
        c[2]=1;
        }
    button();

}

function valuseradd()
    {
        var ma = document.getElementsByName('add')[0];
            if (checkAddress(ma.value)){
                document.getElementById("add").style.borderColor="#eef2f8";
                document.getElementById("add").style.background="#eef2f8";
                c[3]=1;
            }
            else
                {
                // document.getElementById("add").style.borderColor = "red";
                document.getElementById("add").style.background="#FFCECE";
                c[3]=0;
                }
                button();
    }


function valuserPin()
{
  var hp = document.getElementsByName('pin')[0];
  if (checkPin(hp.value)){
          document.getElementById("pin").style.borderColor ="#eef2f8";
          document.getElementById("pin").style.background="#eef2f8";
          c[4]=1;
          }
          else
          {
          // document.getElementById("pin").style.borderColor = "red";
          document.getElementById("pin").style.background="#FFCECE";
          c[4]=0;
          }
          button();
        }

function valuserPasswod()
{
  var mu = document.getElementsByName('pass')[0];
  if (checkPassword(mu.value)){
    document.getElementById("pass").style.borderColor = "#eef2f8";
    document.getElementById("pass").style.background="#eef2f8";
    document.getElementById("vpass").innerHTML = "";
    c[5]=1;
    }
    else
    {
      // document.getElementById("pass").style.borderColor = "red";
      document.getElementById("pass").style.background="#FFCECE";
      document.getElementById("vpass").innerHTML = "Minimum length 8";
      c[5]=0;
    }
    button();
  }

function valuserCPasswod()
{
  var mc = document.getElementsByName('CPass')[0];
  var mu = document.getElementsByName('pass')[0];
  if ((checkPassword(mc.value))&&(mc.value == mu.value)&&(mc.value!= null)){
    document.getElementById("CPass").style.borderColor ="#eef2f8";
    document.getElementById("CPass").style.background="#eef2f8";
    c[6]=1;
  }
  else
  {
    // document.getElementById("CPass").style.borderColor ="red";
    document.getElementById("CPass").style.background="#FFCECE";
    c[6]=0;
  }
  button();
}


function button()
{
    var l = c.length;
    var s=0;
    for(var i=0;i<l;i++)
    {
        s=s+c[i];
    }
    if(l==s)
    {
        document.getElementById("userreg").disabled = false;
    }
    else
    {
         document.getElementById("userreg").disabled = true;
    }
}







//Edit password Admin side

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
