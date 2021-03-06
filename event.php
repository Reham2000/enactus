<?php 
ob_start(); 
session_start();
$page_name = "Enactus Events";
$style = "members.css";
$script = "";
include "init.php";
if(isset($_SESSION['username'])){
    $events_data = getAllData("event");
    $i = 1;
?>
<div class="content">
  <section class="content">
    <div class="container">
      <!-- /.row -->
      <div class="row justify-content-center">
        <div class="col-9">
          <div class="card mt-4">
            <div class="card-header">
              <h3 class="card-title">Events Table</h3>
            </div>
            <!-- ./card-header -->
            <div class="card-body">
              <div class="hosters_options mb-2">
                <a href="add_event.php" class="btn btn-info">Add <i class="fas fa-user-plus ml-1"></i></a>
              </div>
              <table class="table table-striped table-bordered table-hover table-responsive">
                  <tr>
                  <?php 
                    foreach($events_data as $events_data_info){
                  ?>
                    <td>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                <img src="img/<?php echo $events_data_info['img']?>" alt="event image"style="width:100%;height:100%">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $events_data_info['ename']?></h5>
                                        <p class="card-text"><?php echo $events_data_info['descrip']?></p>
                                        <p class="card-text"><small class="text-muted"><?php echo $events_data_info['eyear']?></small></p>
                                        <a href="<?php echo $events_data_info['link']?>"class="m-2 btn btn-sm btn-light">More...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="py-5">
                      <a href="update_event.php?id=<?php echo  $events_data_info['id'];?>" class="edit_button btn btn-primary mr-3"> <i class="far fa-edit ml-1"></i></a>
                    </td>
                    <td class="py-5">
                      <a href="delete.php?from=event&id=<?php echo  $events_data_info['id'];?>" class="btn btn-danger delete_button"><i class="far fa-trash-alt ml-1"></i></a>
                    </td>
                  </tr>
                 
                  
                    
                  <?php 
                      $i++;
                    }
                  ?>
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

}

else{
    header("location:signin.php");
}
ob_end_flush();
