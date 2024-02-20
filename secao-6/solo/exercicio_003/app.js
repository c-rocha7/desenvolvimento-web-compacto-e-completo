/* ----------------------------------------------------------------------------

Exercício: 003
Enunciado: CONTADOR COM CORES PARA NEGATIVOS, ZERO E POSITIVOS
    
    A partir do HTML existente, apresentar um valor inicial igual a 0 e definir
    funcionalidades nos botões de decremento e incremento.
    No caso do valor ser zero o texto deve ser branco.
    No caso do valor ser negativo o texto deve ser vermelho puro.
    No caso do valor ser positivo o texto deve ser verde puro.

---------------------------------------------------------------------------- */

let decremento = document.querySelector("#btn_decremento");
let incremento = document.querySelector("#btn_incremento");
let valor = document.querySelector("#valor");

decremento.addEventListener("click", () => {
  let valor_interno = parseInt(valor.innerText);
  valor_interno--;
  valor.textContent = valor_interno;
  if (valor_interno < 0) {
    valor.style.color = "red";
  } else if (valor_interno > 0) {
    valor.style.color = "green";
  } else {
    valor.style.color = "white";
  }
});

incremento.addEventListener("click", () => {
  let valor_interno = parseInt(valor.innerText);
  valor_interno++;
  valor.textContent = valor_interno;
  if (valor_interno < 0) {
    valor.style.color = "red";
  } else if (valor_interno > 0) {
    valor.style.color = "green";
  } else {
    valor.style.color = "white";
  }
});
