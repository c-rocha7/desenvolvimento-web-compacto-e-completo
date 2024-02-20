/* ----------------------------------------------------------------------------

Exercício: 021
Enunciado:
    Existem 4 inputs na página.
    1. Coloca o focus automaticamente no input acima e à esquerda.
    2. Sempre que pressionares a tecla Enter (return), o focus deverá
    passar para o input seguinte, mesmo que não tenhas escrito qualquer texto.
---------------------------------------------------------------------------- */
let inputs = document.querySelectorAll("[name^='text_']");
inputs[0].focus();
inputs.forEach((input) => {
  input.addEventListener("keyup", (evt) => {
    if (evt.code == "Enter") {
      let index = input.name.substring(5) - 1;
      index++;
      if (index == 4) index = 0;
      inputs[index].focus;
    }
  });
});
