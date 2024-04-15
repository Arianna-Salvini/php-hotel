<?php
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];

echo '<pre>';

// var_dump($hotels);

echo '</pre>';
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>


</head>

<body>
    <div class="container">
        <?php
        foreach ($hotels as $key => $hotel) {
            echo "<h2>$hotel[name]</h2>";
            echo "<p>$hotel[description]</p>";
            echo "<div>
            <strong>Parking:</strong> $hotel[parking]</div>";
            echo "<div><strong>Rate:</strong> $hotel[vote]</div>";
            echo "<div> <strong>Distance to center :</strong $hotel[distance_to_center]</div>";
        }
        ?>
    </div>
    <strong></strong>
</body>

</html>