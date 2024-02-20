/* ----------------------------------------------------------------------------

Exercício: 017
Enunciado:
    Ao clicar em "Adicionar", se o input tiver texto, adicionar o mesmo num
    parágrafo por baixo do botão. 
   
    Não pode ser adicionada uma palavra ou frase repetida.
---------------------------------------------------------------------------- */
let palavrasRegistradas = [];
let input = document.querySelector("#text_post");

document.querySelector(".btn").addEventListener("click", () => {
  if (input.value !== "" && !palavrasRegistradas.includes(input.value)) {
    let p = document.createElement("p");
    p.textContent = input.value;
    document.querySelector("#posts").appendChild(p);
    input.value = "";
    input.focus();
    palavrasRegistradas.push(input.value);
  }
});
