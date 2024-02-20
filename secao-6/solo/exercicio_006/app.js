/* ----------------------------------------------------------------------------

Exercício: 006
Enunciado:
    Existem 3 botões no layout. Cada botão está associado a uma área de
    informação. O objetivo é criar a lógica que permite apresentar cada
    uma das áreas de acordo com o botão clicado.
    A área de informação um deve estar visível por padrão.

    NOTA: quando uma área é apresentada, as outras devem ficar escondidas
---------------------------------------------------------------------------- */

for (let index = 2; index <= 3; index++) {
  document.querySelector(`#info${index}`).style.display = "none";
}

for (let index = 1; index <= 3; index++) {
  document.querySelector(`#tab${index}`).addEventListener("click", () => {
    for (let index = 1; index <= 3; index++) {
      document.querySelector(`#info${index}`).style.display = "none";
    }
    document.querySelector(`#info${index}`).style.display = "";
  });
}

/* document.querySelectorAll("button[id^='tab']").forEach((button) => {
  button.addEventListener("click", () => {
    
  });
}); */

/* document.querySelectorAll("div[id^='info']").forEach((info) => {
  info.style.display = "none";
}); */
