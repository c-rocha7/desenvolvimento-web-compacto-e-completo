/* ----------------------------------------------------------------------------

Exercício: 001
Enunciado: CONTADOR
    
    A partir do HTML existente, apresentar um valor inicial igual a 0 e definir
    funcionalidades nos botões de decremento e incremento. Ao clicar em cada
    um dos botões, o utilizador irá aumentar ou diminuir o valor em uma unidade.

---------------------------------------------------------------------------- */

let decremento = document.querySelector("#btn_decremento");
let incremento = document.querySelector("#btn_incremento");
let valor = document.querySelector("#valor");

decremento.addEventListener("click", () => {
  let valor_interno = parseInt(valor.innerText);
  valor_interno--;
  valor.textContent = valor_interno;
});

incremento.addEventListener("click", () => {
  let valor_interno = parseInt(valor.innerText);
  valor_interno++;
  valor.textContent = valor_interno;
});
