function myFunction(){
    texte = document.getElementById("cat").options[document.getElementById('cat').selectedIndex].text;
    console.log(texte);

if (texte=='sport') 
   window.location.href='cat1.html';
   if (texte=='class') 
   window.location.href='cat2.html';

}