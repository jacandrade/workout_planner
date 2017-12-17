<div class="col-xs-10 col-sm-6 col-md-4 margin-20-v" id="planday-{{ $plan_day->id }}">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $plan_day->day_name }}</h4>
            <h4 class="card-title">Plan: {{ !empty($plan = $plan_day->plan) ? $plan->plan_name : 'No assigned plan' }}</h4>
            <a href="/plan_days/{{ $plan_day->id }}" class="btn btn-primary"><i class="fa fa-pencil fa-lg"></i> Edit</a>
            <button type="button" class="btn btn-danger" 
                data-toggle="modal" data-target="#deleteModal" data-assetid="{{ $plan_day->id }}" data-token="{{ csrf_token() }}">
                <i class="fa fa-trash fa-lg"></i> Delete
            </button>
        </div>
    </div>
</div>