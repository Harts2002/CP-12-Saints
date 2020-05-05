<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>signup for Vanstrings</title>
<link rel = "stylesheet" type = "text/css" href = "update.css">
</head>
<body>
    <div class = "loginbox">
    <img src = "VSCM.png" class = "avatar">
    <h1>Update Your Account</h1>
    <form method = "POST" action="updated.php">
        <input name="username" type="text" placeholder = "Username">
        <input name="password" type="text" placeholder = "Password">
        <input name="email" type="text" placeholder = "email">
        <input name="age" type="text" placeholder = "age">
        <input name="name1" type = "text" placeholder = "first name">
        <input name="name2" type="text" placeholder = "last name">
<br>
        <input name="school" type="text" placeholder = "school">
        <input name="home" type="text" placeholder = "home">
        grade:<select name="grade">
            <option value ="no change">no change</option>
    <option value=6>grade 6</option>
    <option value=7>grade 7</option>
    <option value=8>grade 8</option>
    <option value=9>grade 9</option>
    <option value=10>grade 10</option>
    <option value=11>grade 11</option>
    <option value=12>grade 12</option>
    </select>
        <input type="submit" id="Submit">
    </form>
</div>

</body>
</html>
