<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>

	<?php endwhile; // end of the loop. ?>

<!-- end of main content -->
            </div>
        </div>
    </div>
</div>

<!-- start of secondary content -->
<script type="text/javascript">
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
</script>



<div class="main-content text-left secondary" id="secondary">
	<div class="container">
		<div class="row">
        <div class="col-md-2"> &nbsp; </div>
			<div id="content" class="main-content-inner col-md-8" style="padding-top:20%;">
            
            <form><label>To whom would you like to send a message?</label><input id="input1" class="first" placeholder="Their Name">
                        
            <label>How would you like us to contact <input type="text" class="gitit second" placeholder="them?" disabled></label>

            </form>
                        <div class="row"> 
            <?php /*?>    <div class="col-xs-4 nopadding text-center"><button type="button" class="btn btn-primary btn-sm" onClick="MM_showHideLayers('collapseEmail','','show','collapseText','','hide','collapseCall','','hide')">Email</button></div><?php */?>
                <div class="col-xs-6 nopadding text-center"><button type="button" class="btn btn-primary btn-sm center-text" onClick="MM_showHideLayers('collapseEmail','','hide','collapseText','','show','collapseCall','','hide')">Text/SMS</button></div>
                
                <div class="col-xs-6 nopadding text-center"><button type="button" class="btn btn-primary btn-sm" onClick="MM_showHideLayers('collapseEmail','','hide','collapseText','','hide','collapseCall','','show')">Phone Call</button></div>
                </div>
            </div>
            <div class="col-md-2"> &nbsp; </div>
            </div>
            <div id="options">

<div class="row">
<div class="col-md-2"> &nbsp; </div>
<div class="col-md-8">
<style>
#collapseEmail, #collapseText, #collapseCall{
	visibility:hidden;
	position:absolute;
	left:0;
	padding:15px;
	width:100%;
}
</style>

<?php /*?><div id="collapseEmail" class="text-left">

  <?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form 1"]' ); ?>
  
  </div><?php */?>

<div id="collapseText" class="text-left">
  <p class="mini">TEXT MESSAGES ARE 100% FREE - carrier message rates may apply</p>
<?php

/**
 * This script requires a Twilio Account and the Twilio PHP Helper Library,
 * which can be found at http://www.twilio.com/docs/libraries or directly
 * downloaded from Github here: https://github.com/twilio/twilio-php .
 * 
 * Once you have downloaded and unzipped the PHP helper library, copy the
 * entire 'Services' folder into the same folder that contains this file.
 */

require('wsms/Services/Twilio.php');

// Credentials to connect to Twilio
$accountSid = 'AC403e38aa793c8e77f4e30b55f63d29c4';
$authToken = '4384bdd7ce6cebc921f87910a2935447';

// Twilio number the SMS message will be from. You can only send SMS messages from a number purchased from Twilio.
$sending_number = '+17146042904';

// Create a connection to Twilio's API with credentials
$client = new Services_Twilio($accountSid, $authToken);

// Actually send the number. This is where the magic happens!
if(!empty($_POST['phone']) && !empty($_POST['body'])){
	$message = $client->account->sms_messages->create(
	  $sending_number, // From a valid Twilio number
	  $_POST['phone'], // Text this number
	  $_POST['body']
	);
}

if(!empty($_POST['phone']) && !empty($_POST['body'])){
	$message = $client->account->sms_messages->create(
	  $sending_number, // From a valid Twilio number
	  $_POST['phone'], // Text this number
	  $_POST['followup']
	);
}

if($message->sid): 
// This content will appear conditionally when the form is submitted
?>
<script type="text/javascript">
<!--
window.location = "http://www.iknowsomeone.help/?page_id=18"
//-->
</script>
<p>Message Sent. Would you like to send another?</p>

<?php endif; ?>

<form action="#" method="post">
	<label for="phone">What's the best phone number to reach <input type="text" class="gitit second" placeholder="them?" disabled></label>
	<input type="tel" name="phone" id="phone" placeholder="(000) 000-0000" required/><br/>
	<label for="body" >What would you like to say to them?</label>
	<textarea name="body" maxlength="160" id="body" placeholder="Up to 160 characters." required></textarea><p>&nbsp;<br/></p>
    <input type="hidden" name="followup" id="followup" value="Someone cares about you and sent this anonymous message through www.iknowsomeone.help. Struggle w/addiction? Call 866-595-5863 or click http://goo.gl/zChNA2">
	<input type="submit" value="Send SMS" />
</form>

  </div>
  
<div id="collapseCall" class="text-left" style="padding-top:0;">
  
  <p class="mini2" align="center" style="margin-top:0;">To better help<br /><input style="font-family: 'Gotham', 'Helvetica', sans-serif; margin-bottom:0; text-align:center; width:200px; color: #FFFFFF;" type="text" class="gitit2 second" placeholder="them" disabled><br /> please help us learn more about your relationship. All information will remain confidential. <br /><br /></p>
<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" id="w2l-form">
<input type=hidden name="oid" value="00D61000000J6Ge">
<input type=hidden name="retURL" value="http://www.iknowsomeone.help/?page_id=18">

<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
<!--  these lines if you wish to test in debug mode.                          -->
 <!--  ----------------------------------------------------------------------  -->
<label for="first_name">What is your first name?</label>
<input id="first_name" name="first_name" type="text" />

<input value="unknown<?php
$date = date_create();
echo date_timestamp_get($date);
?>@blvdcenters.com" id="email" maxlength="80" name="email" size="20" type="hidden" />

<label for="00N61000005HThg">What timezone are you in?</label>
<select class="form-control" id="00N61000005HThg" name="00N61000005HThg" title="Timezone"><option value="PST">PST</option>
<option value="MST">MST</option>
<option value="CST">CST</option>
<option value="EST">EST</option>
</select>


<label for="phone">What is your phone number?</label>
<input  id="phone" maxlength="40" name="phone" size="20" type="text" required/>

<input id="00N61000005HThW" name="00N61000005HThW" value="Family Member" type="hidden"/>

<!-- gclid -->
<input  id="00N61000006nbQd" name="00N61000006nbQd" type="hidden" />
<!--lead type -->
<input  id="00N61000005HWFe" maxlength="255" name="00N61000005HWFe" size="20" type="hidden" value="Form Submission" />
<!-- source -->
<input  id="00N61000006nawX" maxlength="255" name="00N61000006nawX" size="20" type="hidden" value="IKnowSomeone" />
<!-- medium -->
<input  id="00N61000006nb5M" maxlength="255" name="00N61000006nb5M" size="20" type="hidden" value="Organic" />
<!-- company -->
<input  id="company" maxlength="255" name="company" size="20" type="hidden" value="IKnowSomeone" />

<p class="mini2" align="center" style="margin-top:0;">One of our counsellors will contact you shortly</p>

<input type="submit" name="submit" value="Send">

</form>
  
  </div>
  </div>
  <div class="col-md-2"> &nbsp; </div>
  </div>

<?php get_footer(); ?>