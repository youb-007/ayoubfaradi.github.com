<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
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
          <a class="nav-link" href="cl.php">Add Clients</a>
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
<header>
    <div id="main_title"><h1>Bienvenue</h1>
    <p>Products</p>
</header></div>
<div class="container">
    <table class="table table-hover table-bordered table-striped">
        <tr>
            <th>ID</th>
            <th>Produit</th>
            <th>Marque</th>
            <th>prix</th>
            <th>Disponible</th>
        </tr>

<?php 
include("connection.php");
$query = "SELECT * FROM produit";
$result = mysqli_query($connect,$query);
while($row = mysqli_fetch_array($result)){
    echo "<tr>
            <td>$row[id]</td>
            <td>$row[produit]</td>
            <td>$row[marque]</td>
            <td>$row[prix]</td>
            <td>$row[disponible]</td>
            
          </tr>";
}

echo "</table>";?>
</div>
<div class="f">
<form action="" method="post">
    <select name="select">
        <option value="oui">oui</option>
        <option value="non">non</option>
    </select>
    <button name="filtrer" type="submit" class="btn btn-dark">Filtrer</button>

</form>
</div>
<?php
include("connection.php");
 session_start();
 if(isset($_POST['filtrer'])){
    $_SESSION['name']=$_POST['select'];
    header("location:filtre.php");
}?>

<style>
    body{
    background: url("4.jpg"),no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    min-height: 100VH;
    color: rgba(255, 255, 255, 0.878);
}

    i{
    position: relative;
    top: 2px;
    left: -85.5px;
    color: #fff;
}
header{
    text-align: center;
}
.f{
    margin-left: 700px;
}
</style>