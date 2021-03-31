<?php 
    // Start MySQL Connection
    include('qnapdbconnect.php'); 
?>

<html>
<head>
    <title>Arduino Temperature Log</title>
    <style type="text/css">
        .table_titles, .table_cells_odd, .table_cells_even {
                padding-right: 20px;
                padding-left: 20px;
                color: #000;
        }
        .table_titles {
            color: #FFF;
            background-color: #666;
        }
        .table_cells_odd {
            background-color: #CCC;
        }
        .table_cells_even {
            background-color: #FAFAFA;
        }
        table {
            border: 2px solid #333;
        }
        body { font-family: "Trebuchet MS", Arial; }
    </style>
</head>

    <body>
        <h1>Arduino Temperature Log</h1>
    <table border="0" cellspacing="0" cellpadding="4">
        <tr>
            <td class="table_titles">ID</td>
            <td class="table_titles">Date and Time</td>
            <td class="table_titles">Microcontroller</td>
            <td class="table_titles">TEMT6000 Light</td>
            <td class="table_titles">BMP280 Temperature</td>
            <td class="table_titles">BMP280 Air Pressure</td>
            <td class="table_titles">DHT22 Temperature</td>
            <td class="table_titles">DDHT22 Humidity</td>
            <td class="table_titles">MQ135 Air Quality</td>
        </tr>
<?php
    // Retrieve all records and display them

    $sql = "SELECT * FROM arduino.Weather";
    $result = $conn->query($sql);

    $oddrow = true;

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {

        if ($oddrow) 
        { 
            $css_class=' class="table_cells_odd"'; 
        }
        else
        { 
            $css_class=' class="table_cells_even"'; 
        }

        $oddrow = !$oddrow;
        echo '<tr>';
        echo '   <td'.$css_class.'>'.$row["Id"].'</td>';
        echo '   <td'.$css_class.'>'.$row["Time"].'</td>';
        echo '   <td'.$css_class.'>'.$row["Microcontroller"].'</td>';
        echo '   <td'.$css_class.'>'.$row["Temt6000Light"].'</td>';
        echo '   <td'.$css_class.'>'.$row["Bmp280Temperature"].'</td>';
        echo '   <td'.$css_class.'>'.$row["Bmp280Pressure"].'</td>';
        echo '   <td'.$css_class.'>'.$row["Dht22Temperature"].'</td>';
        echo '   <td'.$css_class.'>'.$row["Dht22Humidity"].'</td>';
        echo '   <td'.$css_class.'>'.$row["Mq135AirQuality"].'</td>';
        echo '</tr>';

      }
    } else {
      echo "0 results";
    }
    $conn->close();
?>
    </table>
    </body>
</html>