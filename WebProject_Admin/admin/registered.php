<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');

?>


<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registered Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registered Users </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users with Their Information</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name(s)</th>
                    <th>Email</th>
                    <th>Registered On</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
    include('config/connection.php');

    $sql="SELECT * FROM `tbl_login`";
    $result= mysqli_query($con,$sql);

    while($row=mysqli_fetch_array($result))
    {
        echo " 





                  <tr>
                    <td>".$row['id']."</td>
                    <td>".$row['first_name']."</td>
                    <td>".$row['last_name']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['Date']."</td>
                  </tr>

                  ";?>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
    </div>
</div>




<?php


   //footer is called in the footer section  (with  @copyright)


include('includes/footer.php');
?>