<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.main.css">
    <link rel="stylesheet" href="css/custom.css">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-4 custom-image-container">
                    <img src="cover_images/th-3372809862.jpg" alt="Logo" class="logo img-fluid">
                </div>
                <div class="col-md-8 text-end align-self-center">
                    <h4 class="font-monospace phone-number display-5">0643321223</h4>
                    <h4 class="font-monospace display-6">Joliet, IL 60432</h4>
                </div>
            </div>
            <img src="cover_images/cover_page.jpg" alt="Slika" class="img-fluid mt-3 custom-image">
        </div>

        <div class="container">
            <div class="row">
                <h4 class="display-4 mt-3 col-8">Available Trucks and Trailers</h4>
            </div>
            <div class="row">
                <div class=" mt-3 col-4">
                    <select id="sort_by" class="form-select" onchange="sortTrucks()">
                        <option>Sort</option>
                        <option value="mileage_asc">Mileage (Asc)</option>
                        <option value="mileage_desc">Mileage (Desc)</option>
                        <option value="price_asc">Price (Asc)</option>
                        <option value="price_desc">Price (Desc)</option>
                        <option value="trans_asc">Transmission (Asc)</option>
                        <option value="trans_desc">Transmission (Desc)</option>
                    </select>
                </div>
                <!-- <div class="col-2 mt-3">
                    <button onclick="sortTrucks()" class="btn btn-primary">Sort</button>
                </div> -->
            </div>
        </div>
        <div class="container" id="container">
            <?php include ("filter.php"); ?>
        </div>

    </main>
</body>

</html>