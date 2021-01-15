<?php
ob_start();
//session_start();
    include('../config/connect.php');
   
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">
        <header>Login Form</header>
        <form method="POST">
            <div class="input-field">
                <input type="text" required="" name="mail">
                <label>Email or Username</label>
            </div>
            <div class="input-field">
                <input class="pswrd" type="password" required="" name="pass">
                <span class="show">SHOW</span>
                <label>Password</label>
            </div>
            <div class="button">
                <div class="inner">
                </div>
                <button type="submit" name="sbm">LOGIN</button>
            </div>
        </form>
        <div class="auth">
            Or login with</div>
        <div class="links">
            <div class="facebook">
                <i class="fab fa-facebook-square"><span>Facebook</span></i>
            </div>
            <div class="google">
                <i class="fab fa-google-plus-square"><span>Google</span></i>
            </div>
        </div>
        <div class="signup">
            Not a member? <a href="#">Signup now</a>
        </div>

        <?php
    if (isset($_POST['sbm'])) {
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM user WHERE email='$mail' AND pass = '$pass'";
        $query = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($query);
        $row = mysqli_fetch_array($query);
        if ($num > 0) {
			$_SESSION['email'] = $mail;
			$_SESSION['pass'] = $pass;
            $pasd = $row['pass'];
            if ($pasd == $pass) {
               header("location: index.php");
            } else {
			echo "sai mật khẩu";
            }
        } else {
            if ($num > 0) {
                $_SESSION['email'] = $mail;
                $pasd = $row['pass'];
                if ($pasd == $pass) {
                    header('location: ');
                }
            } else {
                echo "sai mật khẩu";
            }
        }
    }
  
	?>
    </div>
</body>

</html>