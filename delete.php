<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<?php
include("connection.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$query = "DELETE FROM client WHERE id = '$id'";
mysqli_query($connect,$query);
header("location:select.php");
?>

<script>
            Swal.fire({
            title: "Saved!",
            text: "is deleted succesfuly!",
            icon: "success",
            timer: 2000,
            showConfirmButton: false,
          });
        
        </script>


