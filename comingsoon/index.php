<!DOCTYPE html>
<html>
<head>
  <link href="/assets/css/comingsoon.css" type="text/css" rel="stylesheet" /> 
  <link href="/assets/css/temp.css" type="text/css" rel="stylesheet" /> 
  <link href="../assets/css/toolkit.css" type="text/css" rel="stylesheet" />
  <link href="../assets/css/application.css" rel="stylesheet">
  <link rel="shortcut icon" href="/assets/img/coming soon/develuplogo.ico"/>
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600|Nunito+Sans:300,400,700,700i" rel="stylesheet">
  <title>Develup.co - Global Platform for Startup Growth</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   
  <script src="/assets/js/typed.js"></script>
  
</head>

<body>

<nav class="white-nav navbar-fixed-top app-navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-main">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" cursor="default">
        <h1 class="logo"><img src="/assets/img/coming soon/potlogo1.svg" class="img-logo" /> Develup.co</h1>
      </a>
      <p class="slogan">Empowering the World to Startup.</p>
    </div>
    <div class="navbar-collapse collapse" id="navbar-collapse-main">
      <ul class="nav navbar-nav navbar-right m-r-0 hidden-xs">
        <li>
          <a href="signup/signup_form.html" style="color:white;">
            <button style="background-color: white; border: 1.5px solid #009DEB; padding-left: 26px; padding-right: 26px; margin-left: 20px; margin-bottom: -8px; margin-top: -10px; color: #009DEB; font-size: 11pt; font-family: 'Nunito Sans', sans-serif;" type="button" class="btn btn-primary">
              Blog Coming Soon!</button>
          </a>
          
        </li>
      </ul>
      <!--Navbar for mobile-->
      <ul class="nav navbar-nav hidden-sm hidden-md hidden-lg">
        <li><a href="index.html">Blog Coming Soon!</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="col-md-12 mainback" style="height: 100vh; background-image: url('/assets/img/coming soon/betabackground.png'); width: 100%; background-size: cover;">
  <div class="top-main-body">
    <div class="col-md-offset-1 main-type-margin">
      <h1 style="color: white; font-weight: 600; font-family: 'Montserrat', sans-serif; font-size: 40pt;" >Develup.co<span class="element"></span></h1>
      <p class="row col-md-6 font-nunito-sans sub-text" style="color: white; font-size: 16pt; padding-top: 1.5%;">A tailored growth solution and educational companion for
        early stage startups and first-time entrepreneurs.</p>
        
      <form class="mid-form row col-md-7 validate" id="signupform" method="post" target="_blank" novalidate>
        <p class="font-nunito-sans letmeknow" style="color: white; font-size: 13pt;">Let me know when beta launches!</p>
        <br />
        <div class="row">
          <input class="email-input name-input" type="text" placeholder="Please enter your first name" name="name" id="name"/>
        </div>
        <div class="row">
          <input class="email-input" type="email" placeholder="Enter your email address" name="email" id="email"/>
          <input type="submit" value="Sign up for Beta!" name="subscribe" id="mc-embedded-subscribe" class="submit-btn">
        </div>
        
        <div id="mce-responses" class="clear">
    		  <div class="response" id="mce-error-response" style="display:none"></div>
    	  	<div class="response" id="mce-success-response" style="display:none"></div>
    	  </div> 
	  
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d15816a6bcde65899acef94d8_9b3f8b22e1" tabindex="-1" value=""></div>
        
          <?php
            // $api_key = "af35105d5240bbc7438ac465e56db070-us9";
            // $list_id = "9b3f8b22e1";
            
            include 'MailChimp.php';
            
            use \DrewM\MailChimp\MailChimp;
          
            $MailChimp = new MailChimp('b252b1126798a3b6fdd8df574ca6ecff-us15');
            
            $list_id = '9b3f8b22e1';
          
            $result = $MailChimp->post("lists/$list_id/members", [
            				'merge_fields' => ['FNAME'=>$_POST["name"]],
            				'email_address' => $_POST["email"],
            				'status'        => 'subscribed',
            			]);
            
            if ($MailChimp->success()) {
            	echo '<div id="phpright">'."Congratulations, you have been successfully signed up! Please check your email".'</div>';
            } else {
              echo '<div style="display: none;" id="phpwrong">'.$MailChimp->getLastError().'</div>';
            }
          
          ?>
        </div>
        
        <!--<label class="row col-md-10 hiddenphone" style="padding-top: 1em; color: white; font-size: 11pt; font-weight: 200;"><input type="checkbox" name="checkbox" value="value" style="margin-right: 0.6em;">Become an insider! Receive weekly content updates, news and bonuses</label>-->
      </form>
      <p class="announcement col-md-offset-1">Beta launching soon around the globe! 🎉</p>
    </div>
    
    
    <p class="announcement col-md-offset-1">Beta launching soon around the globe! 🎉</p>
  </div>
