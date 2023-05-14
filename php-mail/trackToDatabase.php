<?php
// Get the IP address of the device
$ip = $_SERVER['REMOTE_ADDR'];

// Get the user-agent of the device
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Use a geolocation API to get the location of the device
$location_data = file_get_contents("https://api.ipstack.com/{$ip}?access_key=YOUR_API_KEY");
$location = json_decode($location_data);

// Get the country, city and latitude and longitude from the data
$country = $location->country_name;
$city = $location->city;
$latitude = $location->latitude;
$longitude = $location->longitude;

//print the data
echo "IP Address: " . $ip . "<br>";
echo "User Agent: " . $user_agent . "<br>";
echo "Country: " . $country . "<br>";
echo "City: " . $city . "<br>";
echo "Latitude: " . $latitude . "<br>";
echo "Longitude: " . $longitude . "<br>";

//store the data in a database

$servername = "hostname";
$username = "username";
$password = "password";
$dbname = "database name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO device_track (ip, user_agent, country, city, latitude, longitude)
VALUES ('$ip', '$user_agent', '$country', '$city', '$latitude', '$longitude')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
