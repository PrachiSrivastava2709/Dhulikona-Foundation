<?php
if (!isset($_POST['submit'])){
    $passwd = $_POST['Passwd'];
    $aadhar = $_POST['Aadhar'];

    $con = mysqli_connect("localhost", "root", "", "dhulikondb");
    $sql = "SELECT category FROM users WHERE passwd = '$passwd' AND aadhar = '$aadhar'";
    $result = mysqli_query($con, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach ($rows as $row){
        $category = $row["category"];
    }
    if ($category == "user"){
        // send user dashboard
    }elseif ($category == "pump-op"){
        // send pump operator dashboard
    }else{
        // send grapm panchayat dashboard
    }

}
    
?>