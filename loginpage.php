<?php
session_start();
$error = "";
if (isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
$host = "localhost:3306";
    $dbUsername = "hao_Harts";
    $dbPassword = "20020511h";
    $dbname = "hao_Vanstrings";
 $conn = new mysqli("127.0.0.1",$dbUsername, $dbPassword, $dbname,"3306");
 if (mysqli_connect_error()) {
  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
 } else {
     $_username = mysqli_real_escape_string($conn,$username);
     $_password = mysqli_real_escape_string($conn,$password);
     $sql_u = "SELECT * FROM users WHERE username = '$_username'";
     $sql_p = "SELECT * FROM users WHERE password = '$_password'";
     $res_u = mysqli_query($conn, $sql_u) or die(mysqli_error($conn));
     $res_p = mysqli_query($conn, $sql_p) or die(mysqli_error($conn));
     if (mysqli_num_rows($res_u) > 0 && mysqli_num_rows($res_p) > 0){
         $result = mysqli_query($conn,$sql_u);
         $row = mysqli_fetch_assoc($result);
         $sql = "SELECT * FROM profile WHERE username = '$_username'";
         $res1 = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $result2 = mysqli_query($conn, $sql);
         $row2 = mysqli_fetch_assoc($result2);
         //log in the user
         $_SESSION['u_id'] = $row['id'];
         $_SESSION['u_first'] = $row['first_name'];
         $_SESSION['u_last'] = $row['last_name'];
         $_SESSION['u_email'] = $row['email'];
         $_SESSION['u_section'] = $row['section'];
         $_SESSION['u_username'] = $row['username'];
         $_SESSION['u_age'] = $row['age'];
         $_SESSION['u_school'] = $row['school'];
         $_SESSION['u_grade'] = $row['grade'];
         $_SESSION['u_home'] = $row['home'];
         $_SESSION['u_signedup'] = $row['signedup'];
         $_SESSION['u_absence_senior'] = $row2['profile_absence_seniorhome'];
          $_SESSION['u_absence_rehearsal'] = $row2['profile_absence_rehearsal'];
          $_SESSION['u_absence_concert'] = $row2['profile_concert'];
          $_SESSION['u_hours'] = $row2['profile_hours'];
           $_SESSION['u_status'] = $row2['profile_status'];
           $_SESSION['u_VTC'] = $row2['profile_VTC'];
           if ($_SESSION['u_first'] === "Hao"){
          header( 'Location: managers.php' ) ;
          exit();
      }else{
          header('Location: accounts.php');
          exit();
      }
 }else{
     if (mysqli_num_rows($res_u) > 0){
         $error = "Incorrect Password!!!";
     }else{
         $error = "Incorrect Username!!!";
     }
 }
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel = "stylesheet" type = "text/css" href = "loginpage.css">
<link rel ="stylesheet" type = "text/css" href ="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel ="stylesheet" type = "text/css" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class = "wrapper">
        <header>
        <nav class = "black">
            <div class = "menu-icon">
                <i class = "fa fa-bars fa-2x"></i>
            </div>
            <div class = "logo">Login</div>
            <div class = "menu">
        <ul>
        <li><a href="announcements.php">Announcements</a></li>
        <li><a href="members.php">Members</a></li>
        <li><a href="Information.php">Information</a></li>
        <li><a href ="index.php">Home</a></li>
    </ul>
</div>
</nav>
</header>
</div>
            <section class = "login-box">
            <img src = "VSCM.png" class= "VSCM">
            <h1> Login</h1>
            <form  method = "POST">
                <p>Username</p>
                <input type="text" name="username" placeholder = "Enter Username" required>
                <p>Password </p>
                <input type="password" name="password" placeholder = "Enter Password" required>
                <input type="submit" name = "submit" value = "Log In">
                <p> Don't have an account? <a href = "signup.php"> Sign up</a></p>
            </form>
            <p class = "error"><?php echo $error; ?></p>
        </section>
        <script type = "text/javascript">
        $(document).ready(function(){
            $(".menu-icon").on("click", function(){
                $("nav ul").toggleClass("showing");
                $('section').toggleClass('guide');
            });
        });
        </script>
</body>
</html>
