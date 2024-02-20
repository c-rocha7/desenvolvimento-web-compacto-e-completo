/* ----------------------------------------------------------------------------

Exercício: 011
Enunciado:
    A grelha inicial contém dezasseis imgs sem source.
    Quando clicamos numa das imgs, vamos apresentar o símbolo X (imagem)
    No clique seguinte, que só pode acontecer numa img que não tenha símbolo,
    vamos apresentar o símbolo 'O'.
---------------------------------------------------------------------------- */

let filled_imgs = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
let symbol = "x";
document.querySelectorAll("[id^='img']").forEach((img) => {
  img.addEventListener("click", (img) => {
    let index = img.target.id.substring(3);
    place_symbol(index);
  });
});

function place_symbol(index) {
  if (filled_imgs[index - 1] != 0) return;
  document
    .querySelectorAll("#img" + index)
    .setAttribute("src", "./" + symbol + ".png");
  filled_imgs[index - 1] = 1;
  if (symbol == "x") {
    symbol = "o";
  } else {
    symbol = "x";
  }
}
