/* ----------------------------------------------------------------------------

Exercício: 025
Enunciado:
    O input number text_numero é o multiplicando. O seu valor só pode variar
    entre 1 e 20. Ao alterar o valor, deve ser apresentada a tabuada do número definido
    no div cujo id = resultados.
---------------------------------------------------------------------------- */
let input = document.querySelector("#text_numero");
document.querySelector("#resultados").innerHTML = `
  ${input.value} x 1 = ${input.value * 1} <br>
  ${input.value} x 2 = ${input.value * 2} <br> 
  ${input.value} x 3 = ${input.value * 3} <br>
  ${input.value} x 4 = ${input.value * 4} <br>
  ${input.value} x 5 = ${input.value * 5} <br>
  ${input.value} x 6 = ${input.value * 6} <br>
  ${input.value} x 7 = ${input.value * 7} <br>
  ${input.value} x 8 = ${input.value * 8} <br>
  ${input.value} x 9 = ${input.value * 9} <br>
  ${input.value} x 10 = ${input.value * 10}`;

document.querySelector("#text_numero").setAttribute("min", "1");
document.querySelector("#text_numero").setAttribute("max", "20");

input.addEventListener("change", (input) => {
  document.querySelector("#resultados").innerHTML = `
  ${input.target.value} x 1 = ${input.target.value * 1} <br>
  ${input.target.value} x 2 = ${input.target.value * 2} <br> 
  ${input.target.value} x 3 = ${input.target.value * 3} <br>
  ${input.target.value} x 4 = ${input.target.value * 4} <br>
  ${input.target.value} x 5 = ${input.target.value * 5} <br>
  ${input.target.value} x 6 = ${input.target.value * 6} <br>
  ${input.target.value} x 7 = ${input.target.value * 7} <br>
  ${input.target.value} x 8 = ${input.target.value * 8} <br>
  ${input.target.value} x 9 = ${input.target.value * 9} <br>
  ${input.target.value} x 10 = ${input.target.value * 10}`;
});
