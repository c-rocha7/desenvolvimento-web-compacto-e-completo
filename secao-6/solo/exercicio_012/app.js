/* ----------------------------------------------------------------------------

Exercício: 012
Enunciado:
    Ao clicar no botão "Adicionar", se o input de texto não estiver vazio, adicionar
    um parágrafo com esse texto por baixo do botão.
---------------------------------------------------------------------------- */

let button = document.querySelector("button");

button.addEventListener("click", () => {
  let input = document.querySelector("[id='text_post']");
  if (input.value !== "") {
    let novoParagrafo = document.createElement("p");
    novoParagrafo.textContent = input.value;
    let div = document.querySelector("[id=posts]");
    div.appendChild(novoParagrafo);
  }
});
