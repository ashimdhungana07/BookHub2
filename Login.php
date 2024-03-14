<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'dbconnect.php';
  $email = $_POST['email'];
  $password = $_POST['password'];

  $showAlert = false;
  $showError = false;

  $sql = "Select * from `Users` where email='$email'";

  try {
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num >= 1) {
      while ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
          $showAlert = "You've successfully logged in.";

          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['email'] = $email;
          header("location: welcome.php");
        } else {
          $showError = "Invalid Credentials";
        }
      }
    } else {
      $showError = "Invalid Credentials";
    }
  } catch (Exception $e) {
    echo "<br>Error: " . $e->getMessage();
  }
}

?>
