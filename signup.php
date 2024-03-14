<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnect.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $exists = false;
    $showAlert = false;
    $showError = false;

    $existSql = "SELECT * FROM `Users` WHERE email='$email'";
    $result = mysqli_query($conn,$existSql);

    $numExistRows = mysqli_num_rows($result);
    if($numExistRows>0){
        $exists = true;
    }

    if ($exists==false){
        if (($password == $cpassword)) {

            // Creating hash for password
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO `Users` (`email`, `password`, `date`) VALUES ('$email', '$hash', current_timestamp())";
    
            try {
                mysqli_query($conn, $sql);
                $showAlert = "You have created a new account.";
                header("location: index.php");
            } catch (Exception $e) {
                echo "<br>Error: " . $e->getMessage();
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
    else{
        $showError = "email already exists.";
    }
}

?>