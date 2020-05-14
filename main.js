$('form.ajax').submit(function() {
    
    var url = $(this).attr('action'),
        type = $(this).attr('method'),
        data = $(this).serialize();

    console.log(data);

    $.ajax({
        url : url,
        type : type,
        data: data,
        success: function(response) {
            $('body').html(response);
        }
    });
    
    return false;

});


