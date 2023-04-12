<?php include('layouts/head.php'); ?>
  <div
    id="main-wrapper"
    data-layout="vertical"
    data-navbarbg="skin5"
    data-sidebartype="full"
    data-sidebar-position="absolute"
    data-header-position="absolute"
    data-boxed-layout="full"
  >
    <?php include('layouts/header.php'); ?>
    <?php include('layouts/sidebar.php'); ?>
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Dashboard</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
            <div class="card">
              <div class="card-body">
              <div class="d-flex justify-content-between">
                  <h5 class="card-title mb-0">List of roles</h5>
                  <i style="font-size:25px; color:blue;" class="fa fa-plus-circle" aria-hidden="true"  id="create-new"></i>                
                </div>
                  <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Role Name</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="rioMainTable"></tbody>
                    </table>
                </div>
              </div>
            </div>
        </div>
        <?php include('layouts/foot.php'); ?>
        <?php include('roles/rolesModal.php'); ?>
      </div>
  </div>
<?php include('layouts/footer.php'); ?>
<script src="roles/roles.js"></script>