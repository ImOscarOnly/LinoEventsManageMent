<div class="modal fade" id="rioModal" tabindex="-1" aria-labelledby="rioModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rioModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" id="formBodyData">
        <input type="hidden" id="method" name="update">
        <input type="hidden" name="id" id="id">
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Deparment Name</label>
                <input type="email" class="form-control" id="office_name" name="office_name">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" name="addNew" id="btn-mul" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>