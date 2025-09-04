$(document).on('submit','form',function(event){
    event.preventDefault();
    var form = event.target;
    var form_data = new FormData(form);
    $.ajax({
        url: $(event.target).attr('action'),
        type: 'POST',
        data: form_data,
        processData: false,
        contentType: false,
        success: function(data){
            if((data.id ?? '') != ''){
                console.log(data);
                $.notify({ title:'Success', message:data.message }, { type:'success', });
                if($('#tr_'+data.id).length){
                    var sr = $('#tr_'+data.id+' .sr').text();
                    $('#tr_'+data.id).html('<td class="sr">'+sr+'</td>');
                    $('#tr_'+data.id).append(data.html);
                }else{
                    get_datatable();
                    $('.form-control').val('');
                }
                $('#edit_modal').modal('hide');
            }else{
                $.notify({ title:'Error', message:data }, { type:'danger', });
            }
            $('#modal_loader').remove();
        },
        error: function(xhr, status, error) {
                if (xhr.status === 422 && xhr.responseJSON.errors) {
                // Laravel validation errors
                let errors = xhr.responseJSON.errors;
                let messages = Object.values(errors).flat().join("<br>");
                $.notify({ title: 'Validation Error', message: messages }, { type: 'danger' });
            } else if (xhr.status === 500) {
                console.log(xhr.responseJSON.error);
                
                $.notify({ title: 'Server Error', message: xhr.responseJSON.message }, { type: 'danger' });
            } else {
                $.notify({ title: 'Error', message: 'Unexpected error occurred.' }, { type: 'danger' });
            }

            $('#modal_loader').remove();
        }
        
    });
});