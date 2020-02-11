<?php

include("db.php");

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $query = "delete from task where id = $id";

    $result = mysqli_query($conn,$query);

    if(!$result){
        echo "ERROR AL ELIMINAR";
    }

    $_SESSION['message'] = 'Task eliminated';
    $_SESSION['colorMessage'] = 'red darken-1';

    header("Location: index.php");
}

?>