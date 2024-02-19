/* ----------------------------------------------------------------------------

Exercício: 024
Enunciado:
    Existem 8 checkboxes referentes a um conjunto de permissões de usuário.
    Cada uma delas pode ser checkada individualmente.
    Por baixo, existe um select com 3 perfis de usuário: administrador, coordenador
    e operador.
    Ao selecionar um perfil, as checkboxes devem ser checkadas de acordo com o
    perfil selecionado.

    Administrador: 
        Todas as permissões

    Coordenador: 
        Coordenação dos trabalhos
        Gestão de calendário
        Utilização das máquinas
        Utilização das ferramentas

    Operador:
        Utilização das máquinas
        Utilização das ferramentas

    NOTA: sem perfil, todas as checkboxes devem estar descheckadas.

---------------------------------------------------------------------------- */
document.querySelector("#select_perfil").addEventListener("change", (input) => {
  if (input.target.value === "administrador") {
    document.querySelectorAll("input[id^='check_']").forEach((check) => {
      check.checked = true;
    });
  } else if (input.target.value === "coordenador") {
    checked_none();
    for (let index = 5; index <= 8; index++) {
      document.querySelector(`input[id='check_${index}']`).checked = true;
    }
  } else if (input.target.value === "operador") {
    checked_none();
    for (let index = 7; index <= 8; index++) {
      document.querySelector(`input[id='check_${index}']`).checked = true;
    }
  } else {
    checked_none();
  }
});

function checked_none() {
  document.querySelectorAll("input[id^='check_']").forEach((check) => {
    check.checked = false;
  });
}
