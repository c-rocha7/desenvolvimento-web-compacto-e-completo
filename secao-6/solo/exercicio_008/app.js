/* ----------------------------------------------------------------------------

Exercício: 008
Enunciado:
    Existem 5 botões, cada um com uma cor diferente do Bootstrap.
    A ideia é criar o código javascript que permita que o clique em cada
    um dos botões altere o texto acima para a cor de fundo do botão.
---------------------------------------------------------------------------- */

document.querySelectorAll("button").forEach((button) => {
  button.addEventListener("click", (btn) => {
    document.querySelector("h3").className = "";
    document
      .querySelector("h3")
      .classList.add(`text${btn.target.className.substring(7)}`);
  });
});
