<?php
session_start();
$host = "localhost:3306";
    $dbUsername = "hao_Harts";
    $dbPassword = "20020511h";
    $dbname = "hao_Vanstrings";
 $conn = new mysqli("127.0.0.1",$dbUsername, $dbPassword, $dbname,"3306");
 $error = "";
 if (mysqli_connect_error()) {
  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}else{
    $sql = "SELECT  `message`,`author`,`message_date` FROM `announcements` ORDER BY id DESC LIMIT 5";
    $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($res);
    $authors = array();
    $date = array();
    $messages = array();
    if (mysqli_num_rows($res) > 0){
        $result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_array($result)){
            $messages[] = $row[0];
            $authors[] = $row[1];
            $date[] = ($row[2]);
        }
        $num_rows = count($authors);
}
}
?>
<!DOCTYPE html>
<html>
<title>Vanstrings</title>
<head>
<link rel ="stylesheet" type = "text/css" href ="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = "stylesheet" type = "text/css" href = "announcements.css">
<link rel ="stylesheet" type = "text/css" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = "stylesheet" type = "text/css" href = "footer.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class = "wrapper">
        <header>
        <nav>
            <div class = "menu-icon">
                <i class = "fa fa-bars fa-2x"></i>
            </div>
            <div class = "logo">Announcements</div>
            <div class = "menu">
        <ul>
        <li><a href="members.php">Members</a></li>
        <li><a href="Information.php">Information</a></li>
        <li><a href="index.php">Home</a></li>
        <li><?php if (isset($_SESSION['u_first'])){
            if ($_SESSION['u_first'] === "Hao"){
                echo '<a class = "active" href = "managers.php">My account</a>';
            }else{
            echo '<a class = "active" href = "accounts.php">My account</a>';
        }
    }else{
            echo'<a class = "active" href = "loginpage.php">Login</a>';
        }
        ?></a></li>
    </ul>
</div>
</nav>
</header>
    </div>
            <div class = "content">
                <h2><u>Most Recent Five Announcements</u></h2>
                <br>
                <?php
                for ( $i = 0; $i < $num_rows; $i++){
                    echo "<p>"."<i>"."<u>".$authors[$i]." "."(".$date[$i].")"."</u>"."</i>"."</p>";
                    echo "<p>".$messages[$i]."</p>"."<br>";
                }
                ?>
            </div>
            <script type = "text/javascript">
            $(document).ready(function(){
                $(".menu-icon").on("click", function(){
                    $("nav ul").toggleClass("showing");
                });
            });
            $(window).on("scroll", function(){
                if ($(window).scrollTop()){
                    $("nav").addClass("black");
                }
                else{
                    $("nav").removeClass("black");
                }
            })
            </script>
            <footer>
                <div class = "leftside">
                    <h3 align = "left"><u>Contact Managers</u> </h3>
                    <dl>
                        <dt>Hao Shi</dt>
                        <dd>778-2333986</dd>
                        <dt>Martin Huang</dt>
                        <dd>778-8897062</dd>
                        <dt>Ethan Lee</dt>
                        <dd>604-6521116</dd>
                    </dl>
                    <h3><u>Studio Location</u></h3>
                    <p>6631 Elmbridge Way, Richmond, BC</p>
                </div>
                <div class ="links">
                    <h3 align = "center"><u>Social Media Accounts</u></h3>
                    <p align = "center">Follow Vanstring on Social Media for updates and support us!</p>
                        <ul>
                            <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                            <li><i class="fa fa-facebook-f" aria-hidden = "true"></i></li>
                            <li><i class="fa fa-snapchat" aria-hidden = "true"></i></li>
                            <li><i class="fa fa-weixin" aria-hidden = "true"></i></li>
                            <li><i class = "fa fa-twitter" aria-hidden = "true"></i></li>
                        </ul>
                        <h3 align = "center">General Contact Email</h3>
                        <p align = "center">hao2002777@gmail.com</p>
                        <img src = "VSCM.png" align = "right">
                </div>
            </footer>
            </body>
            </html>
