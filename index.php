

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    $hotelsWithParking = [

    ];

?>

<form action="./index.php" method="GET">
    <label for="isThereParking">
        Check if parking in the hotel is present: type 'true or false'
    </label>
    <input type="text" name="isThereParking" id="isThereParking">
    <input type="submit" value="check">
</form>   


<ul>
    <?php foreach ($hotels as $singleHotel){?>
        
      <li>
        <?php echo $singleHotel['name'] . ' ' ; ?>
        <?php echo $singleHotel['description'] . ' ' ; ?>
        <?php echo $singleHotel['parking'] . ' ' ; ?>
        <?php echo $singleHotel['vote'] . ' ' ; ?>
        <?php echo $singleHotel['distance_to_center'] . ' ' ; ?>
      </li>

    <?php } ?>
</ul>
    
</body>
</html>