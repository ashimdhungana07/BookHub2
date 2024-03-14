<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'dbconnect.php';
  $email = $_POST['email'];
  $password = $_POST['password'];

  $showAlert = false;
  $showError = false;

  $sql = "Select * from `Admin` where email='$email'";

  try {
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num >= 1) {
      while ($row = mysqli_fetch_assoc($result)) {
        if ($password == $row['password']) {
          $showAlert = "You've successfully logged in.";

          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['email'] = $email;
          header("location: welcomeadmin.php");
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookHub</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- Login form starts -->
    <div class="form-container login-form-container" style="top:0;">
        <form action="admin.php" method="post">
            <h3>sign in as admin</h3>
            <span>username</span>
            <input type="email" name="email" class="box" placeholder="enter your email" id="email">
            <span>password</span>
            <input type="password" name="password" class="box" placeholder="enter your password" id="password">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">remember-me</label>
            </div>
            <input type="submit" value="sign in" class="btn">
            <p>forget password ? <a href="#">click here</a></p>
        </form>
    </div>
    <!-- Login form ends -->

</body>

</html>