/* ----------------------------------------------------------------------------

Exercício: 029
Enunciado:
    Começando pelo exercício 28, mas agora queremos apresentar os números numa
    sequência de quatro por cada linha. Deve aparecer com fundo branco e texto 
    de cor verde. Deve ter uma distribuição consistente da informação. 
---------------------------------------------------------------------------- */
const button = document.querySelector("button");
const div = document.querySelector("#numeros");
let numeros = [];

button.addEventListener("click", () => {
  numeros = [];
  div.innerHTML = "";
  while (numeros.length < 20) {
    let numero = Math.floor(Math.random() * 1000) + 1;
    numeros.push(numero);
  }
  while (numeros.length != 0) {
    let p = document.createElement("p");
    let quatroNumeros = numeros.slice(0, 4);
    numeros.splice(0, 4);
    p.textContent = quatroNumeros.join(", ");
    p.style.backgroundColor = "white";
    p.style.color = "green";
    div.appendChild(p);
  }
});