</div>

<img class="mac-screens" src="/assets/img/coming soon/iMac Retina Display Psd Mockup.png" />
<!-- This is the animated indicator
<div class="col-md-12">
  <img src="/assets/img/coming soon/indicator.svg" class="image-responsive center-block indicator" />
</div>
-->
<div class="col-md-12" style="background-color: white;">
  
  <div class="row col-md-8 col-md-offset-1 left-margin col-xs-12">
    <h1 style="color: #009DEB; font-weight: 600; font-family: 'Montserrat', sans-serif; font-size: 25pt; margin-top: 1.9em;" >Develup Your <span class="element1"></span></h1>
    <p class="row col-md-9" style="font-size: 13pt; margin-top: 1em;"><span class="strong-blue">Recruit</span> entrepreneurial talent for your startup! <span class="strong-blue">Connect</span> with like-minded entrepreneurs and startup ecosystems around the world. <span class="strong-blue">Discover</span> new opportunities and launch your startup!</p>
    <ul class="row col-md-6 icons-list">
      
      <!--- This is the floating icons list -->
      <li class="icons-list-items ">
        <img class="skill-icon1 icons" src="/assets/img/WebITSubC.png" />
      </li>
      
      <li  class="icons-list-items">
        <img class="skill-icon2 icons" src="/assets/img/WebDesignSubC.png" />
      </li>
      
      <li  class="icons-list-items">
        <img class="skill-icon3 icons" src="/assets/img/WebBusinessDevSubC.png" />
      </li>
      
      <li  class="icons-list-items">
        <img class="skill-icon4 icons" src="/assets/img/WebMarketingSubC.png" />
      </li>
      
    </ul>
     
  </div>    
 
  <div class="col-md-12" style="padding-bottom: 5em;">
    <img class="image-responsive center-block" src="/assets/img/coming soon/banner1.svg" width="100%;"/>
  </div>
</div>



<div class="col-md-12 gradient-background">
  <div class="row col-md-12 text-center">
    <h1 style="color: white; font-weight: 600; font-family: 'Montserrat', sans-serif; font-size: 25pt; padding-top: 2em;" >Connecting <span class="element2"></span></h1>
    <p class="second-section-text" style="font-size: 14pt; color: white; padding-top: 1em; padding-bottom: 2em;" >Connect, learn and build on the world’s first tailored platform for early-stage startups! </p>
  
  <div class="row col-md-12">
    <div class="col-md-3 tiles col-md-offset-1 col-xs-10 col-xs-offset-1">
      <img class="center-block tile-img" src="/assets/img/coming soon/coding.svg" width="245px"  />
      <h3 class="tile-text text-center" style="padding-top: 1.05em;">Find the missing pieces</h3><br />
      <p style="padding: 0.5em 2em 1em 2em; text-align: center; font-size: 11pt;" >Sometimes great ideas are hindered by a lack of skilled labour. And finding this skilled labour can be extremely difficult, when all you have to offer is some startup equity and staff discounts from the place you work part-time. That’s why we’ve decided to reinvent the wheel! Well… the way we connect in startup ecosystems at least.


</p>
    </div>
    <div class="col-md-3 tiles col-xs-10">
      <img class="center-block tile-img" src="/assets/img/coming soon/solution.svg" width="200px" />
      <h3 class="tile-text text-center" style="padding-top: 0.5em; line-height: 1.4em;">Post equity-based job<br />opportunities!</h3>
      <p style="padding: 0.5em 2em 1em 2em; text-align: center; font-size: 11pt;">We have developed a series of listings which allow you to search for local, national and international talent based on skillsets. So you can identify your skillgaps, and simply fill them. Need technical talent, post an opportunity or search local universities. Need a cofounder? Find one! And the best part is… everyone on Develup.co is seeking startup opportunities!
