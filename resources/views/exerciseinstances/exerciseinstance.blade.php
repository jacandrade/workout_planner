<div class="col-xs-10 col-sm-6 col-md-4 margin-20-v" id="instance-{{ $instance->id }}">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ empty($exercise = $instance->exercise) ? 'No exercise' : $exercise->exercise_name}}</h4>
            <p class="card-text">Duration: {{ $instance->exercise_duration }}</p>
            <p class="card-text">Order: {{ $instance->order }}</p>
            <ul class="list-group margin-20-v">
                @if(count($plan_days = $instance->plan_days) == 0)
                    <p class="card-text">No assigned plan days yet.</p>
                @else
                <p class="card-text">Plans days assigned this exercise instance:</p>
                    @foreach($plan_days as $plan_day)
                        <li class="list-group-item">{{ $plan_day->day_name }}</li>
                    @endforeach
                @endif
            </ul>
            <a href="/exercise_instance/{{ $instance->id }}" class="btn btn-primary"><i class="fa fa-pencil fa-lg"></i> Edit</a>
            <button type="button" class="btn btn-danger" 
                data-toggle="modal" data-target="#deleteModal" data-assetid="{{ $instance->id }}" data-token="{{ csrf_token() }}">
                <i class="fa fa-trash fa-lg"></i> Delete
            </button>
        </div>
    </div>
</div>