/* ----------------------------------------------------------------------------

Exercício: 030
Enunciado:
    No input de texto só podemos inserir números.
    Se clicarmos no botão "Calcular", devemos apresentar o resultado do valor
    inserido no input de texto a dividir por 3.
    Todos os resultados devem ser apresentados com uma casa decimal.
    Se o resultado de qualquer cálculo for incorreto, deve aparecer a mensagem
    "Valor inválido"
---------------------------------------------------------------------------- */
const input = document.querySelector("#text_valor");
const div = document.querySelector("#resultado");

input.setAttribute("type", "number");

document.querySelector("button").addEventListener("click", () => {
  div.innerHTML = "";
  let numero = input.value / 3;
  let p = document.createElement("p");
  if (numero == "NaN") {
    p.textContent = "Valor inválido";
    div.appendChild(p);
  } else {
    p.textContent = numero.toFixed(1);
    div.appendChild(p);
  }
});
