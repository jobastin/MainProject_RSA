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


var c3=[0,0,0,0,0,0,0,0,0];
//1
function valHname()
{
  var uname = document.getElementsByName('Hname')[0];
  if (checkName(uname.value)){
      document.getElementById("Hname").style.borderColor="#eef2f8";
      //document.getElementById("vuname").innerHTML = "";
      document.getElementById("Hname").style.background="#eef2f8";
      c3[0]=1;
  }
  else
      {
         // document.getElementById("Hname").style.borderColor="red";
         document.getElementById("Hname").style.background="#FFCECE";
         //document.getElementById("vuname").innerHTML = "Enter a valid name";
          c3[0]=0;
      }
      button5();
}

//2
function valHphno()
{
    var m = document.getElementsByName('Hphno')[0];
        if (checkPhone(m.value)){
            document.getElementById("Hphno").style.borderColor="#eef2f8";
            document.getElementById("Hphno").style.background="#eef2f8";
            c3[1]=1;
        }
        else
            {
            // document.getElementById("Hphno").style.borderColor = "red";
            document.getElementById("Hphno").style.background="#FFCECE";
            c3[1]=0;
        }
            button5();
}

function valHadd()
    {
        var ma = document.getElementsByName('Hadd')[0];
            if (checkAddress(ma.value)){
                document.getElementById("Hadd").style.borderColor="#eef2f8";
                document.getElementById("Hadd").style.background="#eef2f8";
                c3[2]=1;
            }
            else
                {
                // document.getElementById("Hadd").style.borderColor = "red";
                document.getElementById("Hadd").style.background = "#FFCECE";
                c3[2]=0;
                }
                button5();
    }

//4
function valHpin()
{
  var hp = document.getElementsByName('Hpin')[0];
  if (checkPin(hp.value)){
          document.getElementById("Hpin").style.borderColor ="#eef2f8";
          document.getElementById("Hpin").style.background ="#eef2f8";
          c3[3]=1;
          }
          else
          {
          // document.getElementById("Hpin").style.borderColor = "red";
          document.getElementById("Hpin").style.background = "#FFCECE";
          c3[3]=0;
          }
          button5();
        }


function valHpassword()
{
  var mu = document.getElementsByName('Hpassword')[0];
  if (checkPassword(mu.value)){
    document.getElementById("Hpassword").style.borderColor = "#eef2f8";
    document.getElementById("Hpass").innerHTML = "";
    document.getElementById("Hpassword").style.background = "#eef2f8";
    c3[4]=1;
    }
    else
    {
      // document.getElementById("Hpassword").style.borderColor = "red";
      document.getElementById("Hpass").innerHTML = "Minimum length 8";
      document.getElementById("Hpassword").style.background ="#FFCECE";
      c3[4]=0;
    }
    button5();
  }

function valHcPassword()
{
  var mc = document.getElementsByName('HcPassword')[0];
  var mu = document.getElementsByName('Hpassword')[0];
  if ((checkPassword(mc.value))&&(mc.value == mu.value)&&(mc.value!= null)){
    document.getElementById("HcPassword").style.borderColor ="#eef2f8";
    document.getElementById("HcPassword").style.background ="#eef2f8";
    c3[5]=1;
  }
  else
  {
    // document.getElementById("HcPassword").style.borderColor ="red";
    document.getElementById("HcPassword").style.background ="#FFCECE";
    c3[5]=0;
  }
  button5();
}

function valHlat()
{
    var m = document.getElementsByName('Hlat')[0];
        if (checkLocation(m.value)){
            document.getElementById("Hlat").style.borderColor="#eef2f8";
            c3[6]=1;
        }
        else
            {
            document.getElementById("Hlat").style.borderColor = "red";
            c3[6]=0;
        }
            button5();
}


function valHlon()
{
    var m = document.getElementsByName('Hlon')[0];
        if (checkLocation(m.value)){
            document.getElementById("Hlon").style.borderColor="#eef2f8";
            c3[7]=1;
        }
        else
            {
            document.getElementById("Hlon").style.borderColor = "red";
            c3[7]=0;
        }
            button5();
}


function button5()
{
    var l = c3.length;
    var s=0;
    for(var i=0;i<l;i++)
    {
        s=s+c3[i];
    }
    if(l==s)
    {
        document.getElementById("Hreg").disabled = false;
    }
    else
    {
         document.getElementById("Hreg").disabled = true;
    }
}
