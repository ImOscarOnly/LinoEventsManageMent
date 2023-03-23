<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Ex</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="formData">
            <input type="hidden" name="id" id="id">
            <div class="mb-3">
                <label class="form-label">Program Title</label>
                <input type="text" class="form-control" id="event_name" name="event_name" aria-describedby="emailHelp" placeholder="Enter Program Title" >
            </div>
            <div class="mb-3">
                <label class="form-label">Expected Participant</label>
                <input type="text" class="form-control" id="exp_participants" name="exp_participants" aria-describedby="emailHelp" placeholder="Enter Expected Participant" >
            </div>
            <div class="mb-3">
                <label class="form-label"> Date Conducted</label>
                <input type="text" class="form-control" id="event_sched" name="event_sched" aria-describedby="emailHelp" placeholder="Enter Date Conducted" >
            </div>
            <div class="mb-3">
                <label class="form-label"> Venue</label>
                <input type="text" class="form-control" id="event_venue" name="event_venue" aria-describedby="emailHelp" placeholder="Enter Event Venue" >
            </div>
            <div class="mb-3">
                <label class="form-label"> No. of Participants</label>
                <input type="text" class="form-control" id="num_participants" name="num_participants" aria-describedby="emailHelp" placeholder="Enter NO. OF PARTICIPANTS" >
            </div>
            <div class="mb-3">
                <label class="form-label"> Actual Participants</label>
                <input type="text" class="form-control" id="act_participants" name="act_participants" aria-describedby="emailHelp" placeholder="Enter Actual Participants " >
            </div>
            <div class="mb-3">
                <label class="form-label"> Event Type</label>
                <input type="text" class="form-control" id="event_type" name="event_type" aria-describedby="emailHelp" placeholder="Enter Event Type" >
            </div>   <div class="mb-3">
                <label class="form-label"> OBJECTIVES OF THE ACTIVITY</label>
                <input type="text" class="form-control" id="event_obj" name="event_obj" aria-describedby="emailHelp" placeholder="Enter OBJECTIVES OF THE ACTIVITY" >
            </div>   
            <div class="mb-3">
                <label class="form-label"> EXECUTIVE SUMMARY</label>
                <input type="text" class="form-control" id="exe_summary" name="exe_summary" aria-describedby="emailHelp" placeholder="Enter EXECUTIVE SUMMARY " >
            </div>
            <div class="mb-3">
                <label class="form-label">Documentation</label>
                <input type="text" class="form-control" id="documentation" name="documentation" aria-describedby="emailHelp" placeholder="Enter Documentation" >
            </div>
            <div class="mb-3">
                <label class="form-label"> Problems Encountered</label>
                <input type="text" class="form-control" id="prob_encounter" name="prob_encounter" aria-describedby="emailHelp" placeholder="Enter Problems Encountered " >
            </div>
            <div class="mb-3">
                <label class="form-label"> Recommendation</label>
                <input type="text" class="form-control" id="recommendation" name="recommendation" aria-describedby="emailHelp" placeholder="Enter Recommendation " >
            </div>
             <input type="hidden" id="method" name="update">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" name="addNew" id="btn-mul" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>