jQuery(function($) {

    var file_frame;

    $(document).on('click', '#gallery3-metabox a.gallery3-add', function(e) {

        e.preventDefault();

        if (file_frame) file_frame.close();

        file_frame = wp.media.frames.file_frame = wp.media({
            title: $(this).data('uploader-title'),
            button: {
                text: $(this).data('uploader-button-text'),
            },
            multiple: true
        });

        file_frame.on('select', function() {
            var listIndex = $('#gallery3-metabox-list li').index($('#gallery3-metabox-list li:last')),
                selection = file_frame.state().get('selection');

            selection.map(function(attachment, i) {
                attachment = attachment.toJSON(),
                    index      = listIndex + (i + 1);

                $('#gallery3-metabox-list').append('<li><input type="hidden" name="vdw_gallery3_id[' + index + ']" value="' + attachment.id + '"><img class="image-preview" src="' + attachment.sizes.thumbnail.url + '"><a class="change-image button button-small" href="#" data-uploader-title="Change image" data-uploader-button-text="Change image">Change image</a><br><small><a class="remove-image" href="#">Remove image</a></small></li>');
            });
        });

        makeSortable();

        file_frame.open();

    });

    $(document).on('click', '#gallery3-metabox a.change-image', function(e) {

        e.preventDefault();

        var that = $(this);

        if (file_frame) file_frame.close();

        file_frame = wp.media.frames.file_frame = wp.media({
            title: $(this).data('uploader-title'),
            button: {
                text: $(this).data('uploader-button-text'),
            },
            multiple: false
        });

        file_frame.on( 'select', function() {
            attachment = file_frame.state().get('selection').first().toJSON();

            that.parent().find('input:hidden').attr('value', attachment.id);
            that.parent().find('img.image-preview').attr('src', attachment.sizes.thumbnail.url);
        });

        file_frame.open();

    });

    function resetIndex() {
        $('#gallery3-metabox-list li').each(function(i) {
            $(this).find('input:hidden').attr('name', 'vdw_gallery3_id[' + i + ']');
        });
    }

    function makeSortable() {
        $('#gallery3-metabox-list').sortable({
            opacity: 0.6,
            stop: function() {
                resetIndex();
            }
        });
    }

    $(document).on('click', '#gallery3-metabox a.remove-image', function(e) {
        e.preventDefault();

        $(this).parents('li').animate({ opacity: 0 }, 300, function() {
            $(this).remove();
            resetIndex();
        });
    });

    makeSortable();

});