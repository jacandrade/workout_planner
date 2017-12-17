<div class="modal fade" id="addPlanDayModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add new plan day</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addPlanDayForm" action="/plan_days" method="POST">
          <div class="form-group">
            <label for="day_name" class="col-form-label">Plan day name</label>
            <input type="text" class="form-control" id="day_name" name="day_name" required>
          </div>
          <div class="form-group">
            <label for="plan_id" class="col-form-label">Select plan to which this day belongs</label>
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
          <div class="form-group">
            <label for="order" class="col-form-label">Order</label>
            <select id="order" name="order" class="custom-select form-control" required>
                <option value="">Please select</option>
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
                <button type="submit" class="btn btn-primary" form="addPlanDayForm">Add plan day</button>
            </div>
        </form>
      </div>
      <div class="feedback-container"></div>
    </div>
  </div>
</div>