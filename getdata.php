<?php
include 'db_connect.php';

if (isset($_GET["blood_group"])) {
    $selected_blood_group = $_GET["blood_group"];

    $query = "SELECT * FROM donors WHERE blood_group = '$selected_blood_group'";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "SQL Query: $query <br>";

        echo "<div style='background-color: rgba(255, 255, 255, 0.8); padding: 20px;'>";
        echo "<h2>Donors with Blood Group $selected_blood_group</h2>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>Name: " . $row['name'] . "<br> Age: " . $row['age'] . "<br> Email: " . $row['email'] . "</p>";
        }

        echo "</div>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
$con->close();
?>