var listMatchs = document.getElementsByClassName('match');
var listDays = document.getElementsByClassName('matchDay');


for(var i=0; i<listDays.length; i++)
{

  listDays[i].querySelector('h2').addEventListener("click", function(){
    var parent =this.parentNode;
   $(parent.getElementsByClassName('match')).toggle();
  });
}

for(var i=0; i<listMatchs.length; i++)
{
  var tableauMatch = listMatchs[i].querySelector('table');
  tableauMatch.addEventListener("click", function(){
  $(this.parentNode.getElementsByClassName('pronoMatch')).toggle();
  });
}
