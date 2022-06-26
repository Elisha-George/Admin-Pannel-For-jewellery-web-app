
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN PANNEL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info">
          <?php
          error_reporting(0);
          session_start();
          include('../config/loginAction.php');
          ?>
          <a href="#" class="d-block"><?php echo $_SESSION['name'] ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="forgetPassword.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                   Change Password
                    
                  </p>
                </a>
               
              </li>
            </ul>
          </li>
          


          
          <li class="nav-item">
            <a href="viewProducts.php" class="nav-link">
              <i class="nav-icon fas fa-box"></i>
              <p>
                View Products
              </p>
            </a>
          </li>
         

              
          <li class="nav-item">
            <a href="registered.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Registered Users
              </p>
            </a>
          </li>
         
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Add
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addProducts.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                   Products
   
                  </p>
                </a>
               
              </li>
              <li class="nav-item">
                <a href="catagories.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Product Catagories
                  </p>
                </a>
              
              </li>
              <li class="nav-item">
                <a href="content.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Content</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="banner.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banners</p>
                </a>
</li>
          </li>

        
          
        </ul>
        
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
