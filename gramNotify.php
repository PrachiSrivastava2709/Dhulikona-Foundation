<?php
$name = $_GET['fullname'];
$contact = $_GET['contact'];
$con = mysqli_connect("localhost", "root", "", "dhulikondb");
$sql = "SELECT * FROM sample";
$sql2 = "SELECT * FROM sample2";
$userUpdate = mysqli_query($con, $sql);
$pumpUpdate = mysqli_query($con, $sql2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gram Panchayat Notification</title>
    <link rel="stylesheet" href="gramStyle.css">
</head>
<body>
    <div class="nav">
        <img class="logo" src="logo.png" alt="logo">
        <ul>
            <li><button class="usertag">U</button></li>
            <div id="div2">
                <?php
                    echo $_GET['fullname'];
                    echo $_GET['contact'];
                ?>
              </div>
            <li><button class="sign"><a href="landing.html">Sign out</a></button></li>
          </ul>
        </div>

    <div class="block">
        <div>
            <h3>User Feedback</h3>
        <?php 
        while ($row = mysqli_fetch_array($userUpdate, MYSQLI_ASSOC)) {
            printf("clean: %s  free: %s address: %s", $row["radio1"], $row["radio2"], $row["addre"]);
            echo "<br>";
        }
        ?>
        </div>
    </div>

    <div class="block">
         <div>
            <h3>Operation Updates</h3>
        <?php 
        while ($row = mysqli_fetch_array($pumpUpdate, MYSQLI_ASSOC)) {
            printf("fixed: %s  problem: %s", $row["radio1"], $row["pro"]);
            echo "<br>";
        }
        ?>
         </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            // Toggle div2 visibility
            $("button.usertag").click(function(){
                $("#div2").toggle();
            });
        });
    </script>
</body>
</html>