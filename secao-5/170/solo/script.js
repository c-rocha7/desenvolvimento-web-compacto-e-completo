/* 
OBJETIVO:
O mesmo exercício anterior, mas com unificação da instrução
para os 3 elementos e sem propagação de eventos.
*/

document.addEventListener("click", (event) => {
  console.log(event.srcElement);
});
