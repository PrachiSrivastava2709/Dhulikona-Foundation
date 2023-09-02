<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userform</title>
    <link rel="stylesheet" href="userstyle.css"> 
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
    <div class="form">
        <center><h3>User Feedback</h3></center>
        
        <form action="user.php" method="post" class="innerForm">
            <input type="hidden" name="name" value=<?php echo $_GET['fullname'];?>>
            <input type="hidden" name="contact" value=<?php echo $_GET['contact'];?>>
            <p>1. Water is clean?</p>
            &ensp;&ensp;<input type="radio" name="clean" value="yes">
            <label>yes</label>
            <input type="radio" name="clean" value="no">
            <label>no</label><br><br>
            <p>2. Water is chlorine free? <button class="tooltip">?
                <span class="tooltiptext">Test strips are similar to the ones used for drug or urine testing. One part of the strip is infused with DPD or diethyl-phenylene diamine. You need to dip this end in the water for a few seconds. If it's chlorinated water, the strip will change its color.
                    <a href="https://dropconnect.com/how-to-test-for-chlorine-in-water/#:~:text=Test%20strips%20are%20similar%20to,strip%20will%20change%20its%20color.">know more</a>
                </span></button></p> 
                &ensp;&ensp;<input type="radio" name="free" value="yes">
            <label>yes</label>
            <input type="radio" name="free" value="no">
            <label>no</label><br><br>
            <p>Address:</p>
            <textarea cols="60" rows="4" name="address"></textarea>
            <br>
            <center><button class="submit" name="submit" value="submit" class="submit">submit</button></center>
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