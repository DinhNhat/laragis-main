$(function() {
    $("#upload-media").change(function() {

        const form = new FormData();

        form.append('media', $(this)[0].files[0]);

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('#csrf-token')[0].content},
            processData: false,
            contentType: false,
            type: 'POST',
            dataType: 'JSON',
            async: false,
            cache: false,
            enctype: 'multipart/form-data',
            data: form,
            url: SITE_URL + '/media-upload',
            success(results) {
                const mediaErrorMessage = $("#error-media-upload");

                if (results.error === false) {
                    // Remove error message if it presents
                    if (mediaErrorMessage.length > 0) {
                        mediaErrorMessage.addClass('d-none');
                    }

                    updateGallery(results);
                } else {
                    mediaErrorMessage.removeClass('d-none');
                    mediaErrorMessage.text(results.message);
                }
            }
        });

    });

    function updateGallery(media) {
        // Check if the list media is empty

        if ($("#no-media-list").length > 0) {
            $("#no-media-list").remove();

            // Append content next to the media list header
            $("h5.media-list-header").after(
                '<div class="row text-center" id="gallery-uploads"></div>');

        }

        $("#gallery-uploads").append('<div class="col-sm-6 col-xl-3">\n' +
            '                            <a href="'+ media.url +'" target="_blank" data-lightbox="example-set">\n' +
            '                                <img src="'+ media.url +'" class="img-fluid mb-30" alt="">\n' +
            '                            </a>\n' +
            '                        </div>');


    }
});
