<script>
  function validateForm() {
    var username = document.forms["registerForm"]["username"].value;
    var email = document.forms["registerForm"]["email"].value;
    var password = document.forms["registerForm"]["password"].value;
    var password_confirm = document.forms["registerForm"]["password_confirm"].value;
    if (username == "") {
      alert("Username must be filled out");
      return false;
    }
    if (email == "") {
      alert("Email must be filled out");
      return false;
    }
    if (password == "") {
      alert("Password must be filled out");
      return false;
    }
    if (password_confirm == "") {
      alert("Confirm Password must be filled out");
      return false;
    }
    if (password != password_confirm) {
      alert("Passwords must match");
      return false;
    }
  }
</script>
