<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>Vanstrings</title>
<head>
<link rel ="stylesheet" type = "text/css" href ="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = "stylesheet" type = "text/css" href = "information.css">
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
                    <div class = "logo">Information</div>
                    <div class = "menu">
                <ul>
                <li><a href="announcements.php">Announcements</a></li>
                <li><a href="members.php">Members</a></li>
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
    <p>Vanstring began back in 2010. Originally with only 4 members, the orchestra has grown lots during the last decade. Vanstring has shared music at various different seniorhomes in Vancouver. We do this to help those who can find inconvenience in attending other musical performances. We also want to give back to the previous generation of citizens who shaped the environment we live in today. </p>
    <p>Members of Vanstrings are all students at Cecilia & Kevin's Music Studio. We limit members to within the studio to ensure the supportiveness and coordination already developed within the studio, making rehearsals and performances as best as possible. All members of Vanstring can be found on the members page on this site. There's a limited amount of space but we always try our best to include every talented musician we discover.</p>
    <p>Many of the members of Vanstring also participate in the Voluntary Teaching for China initiative, which you can learn more about <a href = "https://voluntaryteachingforchina.com/"> here. </a> Vanstring musicians not only bring English language studies to China, but also their passion and appreciation of music. </p>
    <p>A huge part of the success of Vanstring comes from the teachers from Cecilia & Kevin's Music Studio who have supported us throughout the decade. Not only do they teach us how to better portray the music we want to share, but they inspire us to pursue music and share music with others. Therefore we must thank Cecilia Xu, Kevin Wei, and Michael Leung for their support of Vanstring.
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
<div class="galleryContainer">
    <div class="slideShowContainer">
        <div id="playPause" onclick="playPauseSlides()"></div>
        <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
        <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
        <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
        <div class="imageHolder">
            <img src="VanGroup.jpg">1366X768
            <p class="captionText">Picture 1</p>
        </div>
        <div class="imageHolder">
            <img src="VanGroup2.png">
            <p class="captionText">Picture 2</p>
        </div>
        <div class="imageHolder">
            <img src="VanGroup3.png">
            <p class="captionText">Picture 3</p>
        </div>
        <div class="imageHolder">
            <img src="VanGroup4.png">
            <p class="captionText">Picture 4</p>
        </div>
    </div>
    <div id="dotsContainer"></div>
</div>
<script src="Vanstring.js"></script>
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
