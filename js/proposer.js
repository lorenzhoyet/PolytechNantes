var listMatchs = document.getElementsByClassName('match');
var listDays = document.getElementsByClassName('matchDay');
/*
for(var i=0; i<listMatchs.length; i++)
{
  const pronostic = document.createElement('input');
  pronostic.setAttribute("type", "text");
  pronostic.setAttribute("class", "pronoMatch");
  listMatchs[i].appendChild(pronostic);
  listMatchs[i].lastChild().hide(0);
  listMatchs[i].addEventListener("click", function(){
    this.lastChild().show();
  });
}
*/

for(var i=0; i<listDays.length; i++)
{

  listDays[i].querySelector('h2').addEventListener("click", function(){
    var parent =this.parentNode;
   $(parent.getElementsByClassName('match')).toggle();
  });
}

for(var i=0; i<listMatchs.length; i++)
{

  listMatchs[i].addEventListener("click", function(){
  $(this.getElementsByClassName('pronoMatch')).toggle();
  });
}
