@if($plan)
    <div class="modal-header">
        <h5 class="modal-title">Edit plan</h5>
        <button type="button" class="close" data-dismiss="modal" data-target="#editPlanModal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form id="editPlanForm" action="/plans/{{ $plan->id}}" method="POST">
            <div class="form-group">
                <label for="plan_name" class="col-form-label">Plan name</label>
                <input type="text" class="form-control" id="plan_name" name="plan_name" 
                    value="{{ $plan->plan_name }}" required>
            </div>
            <div class="form-group">
                <label for="plan_description" class="col-form-label">Plan description</label>
                <textarea class="form-control" id="plan_description" name="plan_description">{{ $plan->plan_description }}</textarea>
            </div>
            <div class="form-group">
                <label for="plan_difficulty" class="col-form-label">Plan difficulty</label>
                <select id="plan_difficulty" name="plan_difficulty" class="custom-select form-control" required>
                    <option value="1" {{ $plan->plan_difficulty == 1 ? 'selected' : '' }}>One</option>
                    <option value="2" {{ $plan->plan_difficulty == 2 ? 'selected' : '' }}>Two</option>
                    <option value="3" {{ $plan->plan_difficulty == 3 ? 'selected' : '' }}>Three</option>
                    <option value="4" {{ $plan->plan_difficulty == 4 ? 'selected' : '' }}>Four</option>
                    <option value="5" {{ $plan->plan_difficulty == 5 ? 'selected' : '' }}>Five</option>
                </select>
            </div>
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close" data-dismiss="modal" data-taget="#editPlanModal">Cancel</button>
                <button type="submit" class="btn btn-success" form="editPlanForm">Save</button>
            </div>
        </form>
    </div>
@else
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Oops!</h4>
        <p>There was an error retrieving this plan. Plase, contact an admin.</p>
    </div>
@endif