</p>
    </div>
    <div class="col-md-3 tiles col-xs-10">
      <img class="center-block tile-img" src="/assets/img/coming soon/startup.svg" width="220px" />
      <h3 class="tile-text text-center" style="line-height: 1.4em;">Join the world's first startup<br />platform!</h3>
      <p style="padding: 0.5em 2em 1em 2em; text-align: center; font-size: 11pt;" >Yes we know we have competitors, but we want to empower startups to compete with industry giants. So why not lead by example? Develup.co will be much more than a place to find entrepreneurial talent, it’ll be all-in-one platform for innovation. Connect with mentors, investors and entrepreneurs, browse local startups and become a part of them. Promote your startup and share your stories. 
</p>
    </div>
  </div>
  
    <div class="row col-md-12 text-center" >
       <p class="row col-md-8 col-md-offset-2 footer-quote">Enhancing the innovative capabilities of Australian startups through the power of people, teams and leadership and connectivity.</p> 
  </div>
  
  

      </div>
</div>
  




<!--Make the CSS Here in Temp.css so we can put it on all pages-->
<div class="col-md-12" style="background-color: white; height: auto; padding: 4em;">
  <div class="col-md-2">
    <ul style="list-style: none;">
      <li class="blue-footer-title">Resources</li>
      <li class="font-nunito-sans-footer"><a href="#">Privacy Policy</a></li>
      <li class="font-nunito-sans-footer"><a href="#">Terms & Conditions</a></li>
      <!-- <li class="font-nunito-sans-footer"><a href="#">Contact Us</a></li> -->
      <!-- <li class="font-nunito-sans-footer"><a href="#">FAQ</a></li> -->
    </ul>
  </div>
  <div class="col-md-2 margin-15">
    <ul style="list-style: none; margin-top: 29px;">
      <!--<li class="font-nunito-sans-footer margin-35"><a href="#">Pricing</a></li> -->
      <!-- <li class="font-nunito-sans-footer"><a href="#">Support</a></li> -->
      <!-- <li class="font-nunito-sans-footer"><a href="#">Give us Feedback</a></li> -->
    </ul>
  </div>
  <div class="col-md-4">
    <ul style="list-style: none;">
      <li class="blue-footer-title">Company</li>
      <li class="font-nunito-sans-footer"><a href="#">Blog</a></li>
      <li class="font-nunito-sans-footer"><a href="#">Invest in Develup</a></li>
    </ul>
  </div>
  <div class="col-md-4 hiddenfoot">
    <ul style="list-style: none;">
      <li class="blue-footer-title pull-right">Develup</li>
      <li class="row col-md-12 font-nunito-sans-footer pull-right" style="text-align: right;">Enhancing the innovative capabilities of Australian<br> Startups through the power of people, teams, leadership & Connectivity.</li>
      <li class="font-nunito-sans-footer pull-right copyright">Develup &copy; 2016 - <script>document.write(new Date().getFullYear())</script> </li>
    </ul>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function(){
      Typed.new('.element', {
        strings: ["founders", "invent", "llaborate", "create", "de", "design",],
        typeSpeed: 200,
        startDelay: 500,
        backDelay: 800,
        backSpeed: 200,
        loop: true,
        loopCount: null,
        
      });
  });
  
    document.addEventListener('DOMContentLoaded', function(){
      Typed.new('.element1', {
        strings: ["Team", "Network", "Startup"],
        typeSpeed: 200,
        startDelay: 500,
        backDelay: 800,
        backSpeed: 200,
        loop: true,
        loopCount: null,
        
      });
  });
  
      document.addEventListener('DOMContentLoaded', function(){
      Typed.new('.element2', {
        strings: ["Ideas", "Skills", "People"],
        typeSpeed: 200,
        startDelay: 500,
        backDelay: 800,
        backSpeed: 200,
        loop: true,
        loopCount: null,
        
      });
  });
  
  
</script>
        
    </body>
</html>