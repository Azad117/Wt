<?php
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  // Connect to the database
  $conn = mysqli_connect("hostname", "username", "password", "database");
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  // Perform a query to check if the user exists
  $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' OR email='$email'");
  if (mysqli_num_rows($result) > 0) {
    // User already exists
    echo "Username or email already exists";
  } else {
    // Insert the new user into the database
    mysqli_query($conn, "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')");
    echo "Registration successful";
  }
  mysqli_close($conn);
?>
