window.onload = () => get_all_users();

let id_user = 0;

function get_all_users() {
  let list_users = document.querySelector("#list_users");
  fetch("http://localhost/secao-17/recursos_online/api/v1/get_all_users")
    .then((response) => {
      if (response.status === 200) {
        return response.json();
      } else {
        throw new Error("Erro");
      }
    })
    .then((dados) => {
      if (dados.status === "success") {
        let users = dados.results;
        if (users.length != 0) {
          users.forEach((user) => {
            let li = document.createElement("li");
            li.classList.add("clickable");
            li.textContent = user.name;
            li.addEventListener("click", () => {
              document.querySelector("#user_info").textContent = user.username;
              show_user_comments(user.id);
            });
            list_users.appendChild(li);
          });
        }
      } else {
        throw new Error("Erro");
      }
    })
    .catch((err) => {
      console.log("Erro");
    });
}

function show_user_comments(id) {
  fetch(
    "http://localhost/secao-17/recursos_online/api/v1/get_all_comments_from_user/?id=" +
      id
  )
    .then((response) => {
      if (response.status === 200) {
        return response.json();
      } else {
        throw new Error("Erro");
      }
    })
    .then((dados) => {
      if (dados.status === "success") {
        let post_container = document.querySelector("#posts");
        post_container.innerHTML = null;
        let posts = dados.results;
        let total_posts = dados.affected_rows;

        if (total_posts != 0) {
          posts.forEach((post) => {
            let div_post = document.createElement("div");
            div_post.classList.add("card", "bg-light", "p-3", "my-2");
            div_post.innerHTML = `<i>${post.created_at}</i><strong>${post.comment}</strong>`;
            post_container.appendChild(div_post);
          });
          document.querySelector("#no_posts").classList.add("d-none");
        } else {
          document.querySelector("#no_posts").classList.remove("d-none");
        }

        id_user = id;
        document.querySelector("#new_post").classList.remove("d-none");
      } else {
        throw new Error("Erro");
      }
    })
    .catch((err) => {
      console.log("Erro");
    });
}

document.querySelector("#btn_add_post").addEventListener("click", () => {
  let new_post = document.querySelector("#text_post").value;
  if (new_post === "") return;

  fetch(
    "http://localhost/secao-17/recursos_online/api/v1/add_comment/index.php",
    {
      method: "POST",
      headers: {
        "Content-Type": "application/json; charset=utf-8",
      },
      body: JSON.stringify({
        id_user,
        new_post,
      }),
    }
  )
    .then((response) => {
      if (response.status === 200) {
        return response.json();
      } else {
        throw new Error("Erro");
      }
    })
    .then((dados) => {
      if (dados.status === "success") {
        document.querySelector("#text_post").value = "";
        show_user_comments(id_user);
      } else {
        throw new Error("Erro");
      }
    })
    .catch((err) => {
      console.log(err);
    });
});
