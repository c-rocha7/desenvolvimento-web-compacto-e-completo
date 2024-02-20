/* ----------------------------------------------------------------------------

Exercício: 026
Enunciado:
    Existem 4 inputs de texto, cada um com um id diferente.
    Cada input só pode receber um caracter.
    O focus deve iniciar no primeiro input.
    Ao digitar um algarismo, o focus deve ir para o próximo input.
    Ao digitar o último algarismo, o focus deve ir para o primeiro input.
    Se todos os inputs estiverem preenchidos, o sistema deve verificar se o
    número constituído pela concatenacao dos 4 algarismos é igual a 1234.
    Se for igual, deve aparecer uma mensagem de sucesso, caso contrário,
    a mensagem de sucesso deve estar escondida.
---------------------------------------------------------------------------- */
document.querySelector("h1").innerHTML = "";
document.querySelector("input[id='t1']").focus();

let valores = [];
let inputs = document.querySelectorAll("input[id^='t']");

inputs.forEach((input) => {
  let index = input.id.substring(1);
  input.setAttribute("maxLength", 1);
  input.addEventListener("input", () => {
    if (index == 1) {
      valores.push(input.value);
      inputs[index].focus();
    } else if (index == 2) {
      valores.push(input.value);
      inputs[index].focus();
    } else if (index == 3) {
      valores.push(input.value);
      inputs[index].focus();
    } else if (index == 4) {
      valores.push(input.value);
      inputs[0].focus();
    }
    if (valores.length == 4) {
      let texto = valores.join("");
      if (texto !== "1234") {
        document.querySelector("h1").innerHTML = "";
      } else {
        document.querySelector("h1").innerHTML = "Certo!";
      }
    }
  });
});
