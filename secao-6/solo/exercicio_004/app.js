/* ----------------------------------------------------------------------------

Exercício: 004
Enunciado: TRÊS SLIDERS COM VALORES INDEPENDENTES
    
    Estão disponíveis três input ranges e respetivas áreas de apresentação dos valores.
    Criar os mecanismos que permitem visualizar os valores dos sliders.
    Todos os sliders devem variar entre 0 e 100. Essas propriedades devem ser
    definidas através do JavaScript.

---------------------------------------------------------------------------- */

let range1 = document.querySelector("#range_1");
let range2 = document.querySelector("#range_2");
let range3 = document.querySelector("#range_3");

let valor1 = document.querySelector("#value_1");
let valor2 = document.querySelector("#value_2");
let valor3 = document.querySelector("#value_3");

range1.setAttribute("min", "0");
range1.setAttribute("max", "100");
range2.setAttribute("min", "0");
range2.setAttribute("max", "100");
range3.setAttribute("min", "0");
range3.setAttribute("max", "100");

range1.addEventListener("input", () => {
  valor1.innerText = range1.value;
});
range2.addEventListener("input", () => {
  valor2.innerText = range2.value;
});
range3.addEventListener("input", () => {
  valor3.innerText = range3.value;
});
