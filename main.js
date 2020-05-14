

$('form.ajax').submit(function() {

    var that = $(this),
        url = that.attr('action'),
        type = that.attr('method'),
        data = {};

    that.find('[name]', '[password]').each(function(index, value) {
        var that = $(this),
            name = that.attr('name'),
            pass = that.attr('password'),
            value = that.val();

        data[name] = value;
        data[pass] = value;
    });

    $.ajax({
        url : url,
        type : type,
        data: data,
        success: function(response) {
            console.log(response);
        }
    });
    
    return false;

});

