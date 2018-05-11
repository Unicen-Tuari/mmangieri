"use strict";

let nroPartida=1;
let tableroInicial= true;
let cartasDestapadas=[];
let aciertosTotales=0;
let erroresTotales=0;
const nroCartas=5;

function incrementarAciertos(){

}

function incrementarErrores(){

}

function mostrarFelicitacion(nroPartida){
  if (nroPartida===3){
      alert("Felicitaciones!!! Jugaste 3 partidas seguidas");
  }
}

function ponerReversoCarta(){
  for (let i = 0; i < nroCartas; i++) {
    let carta= document.getElementById(`carta${i}`);
    carta.src="images/reverso.jpg";
  }
}

function taparCartas(tiempo){
  let intervalo= setInterval(function(){
      if (tiempo === 0){
        ponerReversoCarta();
      }
      else {
        tiempo--;
      }
  },1000);
}

function girarCarta(){

  // carta seleccionada del radio button darla vuelta y fijarla para q no se use mas
}
function contarCartasMarcadas(){
    let contar=0;
    for (let i = 0; i < nroCartas; i++) {
      if (cartasDestapadas[i]==='x'){
          contar++;
      }
    }
    return contar;
}

function generarTablero(){
    let probabilidad=0;
    if (tableroInicial){
        for (let i=0; i<nroCartas; i++){
            probabilidad= Math.random();
            if (probabilidad< 0.5){
                cartasDestapadas[i]= 'blanco';
            }
            else {
                cartasDestapadas[i]= 'x';
            }
        }
        tableroInicial= false;
    }
    else {
      for (let i=0; i< nroCartas; i++){
          if (cartasDestapadas[i]==='x'){
              cartasDestapadas[i]='blanco';
          }
          else {
              cartasDestapadas[i]='x';
          }
      }
      tableroInicial= true;
    }
}

function cargarCartas(){
    generarTablero();
    let carta;
    for(let i=0; i<nroCartas; i++){
        carta=document.getElementById(`carta${i}`);

        if(cartasDestapadas[i]==='x'){
            carta.src= "images/cartaCruz.jpg";
        }
        else {
            carta.src= "images/cartaBlanco.jpg";
        }
    }
}

function mostrarTablero(){
  cargarCartas();
  taparCartas(3);
}

document.getElementById('btn-comenzar').onclick = mostrarTablero;
