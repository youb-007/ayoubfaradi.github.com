<head><link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'></head>
<?php
include("connection.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$query = "SELECT * FROM client WHERE id = '$id'";
$result = mysqli_query($connect,$query);
$row = mysqli_fetch_array($result);
if(isset($_POST['update'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $password = $_POST['password'];
if(!$result){
    echo "error";
}
else{
    header("location:select.php");
}
}
$query = "UPDATE client SET firstname = '$firstname' , lastname = '$lastname' , age = '$age' , email = '$email', password = '$password' WHERE id = '$id'";
mysqli_query( $connect,$query);
?>   <div  id="main_title"><head><h1>Update Client</h1><i class='bx bxs-user-pin' ></i></head></div>
<div class="all">
    <form action="" method="post">
            <div class="l1">
                <input type="text" placeholder="Firstname" name="firstname"  value="<?php echo $row['firstname'] ?>">
                <input type="text" placeholder="Lastname" name="lastname"  value="<?php echo $row['lastname'] ?>">
            </div>
            <div class="l2">
                <input type="number" placeholder="Age"  name="age"  value="<?php echo $row['age'] ?>">
                <i id="age" class="bx bx-calendar"></i>
            </div>
            <div class="l3">
                <input type="text" placeholder="Username or Email" name="email"  value="<?php echo $row['email'] ?>">
                <i class="bx bx-user"></i>
            </div>
            <div class="l4">
                <input type="password" placeholder="Password" name="password"  value="<?php echo $row['password'] ?>">
                <i class="bx bx-lock-alt"></i>
            </div>
    <button name="update">Update</button>
</form></div>
<div class="a">
<a href="select.php">Annuler</a>
<i class='bx bx-chevrons-left'></i></div>
</div>
<style>
*{  
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    background: url("4.jpg"),no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    min-height: 100VH;
    color: rgba(255, 255, 255, 0.878);
}
.all{
    width: 80%;
    margin: auto;
}
#main_title{
    text-align: center;
    text-align: center;
    color: #fff;
    padding: 10px;
    background: transparent;}
.l1 {
    margin: 15px 2px;
    display: flex;
}
input{
    width: 100%;
    margin: 3px 2px;
    padding: 55px;
    height: 30px;
    outline: none;
    border: none;
    background: rgba(255, 255, 255, 0.7);
    color:#fff;
    padding: 25px;
    border-radius: 25px;
}

form i{
    position: relative;
    top: -36.5px;
    left: 7.5px;
    color: #fff;
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
button:hover{
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
}
a{
    margin-bottom: 0;
    text-decoration: none;
    padding: 15px;
    font-size: 15px;
    font-weight: 500;
    color: #fff;
    height: 45px;
    width: 100%;
    border: none;
    border-radius: 15px;
    outline: none;
    background: #555;
    box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    transition: .3s ease-in-out;
    }

</style>