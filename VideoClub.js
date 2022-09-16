// document.getElementById('formulaire').style.display = 'none';
// document.getElementById('formulaire').style.cssText = 'display : none;';
let divacache = document.getElementById('formulaire');



divacache.style.cssText = 'display: none;'
document.getElementById('admin').addEventListener('click',function(){
    divacache.style.cssText = 'display : block;';
})

document.getElementById('retour').addEventListener('click',function(){
    divacache.style.cssText = 'display : none;';
})