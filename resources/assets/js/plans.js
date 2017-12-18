import { setTimeout } from "timers";

/** delete action handlers */
$('#confirmDelete').on('click', function (e) {

    var id = $(this).data('assetid');
    var token = $(this).data('token');
    if (id) {
        $.ajax({
            url: '/plans',
            type: 'POST',
            data: { _method: 'delete', _token: token, id: id },
            success: function (data, textStatus, jqXHR) {
                if (data.hasOwnProperty('error')) {
                    console.log(data);
                }
                else {
                    $('#confirmDelete').toggleClass('disabled');
                    $('#plan-' + data).remove();
                    $('.feedback-container')
                    .html(`
                        <div class="alert alert-success" role="alert">
                            Plan deleted!
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

$('#addPlanForm').submit(function (e) {
    e.preventDefault();
    var form = $(this);
    $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: form.serializeArray(),
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
                            Plan added!
                        </div>
                    `);
                $('#addPlanForm')[0].reset();
                setTimeout(() => {
                    $('.feedback-container').html(null);
                    $(':submit').toggleClass('disabled'); 
                }, 3000);
            }
        },
        error: function (jqXHR, status, error) {
            console.log(status + ': ' + error);
        }
    });
});


/** Edit action handlers */
$('#editPlanModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var action = button.data('action') // Extract info from data-* attributes
    var modalContent = $('#editPlanModal').find('.modal-content')
    modalContent.load(action, action);
    $('#editPlanModal').trigger('shown.bs.modal')
});

$('#editPlanModal').on('shown.bs.modal', function (event) {
    $('#editPlanForm').submit(function (e) {

        e.preventDefault();
        var form = $(this);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: form.serializeArray(),
            success: function (data, textStatus, jqXHR) {
                if (data.hasOwnProperty('error')) {
                    console.log(data);
                    $('.feedback-container')
                        .html(`
                            <div class="alert alert-success" role="alert">
                            ${ data.error }
                            </div>
                        `);
                }
                else {
                    $(':submit').toggleClass('disabled'); 
                    var cardNumber = form.attr('action').slice(form.attr('action').lastIndexOf('/')+1);
                    $('#plan-'+ cardNumber).replaceWith(data);
                    $('.feedback-container')
                        .html(`
                            <div class="alert alert-success" role="alert">
                                Plan updated!
                            </div>
                        `);
                    setTimeout(() => {
                        $('.feedback-container').html(null);
                        $(':submit').toggleClass('disabled'); 
                    }, 2000);
                }
            },
            error: function (jqXHR, status, error) {
                console.log(status + ': ' + error);
            }
        });
    });

});