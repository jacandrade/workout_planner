<div class="col-xs-10 col-sm-6 col-md-4 margin-20-v" id="plan-{{ $plan->id }}">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $plan->plan_name }}</h4>
            <p class="card-text">{{ $plan->plan_description }}</p>
            <p class="card-text">Difficulty: {{ $plan->plan_difficulty }}</p>
            <a href="/plans/{{ $plan->id }}" class="btn btn-primary"><i class="fa fa-pencil fa-lg"></i> Edit</a>
            <button type="button" class="btn btn-danger" 
                data-toggle="modal" data-target="#deleteModal" data-planid="{{ $plan->id }}" data-token="{{ csrf_token() }}">
                <i class="fa fa-trash fa-lg"></i> Delete
            </button>
        </div>
    </div>
</div>