/* ----------------------------------------------------------------------------

Exercício: 017
Enunciado:
    Ao clicar em "Adicionar", se o input tiver texto, adicionar o mesmo num
    parágrafo por baixo do botão. 
   
    Não pode ser adicionada uma palavra ou frase repetida.
---------------------------------------------------------------------------- */
let frases = [];

document.querySelector(".btn").addEventListener("click", () => {
  let input = document.querySelector("#text_post");
  if (input.value !== "") {
    if (!frases.includes(input.value)) {
      let p = document.createElement("p");
      p.textContent = input.value;
      document.querySelector("#posts").appendChild(p);
      frases.push(input.value);
    }
    input.value = "";
    input.focus();
  }
});
