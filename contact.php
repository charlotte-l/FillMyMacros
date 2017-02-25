<!DOCTYPE html> 

<html>
<head>
<title>Fill My Macros - About</title>
<meta name="description" content="Your Description" />
<meta charset="utf-8">
<link rel="image_src" href="http://stackoverflow.com/images/logo.gif" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" /> <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120-precomposed.png" />
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152-precomposed.png" />
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">

</head>

<body>
<link href='//fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
<script src="https://use.fontawesome.com/baf4afef61.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<div class="Container" style="height:55vh; margin-bottom: -16px;">

<div class="TopMenuHolder">
<div class="Row" id="menurow">
<div class="Column" id="menu1"><a href="http://www.fillmymacros.com/site.php"><i class="fa fa-home" aria-hidden="true">&nbsp; Home</a></i></div>
<div class="Column" id="menu2"><a href="http://www.fillmymacros.com/about.php"><i class="fa fa-info" aria-hidden="true">&nbsp; About</a></i></div>
<div class="Column" id="menu4"><a href="http://www.fillmymacros.com/blog.php"><i class="fa fa-pencil-square-o" aria-hidden="true">&nbsp; Blog</a></i></div>
<div class="Column" id="menu3"><a href="http://www.fillmymacros.com/contact.php"><i class="fa fa-comments-o" aria-hidden="true">&nbsp; Contact</a></i></div>
</div>
</div>

<div style="padding-bottom:0.25em;margin: 0 auto;display:block;text-align:center;vertical-align: middle;">
<p id="contactTitle" style="font-family:'Dancing Script';font-size:13vh;color: #fff;text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);-webkit-margin-before: 1em;-webkit-margin-after: 5%;">Get In Touch</p>
</div>

</div>

<div id="about" style="height:100%;">

<div style="text-align:center; font-size:3vh; padding-top:5%; padding-bottom:3%;">
<p>Got a burning question or excellent suggestion? Drop us a line...</p>
</div>

<div id="form" style="width:400px; margin:0 auto;">
<form id="contactform" action="contact.php#result" method="POST">
<p style="text-align:left">Name</p>
<input style="border-radius: 0.25em; border-style: solid; border-width: 1px; padding:10px;" maxlength="30" id="name" name="name" size="50" type="text" width="50" />
<p style="text-align:left">Email</p>
<input style="border-radius: 0.25em; border-style: solid; border-width: 1px; padding:10px;" maxlength="30" id="email" name="email" size="50" type="email" width="50" />
<p style="text-align:left">Message</p>
<textarea rows="10" cols="52" form="contactform" style="width:330px; font-family:inherit; border-radius: 0.25em; border-style: solid; border-width: 1px; padding:10px;" maxlength="1000" name="message" id="message"></textarea>
<p style="display:none;">Leave this empty: <input type="text" name="url" /></p>

<div id="spacing" style="height:4vh">
</div>
<div style="text-align:center; width:370px">
<input class="Button" style="margin:0 auto;" type="submit" value="Send it">
</div>
<div id="spacing" style="height:4vh">
</div>
</form>
</div>

<script>
$('#form').submit(function(e) {
    if ($.trim($("#email, #name").val()) === "") {
			e.preventDefault();
			document.getElementById('result').innerHTML = 
			'<div class="isa_error" id="updated" style="display:none">' +
			'<i class="fa fa-times-circle-o"></i>' +
			'<span>Make sure you tell us who you are!</span>' +
			'</div>';
			$("#updated").fadeIn("slow");
			document.body.scrollIntoView(false);
			$("#updated").delay(2000).fadeOut("slow");
    }
});
</script>

<div id="result" style="color:#fff; padding-top:10vh; font-size:2.5vh; text-align:center;">
<?php
function check_input($data)
 {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

// if the url field is empty 
if(isset($_POST['url']) && $_POST['url'] == '') {
	
	if($_POST["message"] == "" || $_POST["name"] == "" || $_POST["email"] == "") {
		echo "here";
		goto theend;
	}
	
	?>
	<script>
	document.getElementById('form').style.display = 'none';
	document.getElementById('about').style.height = '55vh !important';
	</script>
	
	<?php
	
	 $name=check_input($_POST['name']);
	 $email=check_input($_POST['email']);
	 $message=check_input($_POST['message']);
	
     $myemail = 'charlotte@fillmymacros.com';
     // prepare a "pretty" version of the message
     $body = "This is the form that was just submitted:     
	 Name:  $_POST[name]
	 E-Mail: $_POST[email]
	 Message: $_POST[message]"; 

     // Use the submitters email if they supplied one     
     // (and it isn't trying to hack your form).     
     // Otherwise send from your email address.     

     if( $email && !preg_match( "/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email ) && !preg_match( "/[\r\n]/", $name ) ) {
         $headers = "From: $myemail" . "\r\n" . "Reply-To: $email";
     } else {
         $headers = "From: $myemail"; 
     }
	 
     // finally, send the message     
     if (mail($myemail, 'Contact Form', $body, $headers )) {
		 echo "Thanks for reaching out! We'll be in touch soon...";
	 }	 
} 
// otherwise, let the spammer think that they got their message through
theend:
?>

</div>

</div>

<div id="bottombar">
<div style="width:2%;"></div>
<div style="display:table-cell; width:32%;">
<span>&copy; 2017 Fill My Macros</span>
</div>
<div style="display:table-cell; width:32%; text-align: -webkit-center; text-align:center;">
<span><a style="padding: 0px 10px;" href="http://www.fillmymacros.com/site.php">Home</a> &nbsp; <a style="padding: 0px 10px;" href="http://www.fillmymacros.com/about.php">About</a> &nbsp; <a style="padding: 0px 10px;" href="http://www.fillmymacros.com/blog.php">Blog</a> &nbsp; <a style="padding: 0px 10px;" href="http://www.fillmymacros.com/contact.php">Contact</a></span>
</div>
<div style="display:table-cell; width: 32%; text-align: right;">
<span> Follow us: <i class="fa fa-facebook" aria-hidden="true"></i> &nbsp; <i class="fa fa-twitter" aria-hidden="true"></i></span>
</div>
<div style="width:2%;"></div>
</div>

</body>

</html>