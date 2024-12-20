<style>
    .card-img-top-custom {
        height: 250px;
        object-fit: cover;
    }
</style>

<?php
echo '<div class="row row-cols-1 row-cols-md-3 g-3 mt-3 mb-3">';

while ($row = $exc->fetch()) {
    echo "
            <div class='col-md-4'>
                <div class='card'>
                    <img class='card-img-top-custom' src='images/" . $row["image_url"] . "' alt=''>
                    <div class='card-body'>
                        <h4 class='card-title'><p class='card-text'>Name : " . $row["truck_name"] . "</p></h4>
                        <hr>
                        <h5 class='card-text'>Stock: " . $row["stock"] . "</h5>
                        <hr>
                        <h5 class='card-text'>Price: " . $row["price"] . " USD</h5>
                        <hr>
                        <h5 class='card-text'>Mileage: " . $row["mileage"] . "</h5>
                        <hr>
                        <h5 class='card-text'>Engine: " . $row["engine"] . "</h5>
                        <hr>
                        <h5 class='card-text'>Transmission: " . $row["trans"] . "</h5>" ;
                        

    if (!empty($row["note"])) {
        echo "<hr> <h5 class='card-text'>Note: <br>" . $row["note"] . "</h5>";
    }

    echo "
                    </div>
                </div>
            </div>
        ";
}

echo '</div>';
?>