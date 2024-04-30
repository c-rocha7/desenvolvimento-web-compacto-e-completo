window.onload = () => {
  get_all_users();

  document.querySelector("btn_guardar").addEventListener("click", () => {
    let username = document.querySelector("[name='text_username']").value;
    let email = document.querySelector("[name='text_email']").value;

    if (username == "" || email == "") {
      alert("Preencher os dois campos");
      return;
    }

    add_new_user(username, email);
  });
};

// ----------------------------------------------------------
function get_all_users() {
  fetch("http://localhost/secao-17/recursos_online/api/v1/get_all_users")
    .then((response) => {
      if (response.status == 200) {
        return response.json();
      } else {
        throw new Error("Erro");
      }
    })
    .then((dados) => {
      if (dados.status === "success") {
        if (dados.affected_rows == 0) {
          document.querySelector("#no_users").classList.remove("d-none");
          document.querySelector("#users").classList.add("d-none");
        } else {
          let list_users = document.querySelector("#list_users");
          list_users.innerHTML = null;
          dados.results.forEach((user) => {
            let li = document.createElement("li");
            li.innerHTML = `${user.username} | <span class="opacity-50">${user.email}</span>`;
            list_users.appendChild(li);
          });
          document.querySelector("#no_users").classList.remove("d-none");
        }
      }
    })
    .catch(() => {
      console.log("Erro");
    });
}

// ----------------------------------------------------------
function add_new_user(username, email) {
  fetch(
    "http://localhost/secao-17/recursos_online/api/v1/add_new_user/index.php",
    {
      method: "POST",
      headers: {
        "Content-Type": "application/json; charset=utf-8",
      },
      body: JSON.stringify({ username, email }),
    }
  )
    .then((response) => {
      if (response.status == 200) {
        return response.json();
      } else {
        throw new Error("Erro");
      }
    })
    .then((dados) => {
      get_all_users();
      document.querySelector("[name='text_username']").value = "";
      document.querySelector("[name='text_email']").value = "";
    })
    .catch(() => {
      console.log("Erro");
    });
}
