var container = document.getElementById('container');

$.post( "afficheSorties.php")
.done(function( data ) {
  container.innerHTML+= data;
});
