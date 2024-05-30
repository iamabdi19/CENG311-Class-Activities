$(document).ready(function() {
    $("#nav_list a").on("click", function(event) {
        event.preventDefault(); 
        var ourTitle = $(this).attr("title"); // Get the title attribute value
        var jsonFileName = "json_files/" + ourTitle + ".json"; // Build the JSON file name

        // Fetch the JSON data
        fetchJsonData(jsonFileName);
    });
});

function fetchJsonData(ourURL) {
    // Perform an AJAX request to fetch the JSON data
    $.ajax({ 
        url: ourURL, 
        dataType: "text", // Set the data type as text
        success: function (data) {
            // Parse the fetched JSON data
            var ourData = $.parseJSON(data);

            // Clear the main element before inserting new data
            $("main").empty();

            // Access the first speaker's data
            var speakerData = ourData.speakers[0];

            // Create HTML elements for the new data
            var htmlContent = `
                <h1>${speakerData.title}</h1>
                <img src="${speakerData.image}" alt="${speakerData.speaker}">
                <h2>${speakerData.month}<br>${speakerData.speaker}</h2>
                <p>${speakerData.text}</p>
            `;

            // Append the new HTML content to the main element
            $("main").html(htmlContent);
        },
        error: function() {
            console.error("Error fetching the JSON data.");
        }
    });
}
