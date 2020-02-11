<?php include("db.php") ?>

<?php include("includes/header.php") ?>

    <div class='container'>
        <div class='row main'>
            <div class="col s12 m4 ">

                    <?php if(isset($_SESSION['message'])){?>

                        <div class="chip col s12 <?= $_SESSION['colorMessage'] ?>">
                        <a> <?= $_SESSION['message'] ?> </a>
                        <i class="close material-icons">close</i>
                        </div>

                    <?php session_unset();} ?>

                    <form class="col s12" action="save_task.php" method="POST">
                        <div class="row">dit_task.php?id=2
                            <d<div class='container'>
        <div class='row main'>
            <div class="col s12 m4 ">

                    <?php if(isset($_SESSION['message'])){?>

                        <div class="chip col s12 <?= $_SESSION['colorMessage'] ?>">
                        <a> <?= $_SESSION['message'] ?> </a>
                        <i class="close material-icons">close</i>
                        </div>

                    <?php session_unset();} ?>

                    <form class="col s12" action="save_task.php" method="POST">
                        <div class="row">dit_task.php?id=2
                            <div class="input-field">
                            <i class="material-icons prefix">book</i>
                            <input id="icon_prefix" name="title" type="text" class="validate">
                            <label for="icon_prefix">Title Task</label>
                            </div>
                        </div>
                        <div class="row">   
                            <div class="input-field">
                            <div class='container'>
        <div class='row main'>
            <div class="col s12 m4 ">

                    <?php if(isset($_SESSION['message'])){?>

                        <div class="chip col s12 <?= $_SESSION['colorMessage'] ?>">
                        <a> <?= $_SESSION['message'] ?> </a>
                        <i class="close material-icons">close</i>
                        </div>

                    <?php session_unset();} ?>

                    <form class="col s12" action="save_task.php" method="POST">
                        <div class="row">dit_task.php?id=2
                            <div class="input-field">
                            <i class="material-icons prefix">book</i>
                            <input id="icon_prefix" name="title" type="text" class="validate">
                            <label for="icon_prefix">Title Task</label>
                            </div>
                        </div>
                        <div class="row">   
                            <div class="input-field">
                                <i class="material-icons prefix">chat</i>
                                <textarea id="textarea1" name="description" class="materialize-textarea"></textarea>
                                <label for="icon_telephone">Description Task</label>
                            </div>
                        </div>
                        <div class="row center">
                            <button class="btn waves-effect waves-light col s12" type="submit" name="save_task">Save Task
                            <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
            </div>

            <div class="col s12 m7 offset-m1">

                <div class='row'>
                    <table class="highlight col s12">
                            <t<div class='container'>
        <div class='row main'>
            <div class="col s12 m4 ">

                    <?php if(isset($_SESSION['message'])){?>

                        <div class="chip col s12 <?= $_SESSION['colorMessage'] ?>">
                        <a> <?= $_SESSION['message'] ?> </a>
                        <i class="close material-icons">close</i>
                        </div><div class='container'>
        <div class='row main'>
            <div class="col s12 m4 ">

                    <?php if(isset($_SESSION['message'])){?>

                        <div class="chip col s12 <?= $_SESSION['colorMessage'] ?>">
                        <a> <?= $_SESSION['message'] ?> </a>
                        <i class="close material-icons">close</i>
                        </div>

                    <?php session_unset();} ?>

                    <form class="col s12" action="save_task.php" method="POST">
                        <div class="row">dit_task.php?id=2
                            <div class="input-field">
                            <i class="material-icons prefix">book</i>
                            <input id="icon_prefix" name="title" type="text" class="validate">
                            <label for="icon_prefix">Title Task</label>
                            </div>
                        </div>
                        <div class="row">   
                            <div class="input-field">
                                <i class="material-icons prefix">chat</i>
                                <textarea id="textarea1" name="description" class="materialize-textarea"></textarea>
                                <label for="icon_telephone">Description Task</label>
                            </div>
                        </div>
                        <div class="row center">
                            <button class="btn waves-effect waves-light col s12" type="submit" name="save_task">Save Task
                            <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
            </div>

            <div class="col s12 m7 offset-m1">

                <div class='row'>
                    <table class="highlight col s12">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                            </thead>

                            <tbody>

                                <?php 
                                $query = "select * from task";
                                $resultado = mysqli_query($conn,$query);

                                while($row = mysqli_fetch_array($resultado)){?>

                                    <tr>
                                        <td> <?php echo $row['title']?> </td>
                                        <td> <?php echo $row['description']?> </td>
                                        <td> <?php echo $row['created_task']?> </td>
                                        <td>
                                        <a href="delete_task.php?id=<?php echo $row['id']?>"><i class='material-icons'>delete_forever</i></a>
                                        <a href="edit_task.php?id=<?php echo $row['id']?>"><i class='material-icons'>edit</i></a>
                                        </td>
                                    </tr>

                                <?php  } ?>

                            </tbody>
                    </table>
                </div>
                    
            </div>
        </div>
    </div>

                    <?php session_unset();} ?>

                    <form class="col s12" action="save_task.php" method="POST">
                        <div class="row">dit_task.php?id=2
                            <div class="input-field">
                            <i class="material-icons prefix">book</i>
                            <input id="icon_prefix" name="title" type="text" class="validate">
                            <label for="icon_prefix">Title Task</label>
                            </div>
                        </div>
                        <div class="row">   
                            <div class="input-field">
                                <i class="material-icons prefix">chat</i>
                                <textarea id="textarea1" name="description" class="materialize-textarea"></textarea>
                                <label for="icon_telephone">Description Task</label>
                            </div>
                        </div>
                        <div class="row center">
                            <button class="btn waves-effect waves-light col s12" type="submit" name="save_task">Save Task
                            <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
            </div>

            <div class="col s12 m7 offset-m1">

                <div class='row'>
                    <table class="highlight col s12">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                            </thead>

                            <tbody>

                                <?php 
                                $query = "select * from task";
                                $resultado = mysqli_query($conn,$query);

                                while($row = mysqli_fetch_array($resultado)){?>

                                    <tr>
                                        <td> <?php echo $row['title']?> </td>
                                        <td> <?php echo $row['description']?> </td>
                                        <td> <?php echo $row['created_task']?> </td>
                                        <td>
                                        <a href="delete_task.php?id=<?php echo $row['id']?>"><i class='material-icons'>delete_forever</i></a>
                                        <a href="edit_task.php?id=<?php echo $row['id']?>"><i class='material-icons'>edit</i></a>
                                        </td>
                                    </tr>

                                <?php  } ?>

                            </tbody>
                    </table>
                </div>
                    
            </div>
        </div>
    </div>head>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                            </thead>

                            <tbody>

                                <?php 
                                $query = "select * from task";
                                $resultado = mysqli_query($conn,$query);

                                while($row = mysqli_fetch_array($resultado)){?>

                                    <tr>
                                        <td> <?php echo $row['title']?> </td>
                                        <td> <?php echo $row['description']?> </td>
                                        <td> <?php echo $row['created_task']?> </td>
                                        <td>
                                        <a href="delete_task.php?id=<?php echo $row['id']?>"><i class='material-icons'>delete_forever</i></a>
                                        <a href="edit_task.php?id=<?php echo $row['id']?>"><i class='material-icons'>edit</i></a>
                                        </td>
                                    </tr>

                                <?php  } ?>

                            </tbody>
                    </table>
                </div>
                    
            </div>
        </div>
    </div> <i class="material-icons prefix">chat</i>
                                <textarea id="textarea1" name="description" class="materialize-textarea"></textarea>
                                <label for="icon_telephone">Description Task</label>
                            </div>
                        </div>
                        <div class="row center">
                            <button class="btn waves-effect waves-light col s12" type="submit" name="save_task">Save Task
                            <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
            </div>

            <div class="col s12 m7 offset-m1">

                <div class='row'>
                    <table class="highlight col s12">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                            </thead>

                            <tbody>

                                <?php 
                                $query = "select * from task";
                                $resultado = mysqli_query($conn,$query);

                                while($row = mysqli_fetch_array($resultado)){?>

                                    <tr>
                                        <td> <?php echo $row['title']?> </td>
                                        <td> <?php echo $row['description']?> </td>
                                        <td> <?php echo $row['created_task']?> </td>
                                        <td>
                                        <a href="delete_task.php?id=<?php echo $row['id']?>"><i class='material-icons'>delete_forever</i></a>
                                        <a href="edit_task.php?id=<?php echo $row['id']?>"><i class='material-icons'>edit</i></a>
                                        </td>
                                    </tr>

                                <?php  } ?>

                            </tbody>
                    </table>
                </div>
                    
            </div>
        </div>
    </div>iv class="input-field">
                            <i class="material-icons prefix">book</i>
                            <input id="icon_prefix" name="title" type="text" class="validate">
                            <label for="icon_prefix">Title Task</label>
                            </div>
                        </div>
                        <div class="row">   
                            <div class="input-field">
                                <i class="material-icons prefix">chat</i>
                                <textarea id="textarea1" name="description" class="materialize-textarea"></textarea>
                                <label for="icon_telephone">Description Task</label>
                            </div>
                        </div>
                        <div class="row center">
                            <button class="btn waves-effect waves-light col s12" type="submit" name="save_task">Save Task
                            <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
            </div>

            <div class="col s12 m7 offset-m1">

                <div class='row'>
                    <table class="highlight col s12">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                            </thead>

                            <tbody>

                                <?php 
                                $query = "select * from task";
                                $resultado = mysqli_query($conn,$query);

                                while($row = mysqli_fetch_array($resultado)){?>

                                    <tr>
                                    <div class='container'>
        <div class='row main'>
            <div class="col s12 m4 ">

                    <?php if(isset($_SESSION['message'])){?>

                        <div class="chip col s12 <?= $_SESSION['colorMessage'] ?>">
                        <a> <?= $_SESSION['message'] ?> </a>
                        <i class="close material-icons">close</i>
                        </div>

                    <?php session_unset();} ?>

                    <form class="col s12" action="save_task.php" method="POST">
                        <div class="row">dit_task.php?id=2
                            <div class="input-field">
                            <i class="material-icons prefix">book</i>
                            <input id="icon_prefix" name="title" type="text" class="validate">
                            <label for="icon_prefix">Title Task</label>
                            </div>
                        </div>
                        <div class="row">   
                            <div class="input-field">
                                <i class="material-icons prefix">chat</i>
                                <textarea id="textarea1" name="description" class="materialize-textarea"></textarea>
                                <label for="icon_telephone">Description Task</label>
                            </div>
                        </div>
                        <div class="row center">
                            <button class="btn waves-effect waves-light col s12" type="submit" name="save_task">Save Task
                            <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
            </div>

            <div class="col s12 m7 offset-m1">

                <div class='row'>
                    <table class="highlight col s12">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                            </thead>

                            <tbody>

                                <?php 
                                $query = "select * from task";
                                $resultado = mysqli_query($conn,$query);

                                while($row = mysqli_fetch_array($resultado)){?>

                                    <tr>
                                        <td> <?php echo $row['title']?> </td>
                                        <td> <?php echo $row['description']?> </td>
                                        <td> <?php echo $row['created_task']?> </td>
                                        <td>
                                        <a href="delete_task.php?id=<?php echo $row['id']?>"><i class='material-icons'>delete_forever</i></a>
                                        <a href="edit_task.php?id=<?php echo $row['id']?>"><i class='material-icons'>edit</i></a>
                                        </td>
                                    </tr>

                                <?php  } ?>

                            </tbody>
                    </table>
                </div>
                    
            </div>
        </div>
    </div>          <td> <?php echo $row['title']?> </td>
                                        <td> <?php echo $row['description']?> </td>
                                        <td> <?php echo $row['created_task']?> </td>
                                        <td>
                                        <a href="delete_task.php?id=<?php echo $row['id']?>"><i class='material-icons'>delete_forever</i></a>
                                        <a href="edit_task.php?id=<?php echo $row['id']?>"><i class='material-icons'>edit</i></a>
                                        </td>
                                    </tr>

                                <?php  } ?>

                            </tbody>
                    </table>
                </div>
                    
            </div>
        </div>
    </div>

<?php include("includes/footer.php") ?>