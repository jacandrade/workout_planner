<div class="col-xs-10 col-sm-6 col-md-4 margin-20-v" id="user-{{ $user->id }}">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $user->firstname.' '.$user->lastname }}</h4>
            <p class="card-text">Email: {{ $user->email }}</p>
            <p class="card-text">Plan: {{ empty($plan = $user->plan) ? 'No assigned plan': $plan->plan_name }}</p>
            <a href="/users/{{ $user->id }}" class="btn btn-primary"><i class="fa fa-pencil fa-lg"></i> Edit</a>
            <button type="button" class="btn btn-danger" 
                data-toggle="modal" data-target="#deleteModal" data-assetid="{{ $user->id }}" data-token="{{ csrf_token() }}">
                <i class="fa fa-trash fa-lg"></i> Delete
            </button>
        </div>
    </div>
</div>