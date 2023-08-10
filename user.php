<?php
if (isset($_POST['submit'])) {
    $clean = $_POST['clean'];
    $free = $_POST['free'];
    $address = $_POST['address'];

    $con = mysqli_connect("localhost", "root", "", "dhuli1");
    $sql = "INSERT INTO sample(radio1, radio2, addre) VALUES ('$clean', '$free', '$address')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>alert('Data added successfully');</script>";
        echo "<script>window.location.href = 'userform.html';</script>";
    } else {
        echo "Not successful";
    }
}
?>
