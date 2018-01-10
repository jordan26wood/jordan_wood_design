<?php
require_once("admin/scripts/config.php");
  if(isset($_POST['submit'])){
        // echo "Good for you, you can click a button";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $street = $_POST['street'];
        $message = $_POST['message'];

        // echo $message;
        if($street === ""){
          // echo "Human";
        $sendMail = submitMessage($name, $email, $message);
        }
  }

?>

<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jordan Wood | Media Designer</title>

    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/minified/TimelineMax.min.js"></script>
    <script src="js/minified/TweenMax.min.js"></script>
    <script src="js/minified/plugins/ScrollToPlugin.min.js"></script>
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="background">
  <h1 class="hide">Jordan Wood - Media Designer</h1>
<!--header-->
<header id="mainHeader" class="expanded row">
  <nav class="small-12 large-12 columns menuNav">
    <div class="small-4 large-2 columns">
      <img id="logo" src="images/logo_jordan.svg" alt="Logo">
    </div>

    <h2 class="hide">Main navigation</h2>
      <div class="title-bar" data-responsive-toggle="main-menu">
        <button class="menuButton menu-icon float-right" type="button" data-toggle></button>
      </div>

    <div id="main-menu" class="small-12 medium-8 large-8 end  columns">
      <ul id="mainNav">
        <li><a href="" id="5">About</a></li>
        <li><a href="" id="6">Resume</a></li>
        <li><a href="" id="7">Portfolio</a></li>
        <li><a href="" id="8">Contact</a></li>
      </ul>
    </div>
  </nav>

  <div id="videoHeader" >
    <img src="images/jordan_laptop.jpg" id="heroImage" alt="header">
  </div>
</header>

<div id="scroll5"></div>
<h2 class="hide">About Page</h2>
<section id="aboutPage" class="expanded row">

  <section id="whoAmI" class="row">
    <div class="whoBox small-12 small-12 small-centered medium-10 medium-offset-1 large-8 large-offset-2 columns">
      <h2>Who Am I?</h2>
      <p>Hi, my name is Jordan Wood. I am an Interactive Media Designer from Newmarket, Ontario.</p>
      <p>I am currently enrolled in Interactive Media Design at Fanshawe College. With the combination of my education and experiences I am able to create user-friendly websites, boost or build a brand and edit videos with animation or special effects. I’ve also had chances to be able to work for real clients and practice my work with them. I love challenging myself to keep learning and knowing more everyday, so please check out my portfolio.</p>
    </div>
</section>

<section id="skills" class="row">
  <div id="icons">
    <div id="web" class="small-4  medium-4  large-4 end columns">
      <img id="0" class="webIcon" src="images/web_icon.svg"  alt="Web Icon">
      <p class="webTag">Web</p>
    </div>

    <div id="video" class="small-4 medium-4  large-4 end columns">
      <img id="1" class="videoIcon" src="images/video_icon.svg"  alt="Video Icon">
      <p class="videoTag">Video</p>
    </div>

    <div id="design" class="small-4 medium-4  large-4  end columns">
      <img  id="2" class="brandingIcon" src="images/design_icon.svg"  alt="Branding Icon">
      <p class="designTag">Design</p>
    </div>
</div>

<section id="swapingSkills" class="row">
  <div class="swapBox small-12 small-centered medium-10 medium-offset-1 large-8 large-offset-2 columns">
    <h2 id="header">Front End Development</h2>
    <p id="info">With my skills and knowledge, I can easily create interactive websites. I can also build responsive websites for mobile, tablet and web. As well of some insight on Back End to be able to build database structures.</p>
  </div>
</section>
</section>
</section>


<div id="scroll6"></div>
  <section id="portfolio" class="expanded row">
<!-- Lightbox container -->
    <section class="lightbox">
      <div class="small-centered small-12 medium-8 large-6 columns">
        <i class="fa fa-times fa-2x close-lightbox"></i>
        <h2 class="title">Simple Fitness</h2>
        <h3 class="sub">Web/Design</h3>
    		<img src="images/project_lb1.jpg" alt="Project1" class="lightbox-img">
    	  <p class="lightbox-desc">Placeholder copy</p>
      </div>
    </section>

<div id="scroll7"></div>
  <div id="myWork" class="expanded row">

</div>
</section>

<div id="scroll8"></div>
<section id="contactMe" class="expanded row">
  <div class="contactInfo small-12 medium-10 large-8 small-centered columns">
    <h2>Get In Touch.</h2>
    <p>If you like what you see and are looking for a front-end developer or designer, I would love to hear from you.  </p>
  </div>

  <div id="contact">
    <p id="contactText"></p>
      <form id="contactForm" action="index.php" method="post">
        <div class="small-10 medium-8 medium-offset-2 large-4 large-offset-4  large-centered small-offset-1 columns">
          <input name="name" type="text" required id="name" size="30" placeholder="Name">
          <input class="street" name="street" type="text" size="21" maxlength="30" />
          <input name="email" type="email" required id="email" size="30" placeholder="Email">
          <textarea id="message" name="message" placeholder="Message" style="height:94px"></textarea>
        </div>

      <div class="expanded row">
        <div class="small-10 small-offset-1 medium-12 medium-centered large-6  columns">
          <input id="submit" name="submit" type="submit" value="Send Message">
        </div>
      </div>
    </form>

<div class="small-12 medium-10 large-8 small-centered columns">
<h3 id="thankYou"><?php
if (!empty($sendMail)){
echo $sendMail;
}
?></h3>
</div>
  </div>
</section>

<h2 class="hide">Footer</h2>
    <footer id="mainFooter" class="expanded row">
<div class="small-7 large-8 float-left columns">
  <p>&copy; Jordan Wood Design 2018</p>
</div>

<div class="small-5 large-4 float-right columns">
<ul id="socialSmall">

    <li id="linkinSmall">
        <a href="http://www.linkin.com">
            <img src="images/linkin_icon.svg" alt="instagram">
        </a>
    </li>

    <li id="instagramSmall">
        <a href="https://www.instagram.com/jordanwooddesign/">
            <img src="images/instagram_icon.svg" alt="instagram">
        </a>
    </li>

</ul>
</div>
</footer>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/gallery.js"></script>
<script src="js/infoLightBox.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/app.js"></script>
</body>
</html>
