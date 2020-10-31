<?php
// if session is not set redirect the user
if(empty($_SESSION['u_name']))
	//header("Location:login.html");	

//if logout then destroy the session and redirect the user
if(isset($_GET['logout']))
{
	session_destroy();
	header("Location:login.html");
}	
?>

<script>
// JavaScript Document
$(document).ready(function(){

  //create navigation
  $('#archive').listnav();

  //add corners and shadow to icons
  $('#archive li a').addClass("corner-all glass boxShadow");

  //create info bubbles
  $('#archive a[href][title]').tipsy();

  //resize icons of the index
  $("#imageResizer").slider({
    orientation: "horizontal",
    range: "min",
    min: 20,
    max: 50,
    value: 46,
    slide: function(event, ui) {
      $("#amount").text(ui.value+"px");
      $("#archive li a").css("width",ui.value+2).css("height",ui.value+2);
      $("#archive li a img").css("width",ui.value).css("height",ui.value);
    }
  });


});
</script>

<style>
/* default styling example
----------------------------------------------------------------- */

.listNav { margin-bottom:13px; position: relative; }

.ln-letters { overflow:hidden; }
.ln-letters a { font-size:0.9em; display:block; float:left; padding:2px 6px; border:1px solid silver; border-right:none; text-decoration:none; }
.ln-letters a.ln-last { border-right:1px solid silver; }
.ln-letters a:hover,
.ln-letters a.ln-selected { 
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
	color: #000;
}
.ln-letters a.ln-disabled { color:#ccc; }
.ln-letter-count { text-align:center; font-size:0.8em; line-height:1; margin-top:-13px; color:#336699; }


/* demo-specific
----------------------------------------------------------------- */
#listWrapper { width:693px; padding-top:6px; }
#archive li { float:left;display:inline; }
#archive a { display:block; text-align:center; width:48px; height:48px; padding:3px; margin:0 9px 9px 0; text-decoration:none; background: #fff; }
#archive a span { display: none; }
#archive a img { width: 48px; height: 48px; }
#archive a:hover { 
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
#archive a:active { background: #666; }
</style>

<!-- Resize Icons with slider -->
<section id="pageProperties">
 <div id="imageResizer" style="display:inline-block;width:369px;"></div>
 <label id="amount" style="display:inline-block;margin-left:12px;top:3px;position:relative;"></label>
</section>

<!-- Index Navigator (Alphabetical) -->
<div id="listWrapper">
  <div id="archive-nav" class="listNav"></div>

  <!-- Entire archive loaded here -->
  <ul id="archive" class="icons clearFloat">
    <li><a href="#" title="Abduction 2<br/>ver:1.1.44<br/>dls:5"><img src="_img/icons/au.com.phil.abduction2.png"/><span>Abduction 2</span></a></li>
    <li><a href="#" title="com.fede.launcher - Custom Mod<br/>ver:46<br/>dls:3"><img src="_img/icons/com.fede.launcher.png"/><span>com.fede.launcher - Custom Mod</span></a></li>
    <li><a href="#" title="Google Voice<br/>ver:0.4.1.26<br/>dls:2"><img src="_img/icons/com.google.android.apps.googlevoice.png"/><span>Google Voice</span></a></li>
    <li><a href="#" title="Armored Strike<br/>ver:2.047 - Offline Experience Fixed! Force Closes.<br/>dls:5"><img src="_img/icons/com.requiem.armoredStrike.png"/><span>Armored Strike</span></a></li>
    <li><a href="#" title="BroweZ<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>BrowseZ</span></a></li>
    <li><a href="#" title="Camiba<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Camiba</span></a></li>
    <li><a href="#" title="Centilia<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Centilia</span></a></li>
    <li><a href="#" title="Centixo<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Centixo</span></a></li>
    <li><a href="#" title="Chatterbean<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Chatterbean</span></a></li>
    <li><a href="#" title="Chatvine<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Chatvine</span></a></li>
    <li><a href="#" title="Dabster<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Dabster</span></a></li>
    <li><a href="#" title="Dazzlelab<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Dazzleblab</span></a></li>
    <li><a href="#" title="Dazzleclub<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Dazzleclub</span></a></li>
    <li><a href="#" title="Demivee<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Demivee</span></a></li>
    <li><a href="#" title="Devopia<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Devopia</span></a></li>
    <li><a href="#" title="Eaxo<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Eaxo</span></a></li>
    <li><a href="#" title="Edgedrive<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Edgedrive</span></a></li>
    <li><a href="#" title="Edgenation<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Edgenation</span></a></li>
    <li><a href="#" title="Fadeo<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Fadeo</span></a></li>
    <li><a href="#" title="Freebird<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Feedbird</span></a></li>
    <li><a href="#" title="Fivecat<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Fivecat</span></a></li>
    <li><a href="#" title="Flipspot<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Flipspot</span></a></li>
    <li><a href="#" title="Innobird<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Innobird</span></a></li>
    <li><a href="#" title="Inte<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Inte</span></a></li>
    <li><a href="#" title="Jabberspot<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Jabberspot</span></a></li>
    <li><a href="#" title="Jabberverse<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Jabberverse</span></a></li>
    <li><a href="#" title="Jumplist<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Jumplist</span></a></li>
    <li><a href="#" title="Kaype<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Kaype</span></a></li>
    <li><a href="#" title="Meendo<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Meendo</span></a></li>
    <li><a href="#" title="Meente<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Meente</span></a></li>
    <li><a href="#" title="Meetz<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Meetz</span></a></li>
    <li><a href="#" title="Muba<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Muba</span></a></li>
    <li><a href="#" title="Ombee<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Ombee</span></a></li>
    <li><a href="#" title="Oope<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Oope</span></a></li>
    <li><a href="#" title="Podtune<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Podtune</span></a></li>
    <li><a href="#" title="Quiyo<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Quiyo</span></a></li>
    <li><a href="#" title="Riffire<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Rifffire</span></a></li>
    <li><a href="#" title="Riffmix<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Riffmix</span></a></li>
    <li><a href="#" title="Tagtube<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Tagtube</span></a></li>
    <li><a href="#" title="Tandu<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Tandu</span></a></li>
    <li><a href="#" title="Tekpad<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Tekpad</span></a></li>
    <li><a href="#" title="Tekware<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Tekware</span></a></li>
    <li><a href="#" title="Topbug<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Topbug</span></a></li>
    <li><a href="#" title="Trunti<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Trunti</span></a></li>
    <li><a href="#" title="Twitterspot<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Twitterspot</span></a></li>
    <li><a href="#" title="Voonte<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Voonte</span></a></li>
    <li><a href="#" title="Wikible<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Wikible</span></a></li>
    <li><a href="#" title="Wikidel<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Wikidel</span></a></li>
    <li><a href="#" title="Wikindo<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Wikindo</span></a></li>
    <li><a href="#" title="Yondo<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Yondo</span></a></li>
    <li><a href="#" title="Yotz<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Yotz</span></a></li>
    <li><a href="#" title="Zoomworks<br/>ver:1.2.4<br/>dls:2"><img src="_img/androidPirate32.png"/><span>Zoomworks</span></a></li>
  </ul>
</div>

