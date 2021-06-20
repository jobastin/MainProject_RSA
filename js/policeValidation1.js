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

var c1=[0,0,0,0,0,0];
function valPplace()
{
  var uname = document.getElementsByName('Pplace')[0];
  if (checkName(uname.value)){
      document.getElementById("Pplace").style.borderColor="#eef2f8";
      //document.getElementById("vuname").innerHTML = "";
      c1[0]=1;
  }
  else
      {
         document.getElementById("Pplace").style.borderColor="red";
         //document.getElementById("vuname").innerHTML = "Enter a valid name";
          c1[0]=0;
      }
      button1();
}

function valPadd()
    {
        var ma = document.getElementsByName('Padd')[0];
            if (checkAddress(ma.value)){
                document.getElementById("Padd").style.borderColor="#eef2f8";
                c1[1]=1;
            }
            else
                {
                document.getElementById("Padd").style.borderColor = "red";
                c1[1]=0;
                }
                button1();
    }

    function valPpin()
    {
      var hp = document.getElementsByName('Ppin')[0];
      if (checkPin(hp.value)){
              document.getElementById("Ppin").style.borderColor ="#eef2f8";
              c1[2]=1;
              }
              else
              {
              document.getElementById("Ppin").style.borderColor = "red";
              c1[2]=0;
              }
              button1();
            }

            function valPphno()
            {
                var m = document.getElementsByName('Pphno')[0];
                    if (checkPhone(m.value)){
                        document.getElementById("Pphno").style.borderColor="#eef2f8";
                        c1[4]=1;
                    }
                    else
                        {
                        document.getElementById("Pphno").style.borderColor = "red";
                        c1[4]=0;
                    }
                        button1();
            }

            function valPlat()
            {
                var m = document.getElementsByName('Mlat')[0];
                    if (checkLocation(m.value)){
                        document.getElementById("Mlat").style.borderColor="#eef2f8";
                        c1[5]=1;
                    }
                    else
                        {
                        document.getElementById("Mlat").style.borderColor = "red";
                        c1[5]=0;
                    }
                        button1();
            }

            function valPlon()
            {
                var m = document.getElementsByName('Mlon')[0];
                    if (checkLocation(m.value)){
                        document.getElementById("Mlon").style.borderColor="#eef2f8";
                        c1[3]=1;
                    }
                    else
                        {
                        document.getElementById("Mlon").style.borderColor = "red";
                        c1[3]=0;
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
        document.getElementById("Psubmit").disabled = false;
    }
    else
    {
         document.getElementById("Psubmit").disabled = true;
    }
}

//edit details
var c2=[1,1,1,1];

function valPplace1()
{
  var uname = document.getElementsByName('Pplace')[0];
  if (checkName(uname.value)){
      document.getElementById("Pplace").style.borderColor="#eef2f8";
      //document.getElementById("vuname").innerHTML = "";
      c2[0]=1;
  }
  else
      {
         document.getElementById("Pplace").style.borderColor="red";
         //document.getElementById("vuname").innerHTML = "Enter a valid name";
          c2[0]=0;
      }
      button2();
}


function valPadd1()
    {
        var ma = document.getElementsByName('Padd')[0];
            if (checkAddress(ma.value)){
                document.getElementById("Padd").style.borderColor="#eef2f8";
                c2[1]=1;
            }
            else
                {
                document.getElementById("Padd").style.borderColor = "red";
                c2[1]=0;
                }
                button2();
    }


    function valPpin1()
    {
      var hp = document.getElementsByName('Ppin')[0];
      if (checkPin(hp.value)){
              document.getElementById("Ppin").style.borderColor ="#eef2f8";
              c2[2]=1;
              }
              else
              {
              document.getElementById("Ppin").style.borderColor = "red";
              c2[2]=0;
              }
              button2();
            }

            function valPphno1()
            {
                var m = document.getElementsByName('Pphno')[0];
                    if (checkPhone(m.value)){
                        document.getElementById("Pphno").style.borderColor="#eef2f8";
                        c2[3]=1;
                    }
                    else
                        {
                        document.getElementById("Pphno").style.borderColor = "red";
                        c2[3]=0;
                    }
                        button2();
            }



function button2()
{
    var l = c2.length;
    var s=0;
    for(var i=0;i<l;i++)
    {
        s=s+c2[i];
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
