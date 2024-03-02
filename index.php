<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>



<main class="container p-4">
  <div class="row">
    <div class="col md-4">
      <!--Messages-->

      <?php if(isset($_SESSION['message'])){ ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="active">
      <?= $_SESSION['message']?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
    </button> 
    </div>
    <?php session_unset(); } ?>

    <!-- ADD TASK FORM-->
    <div class="card card-body">
      <form action="save_task.php" method="POST">
        <div class="form-group">
        <input type="test" name="title" class="form-control" placeholder="Task Title"  autofocus>
        </div>
        <div class="form-group">
          <textarea name="description" id="" cols="30" rows="2" class="form-control" placeholder="Task-Description">
          </textarea>
        </div>
        <input type="submit" name="save_task" class="btn btn-success btnblock" value="Save Task">
        <div class="col-md-8">
          <table class="table-bordered">
            <thead>
              <tr>
              <th>title<th>
              <th>description<th>
              <th>Created At<th>
              <th>Action<th>
                <tr>
      </thead>
      <tbody>
        <?php
        $query= "SELECT * FROM task";
        $result_tasks = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result_tasks)) { ?>
       <tr>
        <td><?php echo$row['title']; ?></td>
        <td><?php echo$row['description']; ?></td>  
        <td><?php echo$row['created_at']; ?></td>    
        <td>
          <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary"></a>
          <i class="fas fa-marker"></i>
        </a>
        <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-danger"></a>
          <i class="fas fa-trash-alt"></i>
        </a>
        </td>
        </tr>

        <?php } ?>
        </tbody>
        </table>

    

      </form>
    </div>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>