<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="l.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <span></span>
        <form action="" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Email" name="email" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" >
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remembre me </label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" name="submit" class="btn">
                Login
            </button>
            <div class="register">
                <p>Don't have an account? <a href="#">Register</a></p>
            </div>
        </form>
    </div>
<?php 
include('connection.php');
session_start();
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM client WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connect,$query);
    if(mysqli_num_rows($result)>0){
            $_SESSION['id'] = $row['id'];
            header("location:index.php");
    }
    else{?>
    <script>
        Swal.fire({
            title: "Try again!",
            text: "email or password is incorrect!",
            icon: "error",
            timer: 1500,
            showConfirmButton: false,
          });
    </script>
    <?php
    }?>

<?php
}?>
    </body>
</html>