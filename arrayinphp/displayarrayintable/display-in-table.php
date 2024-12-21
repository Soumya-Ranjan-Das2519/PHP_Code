<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 3 Table</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center">3x3 Bootstrap Table</h2>
        <?php
        $users = [
            [1, "John", "bbsr"],
            [2, "Ram", "ctc"],
            [3, "Akhil", "Pune"]
        ];

        echo "<table class='table table-bordered'>";
        echo "<thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>City</th>
                </tr>
              </thead>";
        echo "<tbody>";
        for ($i = 0; $i < count($users); $i++) {
            echo "<tr>";
            for ($j = 0; $j < count($users[$i]); $j++) {
                echo "<td>" . $users[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
