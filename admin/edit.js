function verif(id,button){
var ele=document.getElementById(id);


var row = button.parentNode.parentNode; // Récupère la ligne parente du bouton
row.remove();
$.ajax({
    url: "action.php",
    type: "POST",
    data: { param1: id }, 

    success: function(response) {
     
      console.log(response);
    }
  });
 




}

function recup(id,button){
  
  sessionStorage.setItem('idd', id);
 
}


function validate(){
  
	 var t=document.f.title.value;
    var c=document.f.cont.value;
    
    if(t.length<=0 || c.length<=0){
      
      var tt = document.forms['f']['title'];
      tt.style.border = "1px solid red";
      var cc=document.forms['f']['cont'];
      cc.style.border = "1px solid red";
      var error = document.querySelector('.err');
      error.innerHTML="merci de remplir tout les champs";
      return false;
    }
    else{
      var id = sessionStorage.getItem('idd');
      alert (id);
      localStorage.setItem("param1", id);
      $.ajax({
        url: "edit.php",
        type: "POST",
        data: { param1: id }, 
    
        success: function(response) {
         
          console.log(response);
        }
      });
     
    }
	
	




}