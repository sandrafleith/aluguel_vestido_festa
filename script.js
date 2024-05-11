

function checaCookie()
{
   if (navigator.cookieEnabled == true){
      alert("Cookies permitidos")

    //   document.body.innerHTML = "<h1>Time right now is"
    }
   
   else{
      alert("Cookies bloqueados")
    }
}

 document.onload = checaCookie();

// document.onload= escrever();


 a="8"*"4";

var um = function()
{

    document.body.innerHTML = "<h1>Time right now is"


}


var dois = function()
{
  // if (typeof nomeVar != "undefined")
 
  if (typeof a === 'undefined') { 
    alert("é undefined")
   }

  else {
    alert("nao é undefined")
  
  }




}

function escrever() 

{

  document.body.innerHTML="<h1>oioio"

}

   




