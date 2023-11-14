window.addEventListener("load",loadall);
function loadall(){
    document.getElementById("username").value="";
     document.getElementById("password").value="";
  
}
let form=document.getElementById("forms");
let register=document.getElementById("register");
register.addEventListener("click",forming);
function forming(){
 form.Default()
}