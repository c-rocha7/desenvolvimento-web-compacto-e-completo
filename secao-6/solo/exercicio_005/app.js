/* ----------------------------------------------------------------------------

Exercício: 005
Enunciado: TRÊS SLIDERS COM VALORES INDEPENDENTES - VERSÃO CÓDIGO REDUZIDO
    
    O exercício anterior, mas com quantidade de código JS reduzida.

---------------------------------------------------------------------------- */

document.querySelectorAll("input[type='range']").forEach((input) => {
  input.setAttribute("min", 0);
  input.setAttribute("max", 100);
  input.value = 0;
});

for (let x = 1; x <= 3; x++) {
  document.querySelector(`#range_${x}`).addEventListener("input", (input) => {
    document.querySelector(`#value_${x}`).innerText = input.target.value;
  });
}
