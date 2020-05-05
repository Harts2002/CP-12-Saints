<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Vanstrings</title>
    <meta charset = "utf-8">
    <meta name = "description" content = "Vanstring members info page">
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
<link rel ="stylesheet" type = "text/css" href ="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = "stylesheet" type = "text/css" href = "members.css">
<link rel ="stylesheet" type = "text/css" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = "stylesheet" type = "text/css" href = "Footer.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
            <div class = "wrapper">
                <header>
                <nav>
                    <div class = "menu-icon">
                        <i class = "fa fa-bars fa-2x"></i>
                    </div>
                    <div class = "logo">Members</div>
                    <div class = "menu">
                <ul>
                <li><a href="announcements.php">Announcements</a></li>
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
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>
<div class="galleryContainer">
    <div class="slideShowContainer">
        <div id="playPause" onclick="playPauseSlides()"></div>
        <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
        <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
        <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
        <div class="imageHolder">
            <img src="Raymond.png">1366X768
            <p class="captionText">Raymond</p>
        </div>
        <div class="imageHolder">
            <img src="Katherine.png">
            <p class="captionText">Katherine</p>
        </div>
        <div class="imageHolder">
            <img src="Louis.png">
            <p class="captionText">Louis</p>
        </div>
        <div class="imageHolder">
            <img src="Serena.png">
            <p class="captionText">Serena</p>
        </div>
        <div class="imageHolder">
            <img src="Martin.png">
            <p class="captionText">Martin</p>
        </div>
        <div class="imageHolder">
            <img src="Eddie.png">
            <p class="captionText">Eddie</p>
        </div>
    </div>
    <div id="dotsContainer"></div>
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
                <li><a href = "https://www.instagram.com/explore/tags/vanstrings/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href ="https://www.facebook.com/groups/1352329311564042/?ref=bookmarks"><i class="fa fa-facebook-f" aria-hidden = "true"></a></i></li>
                <li><i class="fa fa-snapchat" aria-hidden = "true"></i></li>
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
