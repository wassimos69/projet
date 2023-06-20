function verif(id,button){
var ele=document.getElementById(id);
alert(id);

var row = button.parentNode.parentNode; // Récupère la ligne parente du bouton
row.remove(); 
$.ajax({
    url: "action.php",
    type: "POST",
    data: { param1: id }, // Remplacez par vos propres données au format clé-valeur
    success: function(response) {

      console.log(response);
    }
  });
 




}
function vv(id){
    alert(id);
}