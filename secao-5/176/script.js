// este código vai ser executado antes dos elementos do body existir,
// document.querySelector("button").addEventListener('click', () => {
//     document.querySelector('h1').innerText = "Texto do título alterado"
// })

// document.addEventListener("readystatechange", (event) => {
//   if (event.target.readState === "complete") {
//     document.querySelector("button").addEventListener("click", () => {
//       document.querySelector("h1").innerText = "Texto do título alterado";
//     });
//   }
// });

document.addEventListener("DOMContentLoaded", () => {
  document.querySelector("button").addEventListener("click", () => {
    document.querySelector("h1").innerText = "Texto do título alterado";
  });
});
