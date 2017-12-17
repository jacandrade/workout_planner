<div class="modal fade" id="addExerciseInstanceModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add new exercise instance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addExerciseInstanceForm" action="/exercise_instances" method="POST">
          <div class="form-group">
            <label for="exercise_id" class="col-form-label">Select exercise</label>
            <select id="exercise_id" name="exercise_id" class="custom-select form-control" required>
                <option value="">Please select</option>
                @if(!empty($exercises))
                  @foreach($exercises as $exercise)
                      <option value="{{ $exercise->id }}">{{ $exercise->exercise_name }}</option>
                  @endforeach
                @else
                  <option value="none">None</option>
                @endif
            </select>
          </div>
          <div class="form-group">
            <label for="plan_day_ids" class="col-form-label">Select plan day</label>
            <select multiple id="plan_day_ids" name="plan_day_ids" class="custom-select form-control" required>
                <option value="">Please select</option>
                @if(!empty($plan_days))
                  @foreach($plan_days as $plan_day)
                      <option value="{{ $plan_day->id }}">{{ $plan_day->day_name }}</option>
                  @endforeach
                @else
                  <option value="none">None</option>
                @endif
            </select>
          </div>
          <div class="form-group">
            <label for="exercise_duration" class="col-form-label">Exercise dutaion (seconds)</label>
            <input type="number" class="form-control" id="exercise_duration" name="exercise_duration" required>
          </div>
          <div class="form-group">
            <label for="order" class="col-form-label">Order</label>
            <select id="order" name="order" class="custom-select form-control" required>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
                <option value="6">Six</option>
                <option value="7">Seven</option>
                <option value="8">Eight</option>
                <option value="9">Nine</option>
                <option value="10">Ten</option>
            </select>
          </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="addExerciseInstanceForm">Add exercise</button>
            </div>
            {{ csrf_field() }}
        </form>
      </div>
      <div class="feedback-container"></div>
    </div>
  </div>
</div>