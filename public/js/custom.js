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
    $(document).on('focus', '.check', function (e) {
        e.preventDefault();
        $(this).parent().find('input[type="radio"]').click();
    });
    $('.phone_number').mask("+48 99 999-99-99", {placeholder: "+48 99 999-99-99"});
    $('.check_buyer').submit(function (e){
        e.preventDefault();
        var form = $(this);
        var input_class = $(form).find('input[type="radio"]:checked').attr('data-type');
        var value = $('.form-control[data-type="'+input_class+'"]').val();
        var url = input_class==='phone_number'?'buyer/find_by_phone':'buyer/find_by_name';
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
                $('.result_info').empty();
                $('.search_lbl').remove();
                var html = '<label class="form-label py-1 fw-bold search_lbl" style="margin-top: 5px;">Wyniki wyszukiwania</label>';
                if (response.items.length===0){
                    html += '<div class="card border-success mb-2">';
                    html += '<div class="card-body">';
                    html += '<h5 class="card-title">Nie znaleziono</h5>';
                    html += '<p class="card-text">Nie znaleziono wyników dla wprowadzonych danych.</p>';
                    html += '</div>';
                    html += '</div>';
                }else {
                    for (let i = 0; i < response.items.length; i++) {
                        html += '<div class="card border-danger mb-2">';
                        html += '<div class="card-body">';
                        html += '<h5 class="card-title"><a href="/buyer/' + response.items[i].phone + '">+' + response.items[i].phone + '</a></h5>';
                        html += '<h6 class="card-subtitle mb-2 text-muted">Imiona i nazwiska na fakturach:</h6>';
                        for (let fullNamesKey in response.items[i].full_names) {
                            html += '<h6 class="card-subtitle mb-2">' + response.items[i].full_names[fullNamesKey] + '</h6>';
                        }
                        html += '<p class="card-text">Kupujący <span class="text-danger fw-bold">'+ response.items[i].count +'</span> razy nie odebrał towaru za pobraniem</p>';
                        html += '</div>';
                        html += '</div>';
                    }
                }
                $('.result_info').append(html);
            }
        });

    });
    $('#add_black_list').submit(function (e){
        e.preventDefault();
        var form = $(this)[0];
        var formData = new FormData(document.getElementById('add_black_list'));
        $.ajax({
            method: 'POST',
            url: '/blacklist',
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
    $('#feedback_form').submit(function (e){
        e.preventDefault();
        var form = $(this)[0];
        var formData = new FormData(document.getElementById('feedback_form'));
        $.ajax({
            method: 'POST',
            url: '/feedback',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (response){
                if(response.success) {

                    html = '<h2 class="text-center py-5">Formularz zwrotny</h2>';
                    html += '<div class="card border-success mb-2">';
                    html += '<div class="card-header">Wiadomość została wysłana pomyślnie!</div>';
                    html += '<div class="card-body">';
                    html += '<h5 class="card-title">Dziękujemy za kontakt i życzymy miłego dnia!</h5>';
                    html += '</div>';
                    html += '</div>';
                    $('#feedback .row').empty().html(html)
                }
            }
        });
    });
});
