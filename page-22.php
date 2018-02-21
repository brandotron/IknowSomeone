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
	
    <div class="row">
	<div class="col-md-2"> &nbsp; </div>	
    <div class="col-md-8" style="padding-top:20%;"> 
                <p class="section-heading" style="color:#FFFFFF;">CALL TO SPEAK WITH AN ADDICTION EXPERT</p>
                <a href="tel:+18665749975" class="btn btn-primary btn-xl" >(866) 574-9975</a>
                
                <p style="font-size:14px;color:#FFFFFF;">&#128274; 100% Confidential </p><p style="color:#7ee8d0;">- OR -</p><p>Your can request a call by completing the form below:</p><p>&nbsp;</p>
                                  
    </div>	
    <div class="col-md-2"> &nbsp; </div>	
    </div>
    <div class="row">
        <div class="col-md-2"> &nbsp; </div>
			<div id="content" class="main-content-inner col-md-8 text-left">

            <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" id="w2l-form">
<input type=hidden name="oid" value="00D61000000J6Ge">
<input type=hidden name="retURL" value="http://www.iknowsomeone.help/?page_id=18">

<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
<!--  these lines if you wish to test in debug mode.                          -->
 <!--  ----------------------------------------------------------------------  -->
<label for="first_name">First Name</label>
<input class="second" id="first_name" name="first_name" type="text" required/>

<label for="last_name">Last Name</label>
<input class="second" id="last_name" name="last_name" type="text" required/>

<label for="email">Email</label>
<input id="email" maxlength="80" name="email" size="20" type="email" />

<label for="00N61000005HThg">Timezone</label>
<select class="form-control" id="00N61000005HThg" name="00N61000005HThg" title="Timezone"><option value="PST">PST</option>
<option value="MST">MST</option>
<option value="CST">CST</option>
<option value="EST">EST</option>
</select>


<label for="phone">Phone Number</label>
<input  id="phone" maxlength="40" name="phone" size="20" type="text" required/>

<input id="00N61000005HThW" name="00N61000005HThW" value="Self" type="hidden"/>

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



<input type="submit" name="submit" value="Send">

</form>
            
            </div>
            <div class="col-md-2"> &nbsp; </div>

</div>
<?php get_footer(); ?>
