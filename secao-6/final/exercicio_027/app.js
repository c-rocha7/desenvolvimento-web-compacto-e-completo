/* ----------------------------------------------------------------------------

Exercício: 027
Enunciado:
    Existe um input de texto no qual, sempre que for alterado o seu conteúdo,
    o mesmo deve ser apresentado em tempo real no div cujo id é igual a "conteudo".
    Contudo, se o texto contém a palavra "olá", a cor do texto deve ser verde.
    Caso contrário deverá ser sempre branca.
---------------------------------------------------------------------------- */
const conteudo = document.querySelector("#conteudo");
document.querySelector("#text_frase").addEventListener("input", () => {
  conteudo.textContent = e.target.value;
  conteudo.style.color = e.target.value.includes("olá") ? "green" : "white";
});
