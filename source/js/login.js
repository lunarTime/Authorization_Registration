const form = document.getElementById("login_form");


form.addEventListener("submit", (e) => {
  e.preventDefault();

  const username = document.getElementById("uname").value;
  const password = document.getElementById("psw").value;

  const formData = new FormData();
  formData.append("uname", username);
  formData.append("psw", password);

  fetch("http://regaut/source/php/php-log.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.status === "success") {
        alert("Вы вошли");
      } else if (data.status === "error") {
        alert("Вы не вошли");
      } else {
        alert("Ошибка");
      }
    })
    .catch(() => {
        alert("Ошибка");
    })
});
