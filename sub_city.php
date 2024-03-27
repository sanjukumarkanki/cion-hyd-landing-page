
<?php include("./components/array.php") ?>

<?php
// Assuming $citiAndData array is defined and contains the city data

// Check if cityId parameter is provided in the request
if (isset($_GET['cityId'])) {
    $cityId = $_GET['cityId'];

    // Find the city data corresponding to the provided cityId
    $subCityContent = '';
    foreach ($citiAndData as $cityData) {
        if ($cityData['id'] === $cityId) {
            $cityBackgroundScript = '<script>document.getElementById("' . $cityId . '").style.backgroundColor = "red !important";</script>';
            // Assuming 'centers' key contains the sub-city data
            foreach ($cityData['centers'] as $center) {
                // Generate HTML content for each sub-city
                $subCityContent .= '<div>';
                $subCityContent .= '<h3>' . $center['center_name'] . '</h3>';
                $subCityContent .= '<p>' . $center['center_address'] . '</p> 
                <button class="callus__btn">Call us</button>
                <button class="directions__btn"  onclick=" updateSubCities(\'' . $center['map_url'] . '\') ">Directions</button>';
                $subCityContent .= '</div>';
            }
            break;
        } else {
        }
    }

    // Return the sub-city content as HTML response
    echo $subCityContent;
} else {
    // If cityId parameter is not provided, return an error response
    http_response_code(400);
    echo 'Error: City ID parameter is missing.';
}
