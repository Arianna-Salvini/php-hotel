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

// To avoid a warrning for undefined array --> use "??" coalescing operator in order to have a value true/false for the variable 
$show_parking_available = $_GET['parking'] ?? false;

echo '<pre>';

// var_dump($hotels);
var_dump($show_parking_available);

echo '</pre>';
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-primary bg-opacity-10">
    <div class="container">
        <!-- Form to check if an hotel parking is available -->
        <form action="" method="get">
            <label for="parking">Show only hotel with parking available</label>
            <input type="checkbox" name="parking" id="parking">
            <button type="submit">Check</button>
        </form>

        <!-- Table -->
        <table class="table table-striped table-primary border border-2 border-primary-subtle">
            <thead class="text-center">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Parking available</th>
                    <th>Rating</th>
                    <th>Distance to center</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                foreach ($hotels as $hotel) {

                    // Check parkng
                    //Not WHY is working
                    // use continue statement to jump the iteration if both condition are not true (doesn't print the hotel in table)
                    if ($show_parking_available && !$hotel['parking']) {
                        continue;
                    }

                    echo " <tr>";
                    echo "<td>$hotel[name]</td>";
                    echo "<td>$hotel[description]</td>";
                    echo "<td>" . ($hotel['parking'] ? 'Yes' : 'No') . "</td>";
                    echo  "<td>$hotel[vote]</td>";
                    echo  "<td>$hotel[distance_to_center] Km</td>";
                    echo "</tr>";

                    // echo "<h2>$hotel[name]</h2>";
                    // echo "<p>$hotel[description]</p>";
                    // echo "<div>($hotel[parking] ? 'Yes' : 'No')</div>";
                    // echo "<div>$hotel[vote]</div>";
                    // echo "<div>$hotel[distance_to_center] Km</div>";
                }
                ?>
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>