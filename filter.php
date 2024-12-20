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
            <?php
            require_once ("connect.php");

            $orderByMap = array(
                "truck_name_asc" => "truck_name ASC",
                "truck_name_desc" => "truck_name DESC",
                "mileage_asc" => "mileage ASC",
                "mileage_desc" => "mileage DESC",
                "price_asc" => "price ASC",
                "price_desc" => "price DESC",
                "trans_asc" => "trans ASC",
                "trans_desc" => "trans DESC"
            );

            $orderBy = "truck_id ASC";

            if (isset($_GET['sort']) && array_key_exists($_GET['sort'], $orderByMap)) {
                $orderBy = $orderByMap[$_GET['sort']];
            }

            $sql = "SELECT * FROM truck_info ORDER BY $orderBy";
            $exc = $con->query($sql);

            include ("card.php");
            ?>
        </div>
    </main>
    <script>
        // function sortTrucks() {
        //     var selectBox = document.getElementById("sort_by");
        //     var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        //     window.location.href = "?sort=" + selectedValue;
        // }


        // function sortTrucks() {
        //     var sortBy = document.getElementById("sort_by").value;
        //     window.location.href = "index.php?sort=" + sortBy;
        // }

        // function sortTrucks() {
        //     var sortBy = document.getElementById("sort_by").value;
        //     var xhr = new XMLHttpRequest();
        //     xhr.onreadystatechange = function () {
        //         if (xhr.readyState == 4 && xhr.status == 200) {
        //             document.getElementById("container").innerHTML = xhr.responseText;
        //         }
        //     };
        //     xhr.open("GET", "index.php?sort=" + sortBy, true);
        //     xhr.send();
        // }

        // function sortTrucks() {
        //     var sortBy = document.getElementById("sort_by").value;
        //     var xhr = new XMLHttpRequest();
        //     xhr.onreadystatechange = function () {
        //         if (xhr.readyState == 4 && xhr.status == 200) {
        //             var response = xhr.responseText;
        //             var container = document.getElementById("container");
        //             // Ukloniti stare elemente iz kontejnera
        //             while (container.firstChild) {
        //                 container.removeChild(container.firstChild);
        //             }
        //             // Kreirati novi div element i dodati novi sadržaj u njega
        //             var newContent = document.createElement("div");
        //             newContent.innerHTML = response;
        //             // Dodati novi sadržaj u kontejner
        //             container.appendChild(newContent);
        //         }
        //     };
        //     xhr.open("GET", "index.php?sort=" + sortBy, true);
        //     xhr.send();
        // }

        function sortTrucks() {
            var sortBy = document.getElementById("sort_by").value;
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var response = xhr.responseText;
                    var containers = document.getElementsByTagName("main");
                    // Uzimamo prvi main element ako postoji
                    var container = containers[0];
                    if (!container) {
                        // Ako ne postoji main, pravimo novi
                        container = document.createElement("main");
                        document.body.appendChild(container);
                    } else {
                        // Ukloniti stare elemente iz kontejnera
                        while (container.firstChild) {
                            container.removeChild(container.firstChild);
                        }
                    }
                    // Kreirati novi div element i dodati novi sadržaj u njega
                    var newContent = document.createElement("div");
                    newContent.innerHTML = response;
                    // Dodati novi sadržaj u kontejner
                    container.appendChild(newContent);
                }
            };
            xhr.open("GET", "index.php?sort=" + sortBy, true);
            xhr.send();
        }
    </script>
</body>

</html>