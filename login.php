<?php
if (!isset($_POST['submit'])){
    $passwd = $_POST['Passwd'];
    $aadhar = $_POST['Aadhar'];

    $con = mysqli_connect("localhost", "root", "", "dhulikondb");
    $sql = "SELECT category, fullname, contact FROM users WHERE passwd = '$passwd' AND aadhar = '$aadhar'";
    $result = mysqli_query($con, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach ($rows as $row){
        $category = $row["category"];
        $name = $row["fullname"];
        $contact = $row["contact"];
    }
    if ($category == "user"){
        // send user dashboard
        header("Location:userform.php?fullname=$name&contact=$contact");
    }elseif ($category == "pump-op"){
        // send pump operator dashboard
        header("Location:pumpform.php?fullname=$name&contact=$contact");
    }else{
        // send gram panchayat dashboard
        header("Location:gramNotify.php?fullname=$name&contact=$contact");
    }
}   
?>