<?php
session_start();
$host = "localhost:3306";
    $dbUsername = "hao_Harts";
    $dbPassword = "20020511h";
    $dbname = "hao_Vanstrings";
 $conn = new mysqli("127.0.0.1",$dbUsername, $dbPassword, $dbname,"3306");
 if (mysqli_connect_error()) {
  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
 } else {
     $name = $_SESSION['u_first']." ".$_SESSION['u_last'];
     $sql = "SELECT * FROM `profile` WHERE `profile_first` = '$name'";
     $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
     $row = mysqli_fetch_assoc($res);
     $absence_rehearsal = $row['profile_absence_rehearsal'];
     $attendance_seniorhome = $row['profile_absence_seniorhome'];
     $attendance_concerts = $row['profile_concert'];
     $hours = $row['profile_hours'];
     $vtc_membership = $row['profile_VTC'];
     $status = $row['profile_status'];
 }
?>

<html>
<head>
    <meta charset = "utf-8">
    <meta name = "description" content = "Vanstring members profile page">
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
    <title>Personal Profile of members</title>
    <link rel = "stylesheet" href = "profile.css">
    <link rel ="stylesheet" type = "text/css" href ="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel ="stylesheet" type = "text/css" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class = "top">
    <div class = "profile_photo">
        <img src = "Raymond.png" style = "width: 100%">
        <div class = "title">
            <?php
                if (isset($_SESSION['u_email'])){
                    echo '<h2>'.$name.'</h2>';
                }
            ?>
        </div>
    </div>
    <div class = "main-body">
        <p><i class="fa fa-envelope" info></i> personal email:
        <?php
            if (isset($_SESSION['u_email'])){
                echo $_SESSION['u_email'];
            }
        ?>
    </p>
    <p><i class="fa fa-id-badge" info></i> Age:
    <?php
        if (isset($_SESSION['u_email'])){
            echo $_SESSION['u_age'];
        }
    ?>
</p>
<p><i class="fa fa-university" info></i> School:
<?php
    if (isset($_SESSION['u_email'])){
        echo $_SESSION['u_school'];
    }
?>
</p>
<p><i class="fa fa-music" info></i> Section:
<?php
    if (isset($_SESSION['u_email'])){
        echo $_SESSION['u_section'];
    }
?>
</p>
<p><i class="fa fa-graduation-cap" info></i> Grade:
<?php
    if (isset($_SESSION['u_email'])){
        echo $_SESSION['u_grade'];
    }
?>
</p>
<p><i class="fa fa-hourglass-half" info></i> Total Volunteer Hours:
<?php
    if (isset($_SESSION['u_email'])){
        echo $hours;
    }
?>
</p>
<hr>
<h2><b><i class = "fa fa-asterisk info"></i> Current Year Statistics </b></h2>
<p> Absences to Rehearsals </p>
<div class = "stats_bar">
    <div class = "progress_bar" style = "width: <?php echo $absence_rehearsal ?>"> <?php echo $absence_rehearsal ?>
</div>
    </div>
    <p> Attendance to Seniorhome Concerts </p>
    <div class = "stats_bar">
        <div class = "progress_bar" style = "width: <?php echo $attendance_seniorhome ?>"><?php echo $attendance_seniorhome ?>
    </div>
        </div>
        <p> Attendance to Major Concerts </p>
        <div class = "stats_bar">
            <div class = "progress_bar" style = "width: <?php echo $attendance_concerts ?>"><?php echo $attendance_concerts ?>
        </div>
            </div>
            <h3> Behaviour Status: <?php echo $status ?></h3>
            <footer>
                    <dl><?php
                        if ($_SESSION['u_first'] === "Hao"){
                            echo '<a class = "active" href = "managers.php">My account</a>';
                        }else{
                        echo '<a class = "active" href = "accounts.php">My account</a>';
                    }
                    ?>
                    </dl>
                </div>
            </footer>
</div>
</body>
</html>
