<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "tko@alumni.princeton.edu";
     
    $email_subject = "t:Ko Design MESSAGE";
     
     
    function died($error) {
        // your error code can go here
        echo "The following error(s) occurred with your inquiry: ";
        echo $error."<br /><br />";
        echo "Please click back and re-submit your request.  Thank you!<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- place your own success html below -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>t:Ko Design | Contact</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="floom/floom.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" src="mootools-1.2.2-core.js"></script>
<script type="text/javascript" charset="utf-8" src="mootools-1.2.2.2-more.js"></script>
<script type="text/javascript" charset="utf-8" src="floom/floom-1.0.js"></script>
<script type="text/javascript" charset="utf-8" src="floom/floom-1.0-slides.js"></script>
<SCRIPT LANGUAGE="JavaScript">

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
var submitcount=0;

function reset() {
document.emailform.name.value="";
document.emailform.email.value="";
document.emailform.comments.value="";
}

function checkFields() {                       // field validation -
if ( (document.emailform.name.value=="")  ||   // checks if fields are blank.
     (document.emailform.email.value=="") ||   // More validation scripts at
     (document.emailform.comments.value=="") ) // forms.javascriptsource.com
   {
   alert("Missing fields.  Please check your entry and re-submit this form.");
   }

else 
   {
   if (submitcount == 0)
      {
      submitcount++;
	  reset();
	  alert("Submitted. Thank you for your feedback and have a great day!");
      }
   else 
      {
      alert("Feedback already been submitted.  Thanks!");
      }
   }
}


//  End -->
</script>
</head>
<body OnLoad="reset()">
<div id="wrapper">
	<div id="header">
		<div id="menu">
			<ul>
				<li><a href="index.xhtml">home</a></li>
				<li><a href="portfolio.xhtml">portfolio</a></li>
				<li class="current_page_item"><a href="contact.xhtml">contact</a></li>
			</ul>
		</div>
	<!-- end #menu -->
	</div>
	<!-- end #header -->
	
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="blinds-cont">
			<div id="blinds"></div>
		</div>
		<div class="content-col-1of3">
				<h1 class="title"><br>Contact Me</h1>
				<p>Thanks for your inquiry!  I will be in touch shortly.</p>
				<a href="index.xhtml" style="text-align: center;">Home</a>
		</div>
		<!-- end #content -->
	<div style="clear: both; height: 0px;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>&copy;2008-2012 | Powered by <a href="http://mootools.net/plugins/p/floom">floom</a> and <a href="http://galleria.io/">galleria</a> | <a href="mailto:tko@alumni.princeton.edu">t:Ko Design</a>.
</div>
<!-- end #footer -->
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
	var sc_project=8070624; 
	var sc_invisible=1; 
	var sc_security="f9d9f653"; 
</script>
<script type="text/javascript" src="http://www.statcounter.com/counter/counter.js"></script>
<noscript>
	<div class="statcounter">
		<a title="statistics for vBulletin" href="http://statcounter.com/vbulletin/" target="_blank">
		<img class="statcounter" src="http://c.statcounter.com/8070624/0/f9d9f653/1/" alt="statistics for vBulletin" />
		</a>
	</div>
</noscript>
<!-- End of StatCounter Code for Default Guide -->
</body>
<?php
}
die();
?>