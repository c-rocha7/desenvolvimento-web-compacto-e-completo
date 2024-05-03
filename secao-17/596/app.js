document.querySelector(".btn").addEventListener("click", function () {
  //   axios
  //     .get("http://localhost/secao-17/recursos_online/api/v1/get_all_comments")
  //     .then((response) => {
  //       if (response.status === 200) {
  //         return response.data;
  //       } else {
  //         throw Error("Error");
  //       }
  //     })
  //     .then((data) => {
  //       if (data.message === "success") {
  //         data.results.forEach((post) => {
  //           let p = document.createElement("p");
  //           p.textContent = post.comment;
  //           document.querySelector("#conteudo").appendChild(p);
  //         });
  //       }
  //     });

  axios.all([get_users(), get_comments()]).then(
    axios.spread((users, comments) => {
      console.log(users.data.results);
      console.log(comments.data.results);
    })
  );
});

function get_users() {
  return axios.get(
    "http://localhost/secao-17/recursos_online/api/v1/get_all_users"
  );
}

function get_comments() {
  return axios.get(
    "http://localhost/secao-17/recursos_online/api/v1/get_all_comments"
  );
}
