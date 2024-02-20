/* ----------------------------------------------------------------------------

Exercício: 021
Enunciado:
    Existem 4 inputs na página.
    1. Coloca o focus automaticamente no input acima e à esquerda.
    2. Sempre que pressionares a tecla Enter (return), o focus deverá
    passar para o input seguinte, mesmo que não tenhas escrito qualquer texto.
---------------------------------------------------------------------------- */
let input1 = document.querySelector("[name='text_1']");
input1.focus();
let contador = 2;
// Ação de pressionar a tecla `enter`
document.addEventListener("keydown", (e) => {
  if (contador > 4) contador = 1;
  if (e.keyCode === 13) {
    let input = document.querySelector(`[name=text_${contador}]`);
    input.focus();
    contador++;
  }
});
