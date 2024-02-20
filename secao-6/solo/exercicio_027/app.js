/* ----------------------------------------------------------------------------

Exercício: 027
Enunciado:
    Existe um input de texto no qual, sempre que for alterado o seu conteúdo,
    o mesmo deve ser apresentado em tempo real no div cujo id é igual a "conteudo".
    Contudo, se o texto contém a palavra "olá", a cor do texto deve ser verde.
    Caso contrário deverá ser sempre branca.
---------------------------------------------------------------------------- */
const input = document.querySelector("input[type='text']");
const conteudo = document.querySelector("#conteudo");

input.addEventListener("input", () => {
  let frase = input.value;
  if (frase.includes("olá")) {
    conteudo.style.color = "green";
    conteudo.innerHTML = frase;
  } else {
    conteudo.style.color = "white";
    conteudo.innerHTML = frase;
  }
});
