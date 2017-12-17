<div class="modal fade" id="addPlanModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add new plan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addPlanForm" action="/plans" method="POST">
          <div class="form-group">
            <label for="plan_name" class="col-form-label">Plan name</label>
            <input type="text" class="form-control" id="plan_name" name="plan_name" required>
          </div>
          <div class="form-group">
            <label for="plan_description" class="col-form-label">Plan description</label>
            <textarea class="form-control" id="plan_description" name="plan_description"></textarea>
          </div>
          <div class="form-group">
            <label for="plan_difficulty" class="col-form-label">Plan difficulty</label>
            <select id="plan_difficulty" name="plan_difficulty" class="custom-select form-control" required>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
            </select>
          </div>
          {{ csrf_field() }}
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="addPlanForm">Add plan</button>
            </div>
        </form>
      </div>
      <div class="feedback-container"></div>
    </div>
  </div>
</div>