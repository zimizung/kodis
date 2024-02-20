// Wrap your code inside a document ready function
$(document).ready(function() {
    console.log("Document is ready."); // Debugging
    
    // Attach click event listener to pagination links
    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault(); // Prevent default behavior (following the link)

        console.log("Pagination link clicked."); // Debugging
        
        var url = $(this).attr('href'); // Get the URL of the pagination link
        console.log("Next page URL:", url); // Debugging
        
        getPage(url); // Call function to fetch the next page data via AJAX
    });

    // Function to fetch next page data via AJAX
    function getPage(url) {
        console.log("Fetching page via AJAX:", url); // Debugging
        
        $.ajax({
            url: url,
            type: 'GET',
            success: function(data) {
                console.log("AJAX request successful."); // Debugging
                
                // Update the content of the view with the new data
                $('#content').html(data);
            },
            error: function(xhr, status, error) {
                console.error("AJAX request error:", error); // Debugging
                
                // Handle errors if any
                console.error(error);
            }
        });
    }
});
