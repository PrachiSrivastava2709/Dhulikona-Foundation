<?php
$name = $_GET['fullname'];
$contact = $_GET['contact'];

$con = mysqli_connect("localhost", "root", "", "dhulikondb");
$sql = "SELECT * FROM sample";
$userUpdate = mysqli_query($con, $sql);
// while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
//     printf("clean: %s  free: %s address: %s", $row["radio1"], $row["radio2"], $row["addre"]);
// }
header("Location:gramNotify.php?fullname=$name&contact=$contact");

?>