<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pumpform</title>
    <link rel="stylesheet" href="pumpstyle.css">
</head>
<body>
    <div class="nav">
        <img class="logo" src="logo.png" alt="logo">
        <ul>
            <li><img class="usertag" src="user.png" alt="user tag"></li>
            <div id="div2">
                <?php
                    echo $_GET['fullname'];
                    echo $_GET['contact'];
                ?>
              </div>
            <li><button class="sign"><a href="landing.html">Sign out</a></button></li>
          </ul>
        </div> 
    
    <div class="form">
            <h3><center>Pump Operator Form</center></h3>
        <form class="innerForm" action="pump.php" method="post">
            <input type="hidden" name="name" value=<?php echo $_GET['fullname'];?>>
            <input type="hidden" name="contact" value=<?php echo $_GET['contact'];?>>
            <p>1. You have operated on the operator?</p>
            &ensp;&ensp;<input type="radio" name="testing" value="yes">
            <label>yes</label>
            <input type="radio" name="testing" value="no">
            <label>no</label>
            <br><br>
            <p>2. Any futher problem exits please let us know :</p>
            <textarea cols="60" rows="5" name="problem"></textarea>
            <br>

           <center><button class="submit"name="submit" value="submit" class="submit">submit</button> </center> 
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            // Toggle div2 visibility
            $("button.usertag").click(function(){
                $("#div2").toggle();
            });
        });
    </script>
</html>