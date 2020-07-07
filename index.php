<?php include "db_connection.php" ?>

<?php 
$sql = "SELECT * FROM tasks";
$result = mysqli_query($conn, $sql);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD App</title>
</head>
<body>
    <form action="">
        <input type="text" name="add-task">
        <input type="submit" name="submit" value="Add">
    </form>
    <?php 
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<table>
                <tr>
                    <th>Task ID</th>
                    <th>Task</th>
                </tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo 
              "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["task"]."</td>
               </tr>";
        }
        echo "</table>";
        } else {
        echo "0 results";
        }
    ?>
</body>
</html>