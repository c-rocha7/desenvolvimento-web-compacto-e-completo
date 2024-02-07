// APLICAR ESTILOS INLINE COM JAVASCRIPT

// let el = document.querySelector("h1");
// el.style.color = "rgb(255, 0, 0)";
// el.style.backgroundColor = "blue";

let el = document.querySelector("p");
const estilos = window.getComputedStyle(el);
// console.log(el.style.backgroundColor);
console.log(estilos.getPropertyValue("font-size"));
