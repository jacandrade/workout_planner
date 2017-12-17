import { setTimeout } from "timers";

/** delete action handlers */
$('#confirmDelete').on('click', function (e) {

    var id = $(this).data('planid');
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
    var id = button.data('planid') // Extract info from data-* attributes
    var token = button.data('token') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.btn-success').data('planid', id);
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
                }, 3000);
            }
        },
        error: function (jqXHR, status, error) {
            console.log(status + ': ' + error);
        }
    });
});