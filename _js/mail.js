$(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });

  $(".button").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error').hide();

    var body = $("#message").val();
    if (body == "") {
      $("label#message_error").show();
      $("#message").focus();
      return false;
    }

		var dataString = 'body=' + body;
		//alert (dataString);return false;

		$.ajax({
      type: "POST",
      url: "_php/mail.php",
      data: dataString,
      success: function() {
        $('#contact_form').html("<div id='message'></div>");
        $('#contactForm').html("<h3>Response Submited!</h3>")
        .hide()
        .fadeIn(1500, function() {
          $('#contactForm').append("<h3>yup!</h3>");
        });
      }
     });
    return false;
	});
});
//runOnLoad(function(){
//  $("input#name").select().focus();
//});
