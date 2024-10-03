<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Clients</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="a.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
  <div class="container-fluid">
    <a class="navbar-brand">Crud php</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="select.php">Clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pro.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Add Clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sel.php">Add Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dec.php">Deconnexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div  id="main_title"><head><h1>Bienvenue Client</h1><i class='bx bxs-user-pin' ></i></head></div>
    <div class="all">
        <form action="" method="post">
            <div class="l1">
                <input type="text" placeholder="Firstname" name="firstname">
                <input type="text" placeholder="Lastname" name="lastname">
            </div>
            <div class="l2">
                <input type="number" placeholder="Age"  name="age">
                <i id="age" class="bx bx-calendar"></i>
            </div>
            <div class="l3">
                <input type="text" placeholder="Username or Email" name="email">
                <i class="bx bx-user"></i>
            </div>
            <div class="l4">
                <input type="password" placeholder="Password" name="password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <button name="submit">Ajouter</button>
        </form>
    </div>
    <?php
     include("connection.php");
    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "INSERT INTO client (firstname,lastname,age,email,password) values ('$firstname','$lastname','$age','$email','$password')";
        mysqli_query($connect,$query);
        header("location:select.php");
        

    }?>
</div>
</body>
</html>
<style>
    body{
    background: url("4.jpg"),no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    min-height: 100VH;
    color: rgba(255, 255, 255, 0.878);
}
button{
    font-size: 15px;
    font-weight: 500;
    color: #fff;
    height: 45px;
    width: 100%;
    border: none;
    border-radius: 30px;
    outline: none;
    background: rgba(255, 255, 255, 0.7);
    cursor: pointer;
    transition: .3s ease-in-out;
}
</style>