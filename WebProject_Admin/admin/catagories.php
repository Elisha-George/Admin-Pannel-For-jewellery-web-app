<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');
}
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');

?>

<div class="content-wrapper">

            <!-- general form elements -->
            <div class="card card-primary" >
              <div class="card-header text-center" >
                <h3 class="card-title text-center">Upload Product Catagories</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="config/catagoriesAction.php" method="post" enctype="multipart/form-data" style="width: 50%; margin: auto">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Catagory Name</label>
                    <input type="text" name="c_Name" class="form-control" id="exampleInputEmail1" placeholder="Catagory Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Type</label>
                    <input type="text"  name="Type" class="form-control" id="exampleInputPassword1" placeholder="Type">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text"  name="description" class="form-control" id="exampleInputPassword1" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Product Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                   
                   <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <input type="text" name="status" class="form-control" id="exampleInputPassword1" placeholder="Status">
                  </div>
                  </div>
  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="Upload" class="btn btn-primary">Upload</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
</div>
<?php


   //footer is called in the footer section  (with  @copyright)


include('includes/footer.php');
?>