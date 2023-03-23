
<?php include('includes/head.php') ?>
<?php include('includes/navigation.php') ?>

<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
  
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Event Info</h4>
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="filesearch">
                    <button style="float: right;" type="button" id="create-new" class="btn btn-success btn-rounded btn-sm"><i class="icon-plus"></i>Add</button>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Program Title
                          </th>
                          <th>
                            Expected Participants
                          </th>
                          <th>
                           Date Conducted
                          </th>
                          <th>
                           Venue
                          </th>
                          <th>
                            NO. OF PARTICIPANTS
                          </th>
                          <th>
                            ACTUAL PARTICIPANTS
                          </th>
                          <th>
                            EVENT TYPE
                          </th>
                          <th>
                           OBJECTIVES OF THE ACTIVITY
                          </th>
                          <th>
                           EXECUTIVE SUMMARY
                          </th>
                          <th>
                           DOCUMENTATION	
                          </th>
                          <th>
                           PROBLEMS ENCOUNTERED	
                          </th>
                          <th>
                           RECOMMENDATION
                          </th>
                        </tr>
                      </thead>
                      <tbody id="main-table"></tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <?php include('paps/papsModal.php'); ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <script src="paps/paps.js"></script>

  <?php include('includes/footer.php')?>