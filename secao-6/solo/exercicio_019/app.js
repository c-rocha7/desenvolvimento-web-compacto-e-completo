/* ----------------------------------------------------------------------------

Exercício: 019
Enunciado:
    Está declarado um array de frutos.
    Ao inserir uma palavra no input text e clicando em pesquisar, o sistema deverá
    indicar se a palavra existe ou não no array e indicar o resultado SIM ou NAO no
    elemento com o id = "resultado"

    NOTA: Não podes usar um ciclo neste exercício.
---------------------------------------------------------------------------- */
let frutos = [
  "laranja",
  "maçã",
  "pêra",
  "morango",
  "ananás",
  "limão",
  "banana",
];

document.querySelector("button").addEventListener("click", () => {
  let input = document.querySelector("#text_palavra").value;
  if (frutos.includes(input)) {
    document.querySelector("#resultado").textContent = "SIM";
  } else {
    document.querySelector("#resultado").textContent = "NÃO";
  }
});
