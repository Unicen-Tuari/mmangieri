"use strict";

let nroPartida= 0;
let tableroInicial= true;

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
    }
    else {
        carta1.src= "images/cartaCruz.jpg";
    }
    probabilidad= Math.random();
    carta2=document.getElementById("segundaCarta");
    if (probabilidad< 0.5) {
        carta2.src= "images/cartaBlanco.jpg";
    }
    else {
        carta2.src= "images/cartaCruz.jpg";
    }
    probabilidad= Math.random();
    carta3=document.getElementById("tercerCarta");
    if (probabilidad< 0.5) {
        carta3.src= "images/cartaBlanco.jpg";
    }
    else {
        carta3.src= "images/cartaCruz.jpg";
    }
    probabilidad= Math.random();
    carta4=document.getElementById("cuartaCarta");
    if (probabilidad< 0.5) {
        carta4.src= "images/cartaBlanco.jpg";
    }
    else {
        carta4.src= "images/cartaCruz.jpg";
    }
    probabilidad= Math.random();
    carta5= document.getElementById("quintaCarta");
    if (probabilidad< 0.5) {
        carta5.src= "images/cartaBlanco.jpg";
    }
    else {
        carta5.src= "images/cartaCruz.jpg";
    }
    tableroInicial= false;
  }
  else {
      carta1= document.getElementById("primerCarta");
      if(carta1.src ===  "images/cartaBlanco.jpg"){
        carta1.src = "images/cartaCruz.jpg";
      }
      else {
        carta1.src= "images/cartaBlanco.jpg";
      }
      carta2= document.getElementById("segundaCarta");
      if(carta2.src ===  "images/cartaBlanco.jpg"){
        carta2.src = "images/cartaCruz.jpg";
      }
      else {
        carta2.src= "images/cartaBlanco.jpg";
      }
      carta3= document.getElementById("tercerCarta");
      if(carta3.src ===  "images/cartaBlanco.jpg"){
        carta3.src = "images/cartaCruz.jpg";
      }
      else {
        carta3.src= "images/cartaBlanco.jpg";
      }
      carta4= document.getElementById("cuartaCarta");
      if(carta4.src ===  "images/cartaBlanco.jpg"){
        carta4.src = "images/cartaCruz.jpg";
      }
      else {
        carta4.src= "images/cartaBlanco.jpg";
      }
      carta5= document.getElementById("quintaCarta");
      if(carta5.src ===  "images/cartaBlanco.jpg"){
        carta5.src = "images/cartaCruz.jpg";
      }
      else {
        carta5.src= "images/cartaBlanco.jpg";
      }
  }
}


document.getElementById('btn-comenzar').onclick = generarTablero;
