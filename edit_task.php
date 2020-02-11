<?php

include('db.php');

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $query = "select * from  task where id = $id";

    $result = mysqli_query($conn, $query);

    //verifica si hay registros 
    if($result){
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $descTask = $row['description'];

    }
}

if(isset($_POST['edit_task'])){
    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "update task set title = '$title' , description = '$description' where id = $id ";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die('Error al editar tarea');
    }

    $_SESSION['message'] = 'Task update';
    $_SESSION['colorMessage'] = 'blue lighten-3';

    header('Location: index.php');
}
?>

<?php include('includes/header.php') ?>

<div class='container'>
        <div class='row main'>
            <div class="col s12 m4 offset-m4">
                    <form class="col s12" action="edit_task.php?id=<?php echo $_GET['id'];?>" method="POST">
                        <div class="row">
                            <div class="input-field">
                            <i class="material-icons prefix">book</i>
                            <input id="icon_prefix" name="title" type="text" class="validate" value='<?php echo $title ?>'>
                            <label for="icon_prefix">Edit Title Task</label>
                            </div>
                        </div>
                        <div class="row">   
                            <div class="input-field">
                                <i class="material-icons prefix">chat</i>
                                <textarea id="textarea1" name="description" class="materialize-textarea"> <?php echo $descTask ?> </textarea>
                                <label for="icon_telephone">Edit Description Task</label>
                            </div>
                        </div>
                        <div class="row center">
                            <button class="btn waves-effect waves-light col s12" type="submit" name="edit_task">EDIT
                            <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>

<?php include('includes/footer.php')?>