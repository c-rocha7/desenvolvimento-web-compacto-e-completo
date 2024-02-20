/* ----------------------------------------------------------------------------

Exercício: 020
Enunciado:
    Existem 4 inputs na página.
    Sempre que o focus de um input for alterado, a cor de fundo do input
    deve ficar amarela, indicando que o input está ativo. 
    Os inativos devem ficar a branco.
---------------------------------------------------------------------------- */

function all_whites() {
  document.querySelectorAll("input").forEach((elemento) => {
    elemento.style.backgroundColor = "white";
  });
}

document.querySelectorAll("input").forEach((elemento) => {
  elemento.addEventListener("click", (input) => {
    all_whites();
    input.target.style.backgroundColor = "yellow";
  });
});
