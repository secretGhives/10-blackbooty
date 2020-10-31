<?php session_start();
// if session is not set redirect the user
if(empty($_SESSION['u_name']))
	header("Location:login.html");	

//if logout then destroy the session and redirect the user
if(isset($_GET['logout']))
{
	session_destroy();
	header("Location:login.html");
}	
?>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset=utf-8> 
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" /> 
<title>BLACK BOOTY - APK Heaven</title> 
<meta name="keywords" content="android, android apk, cracked apk, cracked android apps, android apps, apk apps" /> 
<meta name="description" content="Place where Pirates gather!" /> 
 
<!-- Load all the cool gadgets --> 
<script src="_js/jquery-1.4.2.min.js"></script> 
<script src="_js/jqueryui-1.8.4.min.js"></script>
<script src="_js/css.js"></script> 
<script src="_js/tweets.js"></script> 
<script src="_js/ajax.js"></script>

<script src="_js/index.js"></script>
<script src="_js/bubble.js"></script>
  
<script src="_js/modernizr-1.5.min.js"></script><!-- this is the javascript allowing html5 to run in older browsers --> 
<!--[if IE]><script src="_js/excanvas.js"></script><![endif]--> 
 
<!-- Whatever you gotta do to me, do it here --> 
<script> 
$(document).ready(function(){
 
  //Magic begins here
  //add corners and shadow to icons
  $('#latest li a').addClass("corner-all glass boxShadow");

  //create info bubbles
  $('#latest a[href][title]').tipsy();	

  //resize icons of the latest 30
  $("#imageResizer").slider({
    orientation: "horizontal",
    range: "min",
    min: 20,
    max: 50,
    value: 46,
    slide: function(event, ui) {
      $("#amount").text(ui.value+"px");
      $("#latest li a").css("width",ui.value+2).css("height",ui.value+2);
      $("#latest li a img").css("width",ui.value).css("height",ui.value);
    }
  });

});
</script> 
 
<link rel="stylesheet" href="_css/reset.css" media="screen" /> 
<link rel="stylesheet" href="_css/css3.css" media="screen" /> 
<link rel="stylesheet" href="_css/general.css" media="screen" /> 
<link rel="stylesheet" href="_css/init.css" media="screen" /> 

<link rel="stylesheet" href="_css/ui-lightness/custom.css" media="screen" /> 

<link rel="stylesheet" href="_css/helpers.css" media="screen" /> 
<link rel="stylesheet" href="_css/tweets.css" media="screen" /> 

<style>
/* Index page latest apps
----------------------------------------------------------------- */
#latest li { float:left;display:inline; }
#latest a { display:block; text-align:center; width:48px; height:48px; padding:3px; margin:0 9px 9px 0; text-decoration:none; background: #fff; }
#latest a span { display: none; }
#latest a img { width: 48px; height: 48px; }
#latest a:hover { 
	background: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0.45, rgb(252,242,211)),
		color-stop(0.73, rgb(249,250,232))
	);
	background: -moz-linear-gradient(
		center bottom,
		rgb(252,242,211) 45%,
		rgb(249,250,232) 73%
	);
}
#latest a:active { background: #666; }



</style>

