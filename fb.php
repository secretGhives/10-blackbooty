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

<script src="_js/mail.js"></script>

<h3>Got something to say?</h3>

<form method="post" action="" id="contactForm" name="contact">
  <textarea cols="32" rows="9" name="message" id="message" class="area"></textarea>
  <p><input type="submit" name="submit" class="button" id="submit_btn" value="Then say it.." /></p>
</form>

