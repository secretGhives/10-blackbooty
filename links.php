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

<script src="_js/upload.js"></script>

<!-- Local page script --> 
<script> 
$(document).ready(function(){
 
  var uploader = new qq.FileUploader({
    // pass the dom node (ex. $(selector)[0] for jQuery users)
    element: document.getElementById('file-uploader'),
    // path to server-side upload script
    action: '/_php/upload.php',
    allowedExtensions: ['apk']
  });

});
</script>

<style>
.date {font-size:0.8em;line-height: 14px;display:block;}
.desc {font-size:0.6em; font-weight: normal;}
#directLinks {display: block; height:190px;overflow:hidden;overflow-y: auto;overflow-x: none;}
#directLinks li {line-height:32px; background:#fff;border-top: 1px solid #ddd;padding-left:13px;}

#form input {vertical-align: top;}

.qq-uploader { position:relative; width: 100%;}

.qq-upload-button {
    display:block; /* or inline-block */
    width: 105px; padding: 7px 0; text-align:center;    
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
    border-bottom:1px solid #ddd;
    color:#000;
}
.qq-upload-button-hover {
    background: #fff;
    color: #666;
    border-top: solid 1px #ccc;
}
.qq-upload-button-focus {outline:1px dotted black;}

.qq-upload-drop-area {
    position:absolute; top:0; left:0; width:100%; height:100%; min-height: 70px; z-index:2;
    background:#FF9797; text-align:center; 
}
.qq-upload-drop-area span {
    display:block; position:absolute; top: 50%; width:100%; margin-top:-8px; font-size:16px;
}
.qq-upload-drop-area-active {background:#FF7171;}

.qq-upload-list {margin:15px 35px; padding:0; list-style:disc;}
.qq-upload-list li { margin:0; padding:0; line-height:15px; font-size:12px;}
.qq-upload-file, .qq-upload-spinner, .qq-upload-size, .qq-upload-cancel, .qq-upload-failed-text {
    margin-right: 7px;
}

.qq-upload-file {}
.qq-upload-spinner {display:inline-block; background: url("/_img/loading.gif"); width:15px; height:15px; vertical-align:text-bottom;}
.qq-upload-size,.qq-upload-cancel {font-size:11px;}

.qq-upload-failed-text {display:none;}
.qq-upload-fail .qq-upload-failed-text {display:inline;}
</style>

<h3>Submit an App <span class="desc">(.apk only)</span></h3>
<div id="file-uploader">       
    <noscript>          
        <p>Please enable JavaScript to use file uploader.</p>
        <!-- or put a simple form for upload here -->
    </noscript>         
</div>

<h3>Links to stuff we're missing here</h3>
<form method="post" id="form">
  <input class="text user" id="nick" type="hidden" value="☆" />
  <input class="text" id="message" type="text" style="width:369px;" />
  <input id="send" type="submit" value="Post it!" />
</form>
<div class="content"><ul id="directLinks"></ul></div>
<script src="_js/chat.js"></script>
