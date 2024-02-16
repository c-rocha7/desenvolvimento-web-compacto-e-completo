/* ----------------------------------------------------------------------------

Exercício: 018
Enunciado:
    Ao clicar em "Adicionar", se o input tiver texto, adicionar o mesmo num
    parágrafo por baixo do botão. 
   
    Cada texto inserido deve ser precedido da expressão "Eliminar" com cor vermelha
    e como efeito de um mouse hover.

    Se clicar em "Eliminar" apenas poderá ser removida a palavra ou frase
    correspondente.
---------------------------------------------------------------------------- */
document.querySelector(".btn").addEventListener("click", () => {
  let input = document.querySelector("#text_post");
  if (input.value !== "") {
    let p = document.createElement("p");

    let eliminar = document.createElement("span");
    eliminar.classList.add("text-danger");
    eliminar.style.cursor = "pointer";
    eliminar.textContent = "Eliminar";
    eliminar.addEventListener("click", () => {
      eliminar.parentNode.remove();
    });
    p.appendChild(eliminar);
    p.append(` | ${input.value}`);
    document.querySelector("#posts").appendChild(p);
    input.value = "";
    input.focus();
  }
});
