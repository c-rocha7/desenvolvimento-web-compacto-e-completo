/* 
OBJETIVO:
Ao clicar no botão, alterar a cor de fundo da caixa para aquamarine,
apresentar o texto 'clique' na consola e
remover o evento click do botão
*/
document.querySelector("button").addEventListener("click", (e) => {
  console.log("clique");
  document.querySelector(".caixa").style.backgroundColor = "aquamarine";
});
