<!DOCTYPE html>
<html>
<head>
    <?php
    include 'database.php';
    ?>
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;  /* The height is 400 pixels */
            width: 100%;  /* The width is the width of the web page */
        }
    </style>


</head>
<body>
<h3>My Google Maps - powered analytic Demo</h3>

<div id="form">
    <h4>Simulate donations: </h4>

    <!--dropdown menu for location-->
    <select>
        <option value="0">Vermont</option>
        <option value="1">Maine</option>
        <option value="2">Massachusetts</option>
        <option value="3">New Hampshire</option>
        <option value="4">Connecticut</option>
        <option value="5">Rhode Island</option>
    </select>

    <input type="number" name="amount" />

    <button type="button" id="createButton">Generate</button>


</div>
<!--The div element for the map -->
<div id="map"></div>
<script>
    // Initialize and add the map
    function initMap() {
        // The location of New England
        var newEng = {lat: 43.9654, lng: -71};
        // The map, centered at New England
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 6, center: newEng});
        // The marker, positioned at New England
        var marker = new google.maps.Marker({position: newEng, map: map});
    }
</script>
<!--Load the API from the specified URL
* The async attribute allows the browser to render the page while the API loads
* The key parameter will contain your own API key (which is not needed for this tutorial)
* The callback parameter executes the initMap() function
-->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUmzQ1cjY6rIYx_Nd2B7ZC8zWFOnN54Rw&callback=initMap">
</script>
</body>
</html>