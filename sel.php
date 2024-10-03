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
<form method="post">
  <div class="form-group">
    <label >Product</label>
    <input type="text" name="produit" class="form-control" placeholder="Produit">
  </div>
  <div class="form-group">
    <label>Marque</label>
    <input type="text" class="form-control"  name="marque" placeholder="Marque">
  </div>
  <div class="form-group">
    <label >Prix</label>
    <input type="text" name="prix" class="form-control" placeholder="Prix">
  </div>
  <div class="form-group">
    <label >Disponible</label>
    <input type="text" name="disponible" class="form-control" placeholder="Disponible">
  </div>
  <br>
  <button name="p" type="submit" class="btn btn-dark">Ajouter P</button>
</form>
<?php
     include("connection.php");
    if(isset($_POST['p'])){
        $produit = $_POST['produit'];
        $marque = $_POST['marque'];
        $prix = $_POST['prix'];
        $disponible = $_POST['disponible'];
        $query = "INSERT INTO produit (produit,marque,prix,disponible) values ('$produit','$marque','$prix','$disponible')";
        mysqli_query($connect,$query);
        header("location:pro.php");
    }
    ?>
























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

</style>