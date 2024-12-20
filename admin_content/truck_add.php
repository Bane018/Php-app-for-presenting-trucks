<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.main.css">
    <title>Document</title>
</head>

<body>
   
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="center-form"> 
                    <h1>Add truck</h1>
                    <a href="truck_list.php" class="btn btn-primary mb-3">Truck List</a>
                    <br>
                    <a href="../logout.php" class="btn btn-primary mb-3">Log out</a>
                    <form action="truck_add_action.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="image_url" class="form-label">Image URL</label>
                            <input type="file" class="form-control" name="image_url">
                        </div>
                        <div class="mb-3">
                            <label for="truck_name" class="form-label">Truck Name</label>
                            <input type="text" class="form-control" name="truck_name">
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="text" class="form-control" name="stock">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="mileage" class="form-label">Mileage</label>
                            <input type="text" class="form-control" name="mileage">
                        </div>
                        <div class="mb-3">
                            <label for="engine" class="form-label">Engine</label>
                            <input type="text" class="form-control" name="engine">
                        </div>
                        <div class="mb-3">
                            <label for="trans" class="form-label">Transmission</label>
                            <input type="text" class="form-control" name="trans">
                        </div>
                        <div class="mb-3">
                            <label for="note" class="form-label">Additional note</label>
                            <input type="text" class="form-control" name="note">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>