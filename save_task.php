
<?php

include('db.php');

if(isset($_POST['save_task'])){
    $titleTask = $_POST['title'];
    $descTask = $_POST['description'];

    $query = "insert into task (title,description) values ('$titleTask','$descTask')";

    $result = mysqli_query($conn,$query);

    if(!$result){
        die('FALLO en la insercion');
    }

    $_SESSION['message'] = 'Task saved';
    $_SESSION['colorMessage'] = 'light-blue lighten-4';

    header("Location: index.php");

}

?>