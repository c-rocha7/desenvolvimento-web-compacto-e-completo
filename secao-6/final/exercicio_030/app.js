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
document.querySelector("button").addEventListener("click", () => {
  const resultado = document.querySelector("#resultado");
  const valor = document.querySelector("#text_valor").value;

  if (valor === "" || isNaN(valor)) {
    resultado.textContent = "Valor inválido";
    return;
  }

  resultado.textContent = (valor / 3).toFixed(1);
});
