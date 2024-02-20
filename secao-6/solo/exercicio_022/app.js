/* ----------------------------------------------------------------------------

Exercício: 022
Enunciado:
    Está disponível um elemento select com 3 opções.
    Por baixo existem 4 checkboxes.
    Quando é selecionada a opção 3 no select, as checkboxes devem ficar ativas.
    Qualquer outra opção, devem desativar as checkboxes.
---------------------------------------------------------------------------- */
document.querySelectorAll("[id^='check_']").forEach((check) => {
  check.setAttribute("disabled", "true");
});

document
  .querySelector("[name='select_opcoes']")
  .addEventListener("change", (input) => {
    // console.log(input.target.value);
    if (input.target.value == 3) {
      document.querySelectorAll("[id^='check_']").forEach((check) => {
        check.removeAttribute("disabled");
      });
    } else {
      document.querySelectorAll("[id^='check_']").forEach((check) => {
        check.setAttribute("disabled", "true");
      });
    }
  });
