﻿/***************************/
//@Author: Adrian "yEnS" Mato Gondelle & Ivan Guardado Castro
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!					
/***************************/

$(document).ready(function(){
	//global vars
	var inputUser = $("#nick");
	var inputMessage = $("#message");
	var loading = $(".showingLoader");
	var messageList = $(".content > ul");
	
	//functions
	function updateShoutbox(){
		//just for the fade effect
		messageList.hide();
		showLoading();
		//send the post to shoutbox.php
		$.ajax({
			type: "POST", url: "_php/chat.php", data: "action=update",
			complete: function(data){
				hideLoading();
				messageList.html(data.responseText);
				messageList.fadeIn(2000);
			}
		});
	}
	//check if all fields are filled
	function checkForm(){
		if(inputUser.attr("value") && inputMessage.attr("value"))
			return true;
		else
			return false;
	}
	
	//Load for the first time the shoutbox data
	updateShoutbox();

	//show loading bar
	function showLoading(){
		loading
		  .css({background:"url(_img/androidPirateR.png) no-repeat 50% 50%"});
	}
	//hide loading bar
	function hideLoading(){
		loading
		  .css({background:"url(_img/androidPirate.png) no-repeat 50% 50%"});
	};
	
	//on submit event
	$("#form").submit(function(){
		if(checkForm()){
			var nick = inputUser.attr("value");
			var message = inputMessage.attr("value");
			//we deactivate submit button while sending
			$("#send").attr({ disabled:true, value:"Posting..." });
			$("#send").blur();
			//send the post to shoutbox.php
			$.ajax({
				type: "POST", url: "_php/chat.php", data: "action=insert&nick=" + nick + "&message=" + message,
				complete: function(data){
					messageList.html(data.responseText);
					updateShoutbox();
					//reactivate the send button
					$("#send").attr({ disabled:false, value:"Post it!" });
					//clear input field
					$("#message").val(" ");
				}
			 });
		}
		else alert("Please fill all fields!");
		//we prevent the refresh of the page after submitting the form
		return false;
	});
});
