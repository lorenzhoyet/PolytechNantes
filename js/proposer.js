var listMatchs = document.getElementsByClassName('match');

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
