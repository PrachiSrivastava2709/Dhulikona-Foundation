<?php
if (!isset($_POST['submit'])){
    $category = $_POST['category'];
    $name = $_POST['Name'];
    $contact = $_POST['Contact'];
    $passwd = $_POST['Passwd'];
    $aadhar = $_POST['Aadhar'];

    $con = mysqli_connect("localhost", "root", "", "dhulikondb");
    $sql = "INSERT INTO users (category, fullname, contact, passwd, aadhar) VALUES ('$category','$name','$contact','$passwd','$aadhar')";
    $result = mysqli_query($con, $sql);
    if ($result)
    {
        echo"Added successfully";
        header("Location:login.html");
    }
    else{
        echo"not succesful";
        header("Location:signup.html");
    }
}
?>