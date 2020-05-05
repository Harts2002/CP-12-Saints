<?php
session_start();
if (isset($_SESSION['u_first']) === "Hao"){
    header("Location: managers.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <meta name = "description" content = "Vanstring members account page">
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
    <title>members accounts</title>
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
