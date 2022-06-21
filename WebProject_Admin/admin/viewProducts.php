<?php
include('includes/header.php');
// include('includes/topbar.php');
include('includes/sidebar.php');

?>
  <div class="content-wrapper">

  <h2 class="text-center">
   PRODUCT DETAILS
  </h2>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">PRICE</th>
      <th scope="col">DESCRIPTION</th>
    
      <th scope="col">QUANTITY</th>
      <th scope="col">STATUS</th>
      <th scope="col">ADDED ON</th>
    </tr>
  </thead>
  <tbody>

  <?php
    include('config/connection.php');

    $sql="SELECT * FROM `tbl_products`";
    $result= mysqli_query($con,$sql);

    while($row=mysqli_fetch_array($result))
    {
        echo " 




    <tr>
      <th scope='row'>".$row['id']."</th>
      <td>".$row['name']."</td>
      <td>".$row['price']."</td>
      <td>".$row['description']."</td>
      <td>".$row['quantity']."</td>
      <td>".$row['status']."</td>
      <td>".$row['created_on']."</td>

    </tr>
    ";?>
   <?php } ?>
  </tbody>
</table>

        </div>
    </div>
</div>
  </div>






<?php


   //footer is called in the footer section  (with  @copyright)


include('includes/footer.php');
?>