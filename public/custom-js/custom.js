$(function() {
    $("#upload-media").change(function() {

        console.log('Media upload is proocessing...');

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
                if (results.error === false) {
                    updateGallery(results);
                } else {
                    alert('Upload media failed');
                }
            }
        });

    });

    function updateGallery(media) {
        $("#gallery-uploads").append('<div class="col-sm-6 col-xl-3">\n' +
            '                            <a href="'+ media.url +'" target="_blank" data-lightbox="example-set">\n' +
            '                                <img src="'+ media.url +'" class="img-fluid mb-30" alt="">\n' +
            '                            </a>\n' +
            '                        </div>');
    }
});
