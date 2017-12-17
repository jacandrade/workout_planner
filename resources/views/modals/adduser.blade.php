<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add new user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addUserForm" action="/users" method="POST">
          <div class="form-group">
            <label for="firstname" class="col-form-label">First name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required>
          </div>
          <div class="form-group">
            <label for="lastname" class="col-form-label">Last name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" required>
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="plan_id" class="col-form-label">Select plan</label>
            <select id="plan_id" name="plan_id" class="custom-select form-control" required>
                <option value="">Please select</option>
                @if(!empty($plans))
                  @foreach($plans as $plan)
                      <option value="{{ $plan->id }}">{{ $plan->plan_name }}</option>
                  @endforeach
                @else
                  <option value="none">None</option>
                @endif
            </select>
          </div>
          {{ csrf_field() }}
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="addUserForm">Add user</button>
            </div>
        </form>
      </div>
      <div class="feedback-container"></div>
    </div>
  </div>
</div>