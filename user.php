<?php
if (isset($_POST['submit'])) {
    $clean = $_POST['clean'];
    $free = $_POST['free'];
    $address = $_POST['address'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];

    $con = mysqli_connect("localhost", "root", "", "dhulikondb");
    $sql = "INSERT INTO sample(radio1, radio2, addre) VALUES ('$clean', '$free', '$address')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>alert('Data added successfully');</script>";
        header("Location:userform.php?fullname=$name&contact=$contact");
    } else {
        echo "Not successful";
    }
}
?>
