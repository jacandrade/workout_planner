<div class="modal fade" id="addExerciseModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add new exercise</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addExerciseForm" action="/exercises" method="POST">
          <div class="form-group">
            <label for="exercise_name" class="col-form-label">Exercise name</label>
            <input type="text" class="form-control" id="exercise_name" name="exercise_name" required>
          </div>
          {{ csrf_field() }}
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="addExerciseForm">Add exercise</button>
            </div>
        </form>
      </div>
      <div class="feedback-container"></div>
    </div>
  </div>
</div>