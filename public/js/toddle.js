$(document).ready(function() {
    $('.cont2').hide();
    $('.btn-action').click(function(e) {
        e.preventDefault();
        var form_url = $(this).data('route');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Ensure the #results div is visible before making the AJAX request
        $('#results').show();
        $('.cont2').show();

        $.ajax({
            url: form_url,
            type: 'GET',
            async: true,
            beforeSend: function() {
                $('#loadingrequestdiv123').show();
            },
            complete: function(request, json) {
                $('#results').html(request.responseText);
                $('#loadingrequestdiv123').hide();
            }
        });
    });
    // Close button click event
    $('#results').on('click', '#close', function() {
        // Toggle visibility of the results div
        $('#results').toggle();
        $('.cont2').hide();
    });
});