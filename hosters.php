<?php 
  $hoster = $_GET['hoster'];
  $pageTitle = $hoster . " data";
  session_start();
  if(isset($_SESSION['username']) && isset($_GET['hoster'])) {
    if($hoster == "High_Board"){
      include "init.php";    
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card mt-4">
            <div class="card-header">
              <h3 class="card-title"><?php echo $hoster ?> Table</h3>
            </div>
            <!-- ./card-header -->
            <div class="card-body">
              <div class="hosters_options mb-2">
                <a href="hoster_add.php?hoster=<?php echo $hoster?>" class="btn btn-info">Add <i class="fas fa-user-plus ml-1"></i></a>
              </div>
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Commity</th>
                    <th>Position</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    if($hoster == "High_Board"){
                      $HosterData = selectHighBoard();
                    }
                    $i = 1;
                    foreach($HosterData as $HosterDataInfo){
                  ?>
                  <tr data-widget="expandable-table" aria-expanded="false">
                    <td><?php echo $i?></td>
                    <td>
                      <?php 
                        if($HosterDataInfo['position_name'] == 'President'){
                          echo "<i class='fas fa-chess-queen'></i> ";
                        }
                        echo $HosterDataInfo['first_name'] . " " . $HosterDataInfo['last_name']
                      ?>
                    </td> 
                    <td><?php echo $HosterDataInfo['mobile']?></td>
                    <td><?php echo $HosterDataInfo['commity_name']?></td>
                    <td><?php echo $HosterDataInfo['position_name']?></td>
                    <td>
                      <a href="#" class="btn btn-primary">Edit <i class="far fa-edit ml-1"></i></a>
                      <a href="#" class="btn btn-warning">View <i class="far fa-eye ml-1"></i></a>
                      <a href="#" class="btn btn-danger">Delete <i class="far fa-trash-alt ml-1"></i></a>
                    </td>
                  </tr>
                  <?php 
                      $i++;
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div>
  </section>
</div>


<?php 
    } else {
      header("Location:index.php");
      exit();
    }
  } else {
    header("Location:index.php");
    exit();
  } 
?>