</head> 
<body> 
<div class="page"> 

    <!-- Navigation --> 
    <header class="boxShadow"> 
      <div class="logo showingLoader"><a href="/"><span>BLACK BOOTY</span></a></div> 
 
      <nav class="gradientBg corner-bottom"> 
        <ul class="vMenu clearFloat"> 
          <li><a class="ajax" href="appz.php" title="APK's"><strong>Appz</strong> Applications.</a></li> 
          <li><a class="ajax" href="fb.php" title="Feedback"><strong>What?</strong> Got something?</a></li>
          <li><a class="ajax" href="links.php" title="Links"><strong>Links</strong> Post yours!</a></li>
        </ul> 
      </nav> 
    </header>
  
    <!-- Center Stage --> 
    <article id="main" class="loadHere corner-all"> 

      <!-- Resize Icons with slider -->
      <section id="pageProperties">
      <div id="imageResizer" style="display:inline-block;width:369px;"></div>
      <label id="amount" style="display:inline-block;margin-left:12px;top:3px;position:relative;"></label>
      </section>

      <!-- Latest 30 additions -->

  <ul id="latest" class="icons clearFloat">
    <li><a href="#" title="Abduction 2<br/>ver:1.1.44<br/>rating:5"><img src="_img/icons/au.com.phil.abduction2.png"/><span>Abduction 2</span></a></li>
    <li><a href="#" title="com.fede.launcher - Custom Mod<br/>ver:46<br/>rating:3"><img src="_img/icons/com.fede.launcher.png"/><span>com.fede.launcher - Custom Mod</span></a></li>
    <li><a href="#" title="Google Voice<br/>ver:0.4.1.26<br/>rating:2"><img src="_img/icons/com.google.android.apps.googlevoice.png"/><span>Google Voice</span></a></li>
    <li><a href="#" title="Armored Strike<br/>ver:2.047 - Offline Experience Fixed! Force Closes.<br/>rating:5"><img src="_img/icons/com.requiem.armoredStrike.png"/><span>Armored Strike</span></a></li>
    <li><a href="#" title="BroweZ<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>BrowseZ</span></a></li>
    <li><a href="#" title="Camiba<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Camiba</span></a></li>
    <li><a href="#" title="Centilia<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Centilia</span></a></li>
    <li><a href="#" title="Centixo<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Centixo</span></a></li>
    <li><a href="#" title="Chatterbean<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Chatterbean</span></a></li>
    <li><a href="#" title="Chatvine<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Chatvine</span></a></li>
    <li><a href="#" title="Dabster<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Dabster</span></a></li>
    <li><a href="#" title="Dazzlelab<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Dazzleblab</span></a></li>
    <li><a href="#" title="Dazzleclub<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Dazzleclub</span></a></li>
    <li><a href="#" title="Demivee<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Demivee</span></a></li>
    <li><a href="#" title="Devopia<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Devopia</span></a></li>
    <li><a href="#" title="Eaxo<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Eaxo</span></a></li>
    <li><a href="#" title="Edgedrive<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Edgedrive</span></a></li>
    <li><a href="#" title="Edgenation<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Edgenation</span></a></li>
    <li><a href="#" title="Fadeo<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Fadeo</span></a></li>
    <li><a href="#" title="Freebird<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Feedbird</span></a></li>
    <li><a href="#" title="Fivecat<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Fivecat</span></a></li>
    <li><a href="#" title="Flipspot<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Flipspot</span></a></li>
    <li><a href="#" title="Innobird<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Innobird</span></a></li>
    <li><a href="#" title="Inte<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Inte</span></a></li>
    <li><a href="#" title="Jabberspot<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Jabberspot</span></a></li>
    <li><a href="#" title="Jabberverse<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Jabberverse</span></a></li>
    <li><a href="#" title="Jumplist<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Jumplist</span></a></li>
    <li><a href="#" title="Kaype<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Kaype</span></a></li>
    <li><a href="#" title="Meendo<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Meendo</span></a></li>
    <li><a href="#" title="Meente<br/>ver:1.2.4<br/>rating:2"><img src="_img/androidPirate32.png"/><span>Meente</span></a></li>
  </ul>
    </article> 
</div><!-- end page --> 
 
 
 
<!-- GOOGLE ANALitic TRACKER --> 
<script type="text/javascript"> 
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js'%3E%3C/script%3E"));
</script> 
<script type="text/javascript"> 
try {
var pageTracker = _gat._getTracker("UA-1765244-CHANGE");
pageTracker._trackPageview();
} catch(err) {}</script> 
 
<!--// &#9734;   ☆   
                   ,.                               _.
                   Y8L                             ,8P
                    `8L                           ,8F
                     `8L      ___.,ooooo.__      ,8P
                      `8b,oo888888L`888888888bood8P
                     ,o8888888888888.Y888888888888o.
                  ,o88888888888888888b.`Y888888888888o.
                ,d8888888888888888888888o_``Y8888888888b.
               d88888888P88888888888888888bo.  '"YP888888b.
             ,88888888'   Y88888888888888888'        `'`""Y>
            d888888888L   d88888888888888888.       ,oooo____
           d888888888888888888888888888888888o_   _o888888888b
          ,888888888888888888888888888888888888888888888888888.
    ___   d8888888888888888888888888888888888888888888888888888
   d888b. 88888888888888888888888888888888888888888888888888888[
  `88888b]8888888888PPY88PP88P"Y88P"P8PPY88PPY88PP8888888888888b ,ooo.
   Y88888L_                                                     d88888.
  ,8888888888oooo__                                            ,888888
 d888888PYPY888888888booo._                          __,oooooo8888888[
 Y8888P'_oo_  '`""PP888888888ooooo_    __,ooooooo888888888888888888888.
   ''' d88888.        ''Y88888888888888888888888888PPPP"""''[,_ Y888888
       Y888888ooooooo88888888888888888888888888boo__      ,88888p`Y88PP
        `888888888888888PPP""""'''    '`""PP8888888888oood888888P
         d88888P"'''                          ''"YPY8888888888P'
        ]88888P                                       '`888888.
        `8888P                                          ] LCR b
                                                         Y8888'
                                                           `'
       ┌────────────────────────────────────────────────────────┐
       │ Date of Creation ........................... Year 2010 │
       └────────────────────────────────────────────────────────┘
//-->
 
</body> 
</html> 
