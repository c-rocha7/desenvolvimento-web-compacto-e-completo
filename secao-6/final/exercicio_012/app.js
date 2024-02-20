/* ----------------------------------------------------------------------------

Exercício: 012
Enunciado:
    Ao clicar no botão "Adicionar", se o input de texto não estiver vazio, adicionar
    um parágrafo com esse texto por baixo do botão.
---------------------------------------------------------------------------- */

document.querySelector(".btn").addEventListener("click", () => {
  let texto = document.querySelector("#text_post").value;
  if (texto !== "") {
    let p = document.createElement("p");
    p.textContent = texto;
    document.querySelector("#posts").appendChild(p);
  }
});
