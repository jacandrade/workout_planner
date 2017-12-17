<div class="col-xs-10 col-sm-6 col-md-4 margin-20-v" id="exercise-{{ $exercise->id }}">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $exercise->exercise_name }}</h4>
            <a href="/exercises/{{ $exercise->id }}" class="btn btn-primary"><i class="fa fa-pencil fa-lg"></i> Edit</a>
            <button type="button" class="btn btn-danger" 
                data-toggle="modal" data-target="#deleteModal" data-assetid="{{ $exercise->id }}" data-token="{{ csrf_token() }}">
                <i class="fa fa-trash fa-lg"></i> Delete
            </button>
        </div>
    </div>
</div>