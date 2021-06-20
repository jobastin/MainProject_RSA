function checkName(text){
    return (/^[A-Za-z0-9 -]+$/.test(text));
}
function checkNumber(text){

    return (/^[A-Z]{2}[-][0-9]{1,2}[-][A-Z]{1,2}[-][0-9]{3,4}$/.test(text));
    // return (/^[A-Z]{2}[ -][0-9]{1,2}(?: [A-Z])?(?: [A-Z]*)? [0-9]{4}$/.test(text));
    // return (/^(([A-Za-z]){2,3}(|-)(?:[0-9]){1,2}(|-)(?:[A-Za-z]){2}(|-)([0-9]){1,4})|(([A-Za-z]){2,3}(|-)([0-9]){1,4})+$/.test(text));
}

var c=[0,0,0];

function valVregno()
{
  var uname = document.getElementsByName('Vregno')[0];
  if (checkNumber(uname.value)){
      document.getElementById("Vregno").style.borderColor="#eef2f8";
      //document.getElementById("vuname").innerHTML = "";
      c[0]=1;
  }
  else
      {
         document.getElementById("Vregno").style.borderColor="red";
         //document.getElementById("vuname").innerHTML = "Enter a valid name";
          c[0]=0;
      }
      button();
}

function valVcompany()
{
  var uname1 = document.getElementsByName('Vcompany')[0];
  if (checkName(uname1.value)){
      document.getElementById("Vcompany").style.borderColor="#eef2f8";
      //document.getElementById("vuname").innerHTML = "";
      c[1]=1;
  }
  else
      {
         document.getElementById("Vcompany").style.borderColor="red";
         //document.getElementById("vuname").innerHTML = "Enter a valid name";
          c[1]=0;
      }
      button();
}


function valVmodel()
{
  var uname2 = document.getElementsByName('Vmodel')[0];
  if (checkName(uname2.value)){
      document.getElementById("Vmodel").style.borderColor="#eef2f8";
      //document.getElementById("vuname").innerHTML = "";
      c[2]=1;
  }
  else
      {
         document.getElementById("Vmodel").style.borderColor="red";
         //document.getElementById("vuname").innerHTML = "Enter a valid name";
          c[2]=0;
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
        document.getElementById("Vadd").disabled = false;
    }
    else
    {
         document.getElementById("Vadd").disabled = true;
    }
}
