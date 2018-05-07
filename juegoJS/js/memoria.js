"use strict";

let nroPartida= 0;
let tableroInicial= true;
let cartaDestapada1;
let cartaDestapada2;
let cartaDestapada3;
let cartaDestapada4;
let cartaDestapada5;

function ponerReversoCarta(){
  let carta= document.getElementById("primerCarta");
  carta.src= "images/reverso.jpg";
  carta= document.getElementById("segundaCarta");
  carta.src= "images/reverso.jpg";
  carta= document.getElementById("tercerCarta");
  carta.src= "images/reverso.jpg";
  carta= document.getElementById("cuartaCarta");
  carta.src= "images/reverso.jpg";
  carta= document.getElementById("quintaCarta");
  carta.src= "images/reverso.jpg";
}

function taparCartas(tiempo){
  let intervalo = setInterval(function() {
    if (tiempo === 0){
        clearInterval(intervalo);
        ponerReversoCarta();
    }
    else{
      tiempo--;
    }
  }, 1000);
}


function mostrarFelicitacion(nroPartida){
      if (nroPartida=== 3){
          alert("Felicitaciones!!!!");
      }
}

function incrementarAciertos(){
    //document.querySelector('tfoot tr td:nth-child(2)').innerHTML = calcular();
}

function incrementarErrores(){

}
function generarTablero(){
  let carta1;
  let carta2;
  let carta3;
  let carta4;
  let carta5;
  if (tableroInicial) {
    let probabilidad= Math.random();
    carta1= document.getElementById("primerCarta");
    if (probabilidad < 0.5) {
        carta1.src= "images/cartaBlanco.jpg";
        cartaDestapada1="images/cartaBlanco.jpg";
    }
    else {
        carta1.src= "images/cartaCruz.jpg";
        cartaDestapada1="images/cartaCruz.jpg";
    }
    probabilidad= Math.random();
    carta2=document.getElementById("segundaCarta");
    if (probabilidad< 0.5) {
        carta2.src= "images/cartaBlanco.jpg";
        cartaDestapada2="images/cartaBlanco.jpg";
    }
    else {
        carta2.src= "images/cartaCruz.jpg";
        cartaDestapada2="images/cartaCruz.jpg";
    }
    probabilidad= Math.random();
    carta3=document.getElementById("tercerCarta");
    if (probabilidad< 0.5) {
        carta3.src= "images/cartaBlanco.jpg";
        cartaDestapada3="images/cartaBlanco.jpg";
    }
    else {
        carta3.src= "images/cartaCruz.jpg";
        cartaDestapada3="images/cartaCruz.jpg";
    }
    probabilidad= Math.random();
    carta4=document.getElementById("cuartaCarta");
    if (probabilidad< 0.5) {
        carta4.src= "images/cartaBlanco.jpg";
        cartaDestapada4="images/cartaBlanco.jpg";
    }
    else {
        carta4.src= "images/cartaCruz.jpg";
        cartaDestapada4="images/cartaCruz.jpg";
    }
    probabilidad= Math.random();
    carta5= document.getElementById("quintaCarta");
    if (probabilidad< 0.5) {
        carta5.src= "images/cartaBlanco.jpg";
        cartaDestapada5="images/cartaBlanco.jpg";
    }
    else {
        carta5.src= "images/cartaCruz.jpg";
        cartaDestapada5="images/cartaCruz.jpg";
    }
    tableroInicial= false;
  }
  else {
      carta1= document.getElementById("primerCarta");
      if(cartaDestapada1 ===  "images/cartaBlanco.jpg"){
        carta1.src = "images/cartaCruz.jpg";
        cartaDestapada1="images/cartaCruz.jpg";
      }
      else {
        carta1.src= "images/cartaBlanco.jpg";
        cartaDestapada1="images/cartaBlanco.jpg";
      }
      carta2= document.getElementById("segundaCarta");
      if(cartaDestapada2 ===  "images/cartaBlanco.jpg"){
        carta2.src = "images/cartaCruz.jpg";
        cartaDestapada2="images/cartaCruz.jpg";
      }
      else {
        carta2.src= "images/cartaBlanco.jpg";
        cartaDestapada2="images/cartaBlanco.jpg";
      }
      carta3= document.getElementById("tercerCarta");
      if(cartaDestapada3 ===  "images/cartaBlanco.jpg"){
        carta3.src = "images/cartaCruz.jpg";
        cartaDestapada3="images/cartaCruz.jpg";
      }
      else {
        carta3.src= "images/cartaBlanco.jpg";
        cartaDestapada3="images/cartaBlanco.jpg";
      }
      carta4= document.getElementById("cuartaCarta");
      if(cartaDestapada4 ===  "images/cartaBlanco.jpg"){
        carta4.src = "images/cartaCruz.jpg";
        cartaDestapada4="images/cartaCruz.jpg";
      }
      else {
        carta4.src= "images/cartaBlanco.jpg";
        cartaDestapada4="images/cartaBlanco.jpg";
      }
      carta5= document.getElementById("quintaCarta");
      if(cartaDestapada5 ===  "images/cartaBlanco.jpg"){
        carta5.src = "images/cartaCruz.jpg";
        cartaDestapada5="images/cartaCruz.jpg";
      }
      else {
        carta5.src= "images/cartaBlanco.jpg";
        cartaDestapada5="images/cartaBlanco.jpg";
      }
  }
  taparCartas(5);
}


document.getElementById('btn-comenzar').onclick = generarTablero;
