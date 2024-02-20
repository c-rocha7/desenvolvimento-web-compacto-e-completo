/* ----------------------------------------------------------------------------

Exercício: 016
Enunciado:
    Ao clicar em "Adicionar", se o input tiver texto, adicionar o mesmo num
    parágrafo por baixo do botão. 
    Não importa a ordem das palavras e frases.
    Quando clicar em "Limpar", todas as palavras e frases devem desaparecer
    e o input deve ficar limpo e receber o focus.

    NOTA: O HTML não pode ser alterado.
---------------------------------------------------------------------------- */
var adicionar, limpar;

document.querySelectorAll("[class^='btn']").forEach((button) => {
  if (button.innerHTML === "Adicionar") adicionar = button;
  if (button.innerHTML === "Limpar") limpar = button;
});

adicionar.addEventListener("click", () => {
  let input = document.querySelector("#text_post");
  if (input.value !== "") {
    let p = document.createElement("p");
    p.textContent = input.value;
    document.querySelector("#posts").appendChild(p);
  }
});

limpar.addEventListener("click", () => {
  let input = document.querySelector("#text_post");
  document.querySelector("#posts").innerHTML = "";
  input.value = "";
  input.focus();
});
