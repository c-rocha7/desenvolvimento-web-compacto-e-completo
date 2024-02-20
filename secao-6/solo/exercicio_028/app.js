/* ----------------------------------------------------------------------------

Exercício: 028
Enunciado:
    Existe um botão o qual, ao ser clicado, cria 20 números aleatórios entre 1 e 1000.
    Esses números devem ser apresentados cada um em sua própria linha dentro do elemento
    cujo id é igual a "numeros".
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
    let p = document.createElement("p");
    p.textContent = numero;
    div.appendChild(p);
  }
});
