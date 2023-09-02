<?php
if (isset($_POST['submit'])) {
    $testing = $_POST['testing'];
    $problem = $_POST['problem'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];

    $con = mysqli_connect("localhost", "root", "", "dhulikondb");
    $sql = "INSERT INTO sample2 (radio1, pro) VALUES ('$testing', '$problem')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>alert('Data added successfully');</script>";
        header("Location:pumpform.php?fullname=$name&contact=$contact");
    } else {
        echo "Not successful";
    }
}
?>
