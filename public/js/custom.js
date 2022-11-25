const alertSuccess = (block, message, type) => {
    const wrapper = document.createElement('div')
    wrapper.innerHTML = [
        `<div class="alert alert-${type} alert-dismissible" role="alert">`,
        `   <div>${message}</div>`,
        '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
        '</div>'
    ].join('')
    block.append(wrapper)
}
$(function (){
    $('.phone_number').mask("+48 99 999-99-99", {placeholder: "+48 99 999-99-99"});
    $('.check_buyer').submit(function (e){
        e.preventDefault();
        var form = $(this);
        var input_class = $(form).find('input[type="radio"]:checked').attr('data-type');
        var value = $('.form-control[data-type="'+input_class+'"]').val();
        var url = input_class==='phone_number'?'buyer/find_by_phone/':'buyer/find_by_name/';
        $.ajax({
            method: 'POST',
            url: url,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                value: value
            },
            dataType: 'json',
            success: function (response){

            }
        });
    });
    $('.add_black_list').submit(function (e){
        e.preventDefault();
        var form = $(this)[0];
        var formData = new FormData(form);
        $.ajax({
            method: 'POST',
            url: '/blacklist/',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (response){
                var alert = document.getElementById('alert_black_list')
                if(response.success) {
                    form.reset();
                    alertSuccess(alert, 'Kupujący został pomyślnie umieszczony na czarnej liście', 'success')
                }else{
                    alertSuccess(alert, 'no', 'danger')
                }
            }
        });
    });
});
