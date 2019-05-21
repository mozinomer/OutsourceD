jQuery(function($) {
    $('.call-upon-liberation').on('click', function(event) {
        event.preventDefault();

        var action = "themesupport";
        var tax_id = $(this).data('taxno-id');
        var security = $('#ajaxRegisterNonceID').attr('value');


        var data =  {
            'action':       action,
            'taxonomy':     tax_id,
            'security':     security
        }

        // debugging
        console.log("about to send", data);

        // finally, sending!
        $.post( outsource_auth_object.ajax_url, data, function( data ) {

            // history.pushState('ani deya mazak e!', $(this).html(), "/category/" + category);

            console.log(JSON.parse(data));

            var json = JSON.parse(data);

            $('.never-wanted-to-leave').html(json.html);
        }).fail(function(e) {
            // catching error if any.
            console.log("Failed", e);
        })
    });
});
