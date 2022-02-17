document.getElementById("submit").addEventListener("click", function(event) {
  if (!emailcheck() || !passwordcheck()) event.preventDefault();

});

function emailcheck() {
  var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;


  var email = document.getElementById("email").value;
  if (validRegex.test(email) == true) {

    document.getElementById("email_error").innerHTML = "";

    return true;

  } else {
    document.getElementById("email_error").innerHTML = "*Invalid Email";
    return false;

  }

}

function passwordcheck() {
  var password = document.getElementById("password").value;
  if (password == "" || password.length < 8) {
    document.getElementById("password_error").innerHTML = "*Enter the Password or lenght should be greater than 8";
    return false;
  } else {
    document.getElementById("password_error").innerHTML = "";
    return true;

  }
}
