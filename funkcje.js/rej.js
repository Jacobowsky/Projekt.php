function validateForm() {
  var username = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var password2 = document.getElementById("password2").value;

  if (username == "" || email == "" || password == "" || password2 == "") {
      alert("Wszystkie pola są wymagane!");
      return false;
  }

  if (password.length < 8) {
    alert("Hasło jest za krótkie");
    return false;
  }
  if (!password.match(/[A-Z]/)) {
    alert("Hasło musi mieć przynajmniej 1 wielką literę");
    return false;
  }

  if (!password.match(/[!@#$%^&*]/)) {
    alert("Hasło musi mieć przynajmniej 1 znak specjalny");
    return false;
  }

  if (!password.match(/[0-9]/)) {
    alert("Hasło musi mieć przynajmniej 1 cyfrę");
    return false;
  }

  if (password != password2) {
      alert("Hasła nie są takie same!");
      return false;
  }

     var re = /^[-\w\.]+@([-\w]+\.)+[a-z]+$/i;
    if(!re.test(email)){
        alert("Niepoprawny adres email!");
        return false;
    }

  return true;
  
}


document.querySelector("input[type=submit]").addEventListener("click", function(event){
  event.preventDefault();
  if(validateForm()){
      window.location.href = "walidacja.php";
  }
});
