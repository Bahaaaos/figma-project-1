let bars=document.querySelector("header nav .bars");
let ul=document.querySelector("header nav ul");
bars.onclick=function(){
    ul.style.left="0";
}
let clos=document.querySelector("nav ul .close");
clos.onclick=function(){
    ul.style.left="100%";
}