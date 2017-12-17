import { setTimeout } from "timers";

/** delete action handlers */
$('#confirmDelete').on('click', function (e) {

    var id = $(this).data('assetid');
    var token = $(this).data('token');
    if (id) {
        $.ajax({
            url: '/exercise_instances',
            type: 'POST',
            data: { _method: 'delete', _token: token, id: id },
            success: function (data, textStatus, jqXHR) {
                if (data.hasOwnProperty('error')) {
                    console.log(data);
                }
                else {
                    $('#confirmDelete').toggleClass('disabled');
                    $('#instance-' + data).remove();
                    $('.feedback-container')
                    .html(`
                        <div class="alert alert-success" role="alert">
                            Exercise instance deleted!
                        </div>
                    `);
                    
                    setTimeout(() => {
                        $('.feedback-container').html(null);
                        $('#deleteModal').modal('hide');
                        $('#confirmDelete').toggleClass('disabled');
                    }, 3000);
                }
            },
            error: function (jqXHR, status, error) {
                console.log(status + ': ' + error);
                $('.feedback-container')
                .html(`
                    <div class="alert alert-danger" role="alert">
                        ${status} - ${error}
                    </div>
                `);
                setTimeout(() => {
                    $('.feedback-container').html(null);
                },3000); 
            }
        });
    }

});

$('#deleteModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('assetid') // Extract info from data-* attributes
    var token = button.data('token') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.btn-success').data('assetid', id);
    modal.find('.btn-success').data('token', token);
})


/**Create action handlers */

$('#addExerciseInstanceForm').submit(function(e) {
    e.preventDefault();
    var form = $(this);
    var serialized = form.serializeArray();
    var plan_day_ids = serialized.reduce(function(a, current){
        if(current.name == 'plan_day_ids')
        {
            a.push(current.value);
        }

        return a;
    }, []);

    var clean = serialized.filter(function (current) {
        return current.name != 'plan_day_ids';
    });

    clean.push({name: 'plan_day_ids', value: plan_day_ids.join()})
    $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: clean,
        success: function (data, textStatus, jqXHR) {
            if (data.hasOwnProperty('error')) {
                console.log(data);
            }
            else {
                $(':submit').toggleClass('disabled'); 
                $('.row').append(data);
                $('.feedback-container')
                    .html(`
                        <div class="alert alert-success" role="alert">
                            Exercise instance added!
                        </div>
                    `);
                $('#addExerciseInstanceForm')[0].reset();
                setTimeout(() => {
                    $('.feedback-container').html(null);
                    $(':submit').toggleClass('disabled'); 
                }, 3000);
            }
        },
        error: function (jqXHR, status, error) {
            console.log(status + ': ' + error, jqXHR);
            $('.feedback-container')
            .html(`
                <div class="alert alert-danger" role="alert">
                    ${status} - ${error}
                </div>
            `);
            setTimeout(() => {
                $('.feedback-container').html(null);
            },3000); 
        }
    });
});