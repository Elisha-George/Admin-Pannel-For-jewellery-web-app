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
                <h3 class="card-title text-center">Upload Page Contents</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="config/contentAction.php" method="post" enctype="multipart/form-data" style="width: 50%; margin: auto">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Content For</label>
                    <input type="text" name="content_for" class="form-control" id="exampleInputEmail1" placeholder="page for which content is written">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Content Heading</label>
                    <input type="text" name="content_head" class="form-control" id="exampleInputEmail1" placeholder="heading">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Content</label>
                    <textarea type="text"  name="content" class="form-control" id="exampleInputPassword1" rows="8" cols="10"placeholder="content body"> </textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Content Type</label>
                    <input type="text"  name="content_type" class="form-control" id="exampleInputPassword1" placeholder="(e.g: blog etc)">
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