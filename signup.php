
<!DOCTYPE html>
<html>

<head>
    <meta charset = "utf-8">
    <meta name = "description" content = "Vanstring signup page">
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
    <title>signup for Vanstrings</title>
<link rel = "stylesheet" type = "text/css" href = "signup.css">
</head>
<body>
    <div class = "loginbox">
    <img src = "VSCM.png" class = "avatar">
    <h1> Create your Account</h1>
    <p class = "error"><?php echo $error; ?></p>
    <form method = "POST" action="submitted.php">
        <input name="username" type="text"required placeholder = "Username">
        <input name="password" type="text"required placeholder = "Password">
        <input name="confirm" type="text" required placeholder = "Confirm Password">
        <input name="email" type="text" required placeholder = "email">
        <input name="age" type="text" required placeholder = "age">
        <input name="name1" type = "text" required placeholder = "first name">
        <input name="name2" type="text" required placeholder = "last name">
        section:<select name="section">
  <option value="first">first</option>
  <option value="second">second</option>
  <option value="third">third</option>
  <option value="cello">cello</option>
</select>
<br>
        <input name="school" type="text" required placeholder = "school">
        <input name="home" type="text" required placeholder = "home">
        grade:<select name="grade">
    <option value=6>grade 6</option>
    <option value=7>grade 7</option>
    <option value=8>grade 8</option>
    <option value=9>grade 9</option>
    <option value=10>grade 10</option>
    <option value=11>grade 11</option>
    <option value=12>grade 12</option>
    </select>
    <br>
        <input name = "vpass" type = "text" required placeholder = "Vanstring Password">
        <input type="submit" id="Submit">
    </form>
</div>

</body>
</html>
