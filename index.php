<?php include("db.php") ?>

<?php include("includes/header.php") ?>

    <div class='container'>
        <div class='row main'>
            <div class="col s12 m4">

                    <?php if(isset($_SESSION['message'])){?>

                        <div class="chip col s12 light-blue lighten-4">
                        <a> <?= $_SESSION['message'] ?> </a>
                        <i class="close material-icons">close</i>
                        </div>

                    <?php } ?>

                    <form class="col s12" action="save_task.php" method="POST">
                        <div class="row">
                            <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" name="title" type="text" class="validate">
                            <label for="icon_prefix">Title Task</label>
                            </div>
                        </div>
                        <div class="row">   
                            <div class="input-field">
                                <i class="material-icons prefix">phone</i>
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

            <div class="col s12 m8">

            </div>
        </div>
    </div>

<?php include("includes/footer.php") ?>