$("button#submitRegister").click( function() {
 
    $.post("register.php",$("#registerForm :input").serializeArray(),
			function(data) {
			  $("div#ack2").html(data);
			});
 
	$("#registerForm").submit( function() {
	   return false;	
	});
 
});

$("button#submit").click( function() {
 
  if( $("#email").val() == "" || $("#password").val() == "" )
  	$("div#ack").html("Please enter both username and password");
  else
  	$.post("login.php",$("#myForm :input").serializeArray(),
			function(data) {
			  $("div#ack").html(data);
			});
 
	$("#myForm").submit( function() {
	   return false;	
	});
 
});

$("button#submit1").click( function() {
 
  if( $("#email").val() == "" || $("#password").val() == "" )
  	$("div#ack").html("Please enter both username and password");
  else
  	$.post("login.php",$("#myForm :input").serializeArray(),
			function(data) {
			  $("div#ack").html(data);
			});
 
	$("#myForm").submit( function() {
	   return false;	
	});
	window.location = "../../myaccount.html";
	reload();
 
});

$("button#saveSubmit").click( function() {
  $.post("update_data.php",$("#saveForm :input").serializeArray(),
			function(data) {
			  $("div#error_div").html(data);
			});
 
	$("#saveForm").submit( function() {
	   return false;	
	});
	
 
});

