<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Maximum</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

    <h2>Find Maximum Number</h2>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="firstN">First Number:</label><br>
        <input type="number" name="firstN" id="firstN" required><br><br>
        <label for="SName">Second Number:</label><br>
        <input type="number" name="SName" id="SName" required><br><br>
        <label for="TName">Third Number:</label><br>
        <input type="number" name="TName" id="TName" required><br><br>
        <input type="submit" value="Submit" name="btn">
    </form>

    <?php
    if (isset($_POST["btn"])) {
        $a = $_POST["firstN"];
        $b = $_POST["SName"];
        $c = $_POST["TName"];

        // Find the maximum number
        if ($a > $b && $a > $c) {
            $max = $a;
        } elseif ($b > $a && $b > $c) {
            $max = $b;
        } else {
            $max = $c;
        }

        // Display the result in a table
        echo "<h3>Results:</h3>";
        echo "<table>";
        echo "<tr><th>First Number</th><th>Second Number</th><th>Third Number</th><th>Maximum Number</th></tr>";
        echo "<tr><td>$a</td><td>$b</td><td>$c</td><td>$max</td></tr>";
        echo "</table>";
    }
    ?>

</body>
</html>
