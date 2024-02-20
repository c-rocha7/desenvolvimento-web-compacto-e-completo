/* ----------------------------------------------------------------------------

Exercício: 005
Enunciado: TRÊS SLIDERS COM VALORES INDEPENDENTES - VERSÃO CÓDIGO REDUZIDO
    
    O exercício anterior, mas com quantidade de código JS reduzida.

---------------------------------------------------------------------------- */

for (let x = 1; x <= 3; x++) {
  let el = document.querySelector("#range_" + x);
  el.setAttribute("min", 0);
  el.setAttribute("max", 100);
  el.value = 0;
  el.addEventListener("input", (e) => {
    document.querySelector("#value_" + x).textContent = e.target.value;
  });
}
