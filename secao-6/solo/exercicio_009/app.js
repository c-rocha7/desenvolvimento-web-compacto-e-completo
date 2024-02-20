/* ----------------------------------------------------------------------------

Exercício: 009
Enunciado:
    Exercício simples: O texto é branco e o elemento range vai servir para
    alterar a transparência do texto. Do valor mais opaco à esquerda, até
    à transparência total à direita.

    NOTA: Deves definir os valores do range.
---------------------------------------------------------------------------- */

let range = document.querySelector("[id='range']");
range.setAttribute("min", 0);
range.setAttribute("max", 10);
range.value = 10;
range.addEventListener("input", (btn) => {
  document.querySelector("h3").style.opacity = range.value / 10;
});
