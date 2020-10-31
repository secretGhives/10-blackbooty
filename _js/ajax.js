$(document).ready(function(){
	//References
	var loading = $(".showingLoader");
	var container = $(".loadHere");
	var link;

	//Manage click events
	$("a.ajax").click(function(e){
		//prevent default action
		e.preventDefault();

		//show the loading bar
		showLoading();
		container.hide();

		//define the target and get content then load it to container
		link = $(this).attr("href");
		$.ajax({
			url: link,
			dataType: "html",
			success: function(data) {
				container.html(data);
				hideLoading();
				container.show();
			},
			error: function() {
				alert("There was a error on the page");
			}
		});
		//container.load(link, hideLoading);
		//container.fadeIn();
	});

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
});
