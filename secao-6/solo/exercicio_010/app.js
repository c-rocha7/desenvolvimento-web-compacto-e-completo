/* ----------------------------------------------------------------------------

Exercício: 010
Enunciado:
    Existem 4 áreas a cinza.
    Ao clicar numa das áreas a área clicada deve ficar com fundo
    amarelo e as restantes a vermelho.
---------------------------------------------------------------------------- */

function divs_red() {
  document.querySelectorAll("[id^='box']").forEach((elemento) => {
    elemento.style.backgroundColor = "red";
  });
}

document.querySelectorAll("[id^='box']").forEach((elemento) => {
  elemento.addEventListener("click", (div) => {
    divs_red();
    div.target.style.backgroundColor = "yellow";
  });
});
