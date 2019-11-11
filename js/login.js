const loginForm = document.querySelector("form");

loginForm.addEventListener("submit", ev => {
  ev.preventDefault();

  var email = ev.target["email"].value;
  var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (email.match(regex)) {
    window.location.replace("./home.php");
  } else {
    alert("Invaid Email");
  }
});
