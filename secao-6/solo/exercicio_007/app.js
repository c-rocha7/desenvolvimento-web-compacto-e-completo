/* ----------------------------------------------------------------------------

Exercício: 006
Enunciado:
    O mesmo exercício do vídeo anterior, mas com código mais sintético.
---------------------------------------------------------------------------- */

document.querySelectorAll("[id^='info'").forEach((div) => {
  div.style.display = "none";
});

document.querySelector("[id='info1']").style.display = "";

document.querySelectorAll("[id^='tab']").forEach((button) => {
  button.addEventListener("click", () => {
    document.querySelectorAll("[id^='info'").forEach((div) => {
      div.style.display = "none";
    });
    document.querySelector(
      "[id=info" + button.id.substring(3) + "]"
    ).style.display = "";
  });
});
