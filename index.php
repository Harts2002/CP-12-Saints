<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>Vanstrings</title>
<head>
<link rel ="stylesheet" type = "text/css" href ="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = "stylesheet" type = "text/css" href = "Vanstring.css">
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
                    <div class = "logo"><img src = "VSCM.png"></div>
                    <div class = "menu">
                <ul>
                <li><a href="announcements.php">Announcements</a></li>
                <li><a href="members.php">Members</a></li>
                <li><a href="Information.php">Information</a></li>
                <li><?php if (isset($_SESSION['u_email'])){
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
    <p>Vanstring Chamber Music is a youth non-profit organizations founded by Cecilia & Kevin Music Studio in 2010. Since its founding in 2010, Vanstring has held continuous rehearsals and performances during the past eight years. They have made nearly 160 shows sharing their music throughout the lower mainland.  Vanstring has also been invited to perform at Vancouver’s Chinese Spring Festival Gala in 2012, 2013, 2014… and at the Golden Panda North America International Festival’s Opening and many other large events. The music group plans weekly performances at local senior homes in Lower Mainland Vancouver. Rehearsals are held at Cecilia & Kevin’s Music Studio in Richmond.

There are currently more than 30 members in Vanstring and we are always welcome to more musicians. Under the guidance of Michael and Kevin, Vanstring strives to share beautiful classical and modern music with more and more people.
Unfortunately, Vanstring auditions are for in-studio applicants only. Vanstring members may register and login into their own Vanstring account.</p>
</div>
<script src="Vanstring.js"></script>
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
