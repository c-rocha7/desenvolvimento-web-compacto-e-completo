/* ----------------------------------------------------------------------------

Exercício: 014
Enunciado:
    Ao clicar no botão "Adicionar", se o input de texto não estiver vazio, adicionar
    um parágrafo com esse texto por baixo do botão. 
    Depois da inserção com sucesso, o input deve ser limpo e receber o focus para
    nova inserção.
    Não são permitidas as palavras "teste", "obrigado" e "hoje"
---------------------------------------------------------------------------- */
let palavrasBloqueadas = ["teste", "obrigado", "hoje"];

document.querySelector(".btn").addEventListener("click", () => {
  let input = document.querySelector("#text_post");
  if (input.value !== "" && !palavrasBloqueadas.includes(input.value)) {
    let p = document.createElement("p");
    p.textContent = `${input.value}`;
    document.querySelector("#posts").appendChild(p);
    input.value = "";
    input.focus();
  }
});
