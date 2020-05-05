<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <meta name = "description" content = "Vanstring requirements info page">
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
    <title>
        requirements for Vanstrings
    </title>
    <style>
    body{background-color: rgb(167, 168, 162)
        font-size:20px;
        padding: 2px;

    }
    body header {
        background-color: #800000;
        font-family: Apple Chancery;
        padding: 20px;
        text-align: center;
        font-size: 35px;
        color: #CCCC00;
    }
    section:after {
        content: "";
        display: table;
        clear: both;
    }
    footer {
        background-color: #800000;
        padding: 10px;
        text-align: left;
        color: white;
    }
    @media (max-width: 600px) {

        header {
            width: 100%;
            height: auto;
        }
    }
    </style>
</head>
<body>
    <header> <img src="VSCM.png" align="right">
        <h1>Requirements</h1>
    </header>
    <ol>
        <li>No more than three unexcused absences allowed</li>
        <li>Attendance to at least ten senior home performances a year</li>
        <li>Do not be consistently late to rehearsal and performances</li>
        <li>Don't talk random stuff during rehearsals like Ethan does</li>
        <li>Check the website for announcements and events regularly</li>
        <li>Update your information whenever something changes</li>
        <li>Only grade 11s and grade 12s semester 1 are allowed to use homework, projects, etc. as an excuse for absence</p>
        <li>If Ethan is doing something weird, don't follow</li>
    </ol>
    <br>
    <br>
    <p>Follow the rules above and your will be able to keep your member status at good. If you start to miss rehearsals and misbehave like ethan, your status will change to a question mark. If you continue such behaviour, your status will say "interview" which means you need to have a chat with the managers. Thanks.</p>
    <dl><?php
        if ($_SESSION['u_first'] === "Hao"){
            echo '<a class = "active" href = "managers.php">My account</a>';
        }else{
        echo '<a class = "active" href = "accounts.php">My account</a>';
    }
    ?>
    </dl>
    <footer>
        <dl style="list-style-type: none">
            <dt><b>Hao Shi</b></dt>
            <dd>778-2333986</dd>
            <dt><b>Martin Huang</b></dt>
            <dd>778-000-000</dd>
            <dt><b>Ethan Lee</b></dt>
            <dd>778-000-000</dd>
        </dl>
    </footer>
</body>
</html>
