/* ----------------------------------------------------------------------------

Exercício: 002
Enunciado: CONTADOR COM INTERVALO DE VALORES
    
    A partir do HTML existente, apresentar um valor inicial igual a 0 e definir
    funcionalidades nos botões de decremento e incremento.
    O valor nunca poderá ser inferior a -10 ou superior a 10.

---------------------------------------------------------------------------- */

let decremento = document.querySelector("#btn_decremento");
let incremento = document.querySelector("#btn_incremento");
let valor = document.querySelector("#valor");

decremento.addEventListener("click", () => {
  let valor_interno = parseInt(valor.innerText);
  if (valor_interno <= 10 && valor_interno > -10) {
    valor_interno--;
  }
  valor.textContent = valor_interno;
});

incremento.addEventListener("click", () => {
  let valor_interno = parseInt(valor.innerText);
  if (valor_interno < 10 && valor_interno >= -10) {
    valor_interno++;
  }
  valor.textContent = valor_interno;
});
