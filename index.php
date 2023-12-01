<?php //include('db.php');?>
<?php include('includes/header.php');?>
    <H1>HOLA MUNDO</H1>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <?php 
                    if(isset($_SESSION['message'])){?>
                        <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                            <?= $_SESSION['message'] ?>        <!--esto mismo se puede escribir como php? echo $_SESSION['message'] ?  el ?= se reemplaza por el echo -->
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>                        
                <?php
                        session_unset();
                    }?>
                <div class="card cad-body">
                    <form action="save_task.php" method="POST">
                        <div class="mb-3">
                            <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus required>
                        </div>    
                        <div class="mb-3">
                            <textarea name="description" rows="2" class="form-control" placeholder="Task Description" required></textarea>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="save_task" value="SAVE TASK">
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <table clas="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query        = "SELECT * FROM task";
                            $result_tasks = mysqli_query($conn,$query);

                            while($row = mysqli_fetch_array($result_tasks)) { ?>
                                <tr>
                                    <td><?= $row['title']?></td>
                                    <td><?= $row['description']?></td>
                                    <td><?= $row['created_at']?></td>
                                    <td>
                                        <a class="btn btn-secondary" href="edit_task.php?id=<?= $row['id']?>">
                                            <i class="fa-solid fa-marker"></i>
                                        </a>
                                        <a class="btn btn-danger" href="delete_task.php?id=<?= $row['id']?>">
                                            <i class="fa-solid fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                        <?php
                            }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php include('includes/footer.php');?>