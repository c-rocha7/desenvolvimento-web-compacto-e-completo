/* 
OBJETIVO:
Adicionar 3 eventos click, um para cada elemento dentro do body 
cada um vai apresentar um texto único na consola
e fazer com que sejam independentes uns dos outros.
(Propagation)
*/

document.querySelector("section").addEventListener("click", () => {
  console.log("section");
});

document.querySelector("article").addEventListener("click", () => {
  console.log("article");
});

document.querySelector("div").addEventListener("click", () => {
  console.log("div");
});
