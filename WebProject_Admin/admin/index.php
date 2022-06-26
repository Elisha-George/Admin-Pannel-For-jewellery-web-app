<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');
}

include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/connection.php');

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin Dashboard</h1>
            <h4 class="m-0">WELCOME : <?php echo $_SESSION['name']?></h4>
            <br>

         



          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="registered.php">Registered Users</a> </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->


            <?php
           
             $query = "SELECT id FROM tbl_orders ORDER BY id";  
             $query_run = mysqli_query($con, $query);
             $row = mysqli_num_rows($query_run);?>

            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo "$row" ?></h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
             
                $query = "SELECT id FROM tbl_orders ORDER BY id";  
                $query_run = mysqli_query($con, $query);
                $row = mysqli_num_rows($query_run);
               
                ?>
                <h3><?php echo "$row"  ?><sup style="font-size: 20px">%</sup></h3>

                <p>Order Percent</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <?php
          
            $query = "SELECT id FROM tbl_login ORDER BY id";  
            $query_run = mysqli_query($con, $query);
            $row = mysqli_num_rows($query_run);?>

            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo "$row"?></h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->

          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->


        <!-- Main row -->
        
        <!-- /.row (main row) -->


        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>


                    //footer is called in the footer section

<?php


   //footer is called in the footer section  (with  @copyright)


include('includes/footer.php');
?>