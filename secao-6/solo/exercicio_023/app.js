/* ----------------------------------------------------------------------------

Exercício: 023
Enunciado:
    Existem 4 checkboxes referentes a um conjunto de permissões de usuário.
    Cada checkbox pode ser checkada individualmente.
    Por baixo existem duas opções: todas e nenhuma.
    Ao clicar em todas, todas as checkboxes devem ser checkadas.
    Ao clicar em nenhuma, todas as checkboxes devem ser descheckadas.
---------------------------------------------------------------------------- */
let all = document.querySelector("#all");
let none = document.querySelector("#none");

all.addEventListener("click", () => {
  document.querySelectorAll("[id^='check_']").forEach((check) => {
    check.checked = true;
  });
});

none.addEventListener("click", () => {
  document.querySelectorAll("[id^='check_']").forEach((check) => {
    check.checked = false;
  });
});
