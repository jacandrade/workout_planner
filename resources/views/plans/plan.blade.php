<div class="col-xs-10 col-sm-6 col-md-4 margin-20-v" id="plan-{{ $plan->id }}">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $plan->plan_name }}</h4>
            <p class="card-text">{{ $plan->plan_description ?? 'No description available' }}</p>
            <p class="card-text">Difficulty: {{ $plan->plan_difficulty }}</p>
            <ul class="list-group margin-20-v">
                @if(count($plan_days = $plan->plan_days) == 0)
                    <p class="card-text">No plan days use this plan yet.</p>
                @else
                <p class="card-text">Plans days using this plan:</p>
                    @foreach($plan_days->sortBy('order') as $plan_day)
                        <li class="list-group-item">
                            <p>{{ $plan_day->day_name }}</p>
                            <p>Order: {{ $plan_day->order }}</p>
                        </li>
                    @endforeach
                @endif
            </ul>
            <ul class="list-group margin-20-v">
                @if(count($users = $plan->users) == 0)
                    <p class="card-text">No Users assigned to this plan yet.</p>
                @else
                <p class="card-text">Users assigned this plan:</p>
                    @foreach($users as $user)
                        <li class="list-group-item">{{ $user->firstname.' '.$user->lastname }}</li>
                    @endforeach
                @endif
            </ul>
            <button type="button" id="editPlan" data-action="/plans/{{ $plan->id }}" 
                data-toggle="modal" data-target="#editPlanModal" class="btn btn-primary"><i class="fa fa-pencil fa-lg"></i> Edit</a>
            <button type="button" class="btn btn-danger" 
                data-toggle="modal" data-target="#deleteModal" data-assetid="{{ $plan->id }}" data-token="{{ csrf_token() }}">
                <i class="fa fa-trash fa-lg"></i> Delete
            </button>
        </div>
    </div>
</div>