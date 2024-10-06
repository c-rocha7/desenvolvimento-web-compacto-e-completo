/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.html"],
  theme: {
    extend: {
      boxShadow: {
        'minha-sombra-normal': '0 0 24px 4px rgba(0,0,0,0.5)',
        'minha-sombra-hover': '0 0 24px 4px rgba(255,255,255,0.5)',
      }
    },
  },
  plugins: [],
}

