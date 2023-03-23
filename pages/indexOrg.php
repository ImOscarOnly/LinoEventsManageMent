<?php include('includes/head.php') ?>
    <div id="main-wrapper">
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Roles</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="card-title">List of Roles</h4>
                                <button style="float: right;" type="button" id="create-new" class="btn btn-success btn-rounded btn-sm"><i class="fa fa-plus"></i></button>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Organization Name</th>
                                                <th>Organization Type</th>
                                                <th>Organization Leader</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody id="rioMainTable"></tbody>
                                    </table>
                                    <?php include('organization/orgModal.php'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="module" src="organization/org.js"></script>

<?php include('includes/footer.php')?>