<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body{background-color: rgb(224, 224, 224);}
        li{
            padding 5px;
            font-size: 20px;
        }
        </style>
        </head>
        <body>
            <h1> New Account created Successfully! Welcome to Vanstring! </h1>
            <ul>
                <li><a href="announcements.php">Announcements</a></li>
                <li><a href="memebers.php"></a>Members</li>
                <li><?php if ($_SESSION['u_first'] === "Hao"){
                    echo '<a href = "managers.php">My account</a>';
                }else if (isset($_SESSION['u_first'])){
                    echo '<a href = "accounts.php">My account</a>';
                }else{
                    echo'<a href = "loginpage.php">Login</a>';
                }
                ?></a></li>
                <li><a href="Information.php">Information</a></li>
                <li><a href="index.php">Home</a></li>
                </ul>
                </ul>
            </body>
</html>
