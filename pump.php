<?php
if (isset($_POST['submit'])) {
    $testing = $_POST['testing'];
    $problem = $_POST['problem'];

    $con = mysqli_connect("localhost", "root", "", "dhuli1");
    $sql = "INSERT INTO sample2 (radio1, pro) VALUES ('$testing', '$problem')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>alert('Data added successfully');</script>";
        echo "<script>window.location.href = 'pumpform.html';</script>";
    } else {
        echo "Not successful";
    }
}
?>
