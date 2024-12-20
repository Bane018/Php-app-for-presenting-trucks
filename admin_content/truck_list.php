<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.main.css">
    <title>Document</title>
</head>

<body>
    <style>
        .card-img-top-custom {
            height: 200px;
            object-fit: cover;
        }
    </style>
    <div class="container-xl">
        <h1>Truck list</h1>
        <a href="truck_add.php" class="btn btn-primary mb-3">add truck</a>
        <br>
        <a href="../logout.php" class="btn btn-primary mb-3">Log out</a>
        <?php
        require_once ("../connect.php");
        $sql = "SELECT * FROM truck_info";
        $exc = $con->query($sql);

        echo '<div class="row row-cols-1 row-cols-md-3 g-3 mt-3">';

        while ($row = $exc->fetch()) {
            echo "
            <div class='col-md-4'>
                <div class='card'>
                    <img class='card-img-top-custom' src='../images/" . $row["image_url"] . "' alt=''>
                    <div class='card-body'>
                        <h5 class='card-title'><p class='card-text'>Name : " . $row["truck_name"] . "</p></h5>
                        <h5 class='card-text'>truck id: " . $row["truck_id"] . "</h5>
                        <h5 class='card-text'>Stock: " . $row["stock"] . "</h5>
                        <h5 class='card-text'>Price: " . $row["price"] . " USD</h5>
                        <h5 class='card-text'>Mileage: " . $row["mileage"] . "</h5>
                        <h5 class='card-text'>Engine: " . $row["engine"] . "</h5>
                        <h5 class='card-text'>Transmission: " . $row["trans"] . "</h5>
                        <a href='truck_delete.php?id=" . $row["truck_id"] . "' class='btn btn-danger'>Delete truck</a>
                    </div>
                </div>
            </div>
        ";
        }

        echo '</div>';
        ?>

    </div>

</body>

</html>