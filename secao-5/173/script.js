// DESATIVAR A FUNÇÃO NATIVA DE UM LINK
document.querySelector("a").addEventListener("click", (e) => {
  console.log(e);
  e.preventDefault();
});

// DESATIVAR A SUBMISSÃO DO FORMULÁRIO
document
  .querySelector("input[type='submit']")
  .addEventListener("click", (e) => {
    console.log(e);
    e.stopPropagation();
    e.preventDefault();
  });

// CUIDADO COM A PROPAGAÇÃO!
document.querySelector(".caixa").addEventListener("click", (e) => {
  console.log("DIV");
});
