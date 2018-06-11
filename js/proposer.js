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
  const pronosticAff = document.createElement('p');
  pronosticAff.setAttribute("class","pronosticAffiche");
  listMatchs[i].insertBefore(pronosticAff,listMatchs.lastChild);
    const idMatchR = $(listMatchs[i].getElementsByClassName('idMatch')).val();
    /*
    $.ajax({
                        url: "/afficheProno.php",
                        type='POST',
                        data: {
                             params: {idMatch: idMatchR},
                        },
                        success: function(data)
                        {
                            ...
                        }
                    });
                    */
    $.post( "afficheProno.php", { idMatch: idMatchR})
    .done(function( data ) {
    pronosticAff.innerHTML= data;
  });

  var tableauMatch = listMatchs[i].querySelector('table');
  tableauMatch.addEventListener("click", function(){
  $(this.parentNode.getElementsByClassName('pronoMatch')).toggle();
  $(this.parentNode.getElementsByClassName('pronosticAffiche')).toggle();
  });
}
