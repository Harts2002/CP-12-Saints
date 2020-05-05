<?php
session_start();
$host = "localhost:3306";
    $dbUsername = "hao_Harts";
    $dbPassword = "20020511h";
    $dbname = "hao_Vanstrings";
 $conn = new mysqli("127.0.0.1",$dbUsername, $dbPassword, $dbname,"3306");
 $error = "";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <meta name = "description" content = "Vanstring managers page">
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
    <title>Vanstrings Management Page</title>
<link rel = "stylesheet" type = "text/css" href = "managers.css">
</head>
<body>
    <header> <img src="VSCM.png" align="right">
        <h1>My Account</h1>
    </header>
    <section>
        <nav>
            <ul>
                <li><a href="requirements.php">Requirement data</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="update_profile.php">Update Profile</a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href = "attendance1.php">Attendance</a></li>
                <li><a href = "make_performance.php">Make Performance</a></li>
                <li><a href = "concert_list.php">Concert List </a></li>

                <li><a href = "changerequest.php">replacement request</a></li>
                <li><a href="logout.php">Log out</a></li>

            </ul>
            <img src="calendar.png" align="right" style="float: left;width: 70%; height: 50%;">
        </nav>
        <article>
            <?php
            if (isset($_SESSION['u_email'])){
                echo "welcome ";
                echo $_SESSION['u_first'];
            }
        ?>
        <br>
        <br>
        <h2>Make an announcement below</h2>
        <form method = "POST" action = "message.php">
            <input type = "text" placeholder = "message" name = "message">
            <br>
                <button type="submit" name = "submit" value = "submit" id = "reg_btn">Submit</button>
            </form>
        </article>
    </section>
    <footer>
        <dl style="list-style-type: none">
            <dt>Hao Shi</dt>
            <dd>778-2333986</dd>
            <dt>Martin Huang</dt>
            <dd>778-000-000</dd>
            <dt>Ethan Lee</dt>
            <dd>778-000-000</dd>
        </dl>
    </footer>
</body>
</html>
