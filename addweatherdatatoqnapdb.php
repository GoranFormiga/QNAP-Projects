<?php
    // Connect to MySQL
    include("qnapdbconnect.php");

    // Prepare the SQL statement
    $sql = "INSERT INTO arduino.Weather (Microcontroller ,Temt6000Light, Bmp280Temperature, Bmp280Pressure, Dht22Temperature, Dht22Humidity, Mq135AirQuality)
    VALUES ('".$_GET["Microcontroller"]."', '".$_GET["Temt6000Light"]."', '".$_GET["Bmp280Temperature"]."', '".$_GET["Bmp280Pressure"]."', '".$_GET["Dht22Temperature"]."', '".$_GET["Dht22Humidity"]."', '".$_GET["Mq135AirQuality"]."')";     

	if ($conn->query($sql) === TRUE) {
	  echo "New SQL record created";
	} else {
  	echo "Error: " . $sql . "<br>" . $conn->error;
	}

    // Go to the review_data.php (optional)
    header("Location: https://192.168.0.4:8081/phpMyAdmin/reviewweatherdataqnapdb.php");

	$conn->close();
?>