var now = new Date();
var annee   = now.getFullYear();
var mois    = now.getMonth() + 1;
var jour    = now.getDate();
var heure   = now.getHours();
var minute  = now.getMinutes();
var seconde = now.getSeconds();

alert( "Nous sommes le "+jour+"/"+mois+"/"+annee+" et il est "+heure+" heure "+minute+" minutes "+seconde+" secondes" );
