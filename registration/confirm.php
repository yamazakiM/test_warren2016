---
title: location
layout: default
---
<!-- MAIN CONTENT -->
<div id="main_content_wrap" class="outer">
  <section id="main_content" class="inner">
    <h3 id="location">Confirmation of Registration for Warren Workshop VI 2016</h3>
    <hr>
<div class="divLayoutContentMain">	
<p>Please check the followoing contents.</p>
<?php 
function pr($string){
	if(empty($string)){
		return;
	}
	echo(htmlspecialchars($string,ENT_QUOTES));
	
}

$is_error=false;

echo('<ul>');

if(empty($_REQUEST["attendance"])){
	echo('<li>Item is not selected.</li>');
	$is_error=true;
}

if(empty($_REQUEST["dietaryRestrictions"])){
	echo('<li>Dietary restrictions is not entered.</li>');
	$is_error=true;
}


if(empty($_REQUEST["lastName"])){
	echo('<li>Last Name is not entered.</li>');
	$is_error=true;
}


if(empty($_REQUEST["fistName"])){
	echo('<li>First Name is not entered.</li>');
	$is_error=true;

}


if(empty($_REQUEST["gender"])){
	echo('<li>Gender is not selected.</li>');
	$is_error=true;
}


if(empty($_REQUEST["occupation"])){
	echo('<li>Occupation is not selected.</li>');
	$is_error=true;
}


if(empty($_REQUEST["affiliation"])){
	echo('<li>Affiliation is not entered.</li>');
	$is_error=true;

}

if(empty($_REQUEST["businessAddress"])){
	echo('<li>Business Address is not entered.</li>');
	$is_error=true;

}


if(empty($_REQUEST["city"])){
	echo('<li>City is not entered.</li>');
	$is_error=true;
}


if(empty($_REQUEST["state"])){
	echo('<li>State / Province is not entered.</li>');
	$is_error=true;
}


if(empty($_REQUEST["country"])){
	echo('<li>Country is not entered.</li>');
	$is_error=true;

}

if(empty($_REQUEST["postal"])){
	echo('<li>Postal / Zip Code is not entered.</li>');
	$is_error=true;

}

if(empty($_REQUEST["phoneNumber"])){
	echo('<li>Phone Number is not entered.</li>');
	$is_error=true;

}

if(empty($_REQUEST["email"])){
	echo('<li>E-mail Address is not entered.</li>');
	$is_error=true;

}

if(empty($_REQUEST["confirmEmail"])){
	echo('<li>E-mail address for confirmation is not entered.</li>');
	$is_error=true;

}

if(empty($_REQUEST["visa"])){
	echo('<li>Item is not selected.</li>');
	$is_error=true;

}

echo('</ul>');

?>
<table>
<tr><th>1. Attendance<span class="asterisk">*</span></th><td><?php pr($_REQUEST["attendance"]); ?></td></tr>
<tr><th>&nbsp;&nbsp;&nbsp;Dietary Restrictions</th><td><?php pr($_REQUEST["dietaryRestrictions"]); ?></td></tr>
<tr><th>2. Last Name<span class="asterisk">*</span></th><td><?php echo pr($_REQUEST["lastName"]); ?></td></tr>
<tr><th>3. Middle Name</th><td><?php echo pr($_REQUEST["middleName"]); ?></td></tr>
<tr><th>4. First Name<span class="asterisk">*</span></th><td><?php echo pr($_REQUEST["firstName"]); ?></td></tr>
<tr><th>5. Gender<span class="asterisk">*</span></th><td><?php pr($_REQUEST["gender"]); ?></td></tr>
<tr><th>6. Occupation<tr><th><span class="asterisk">*</span></th><td><?php echo pr($_REQUEST["occupation"]); ?></td></tr>cupation<span class="asterisk">*</span></th><td><?php pr($_REQUEST["occupation"]); ?></td></tr>
<tr><th>&nbsp;&nbsp;&nbsp;Occupation Detail</th><td><?php pr($_REQUEST["occupationDetail"]); ?></td></tr>
<tr><th>7. Affiliation<span class="asterisk">*</span></th><td><?php echo($_REQUEST["affiliation"]); ?></td>
<tr><th>8. Business Address<span class="asterisk">*</span></th><td><?php echo pr($_REQUEST["businessAddress"]); ?></td></tr>
<tr><th>9. City<span class="asterisk">*</span></th><td><?php echo pr($_REQUEST["city"]); ?></td></tr>
<tr><th>10. State / Provance<span class="asterisk">*</span></th><td><?php echo pr($_REQUEST["state"]); ?></td></tr>
<tr><th>11. Country<span class="asterisk">*</span></th><td><?php echo pr($_REQUEST["country"]); ?></td></tr>
<tr><th>12. Postal / Zip Code<span class="asterisk">*</span></th><td><?php echo pr($_REQUEST["postal"]); ?></td></tr>
<tr><th>13. Phone Number<span class="asterisk">*</span></th><td><?php echo pr(implode( "、", $_REQUEST["phoneNumber"])); ?></td></tr>
<tr><th>14. E-mail Address<span class="asterisk">*</span></th><td><?php echo pr($_REQUEST["email"]); ?></td></tr>
<tr><th>&nbsp;&nbsp;&nbsp;Confirm E-mail Adsdres<span class="asterisk">*</span></th><td><?php echo pr($_REQUEST["confirmEmail"]); ?></td></tr>
<tr><th>15. Do you need "Letter of Guarantee" to acquire a visa to enter Japan? <span class="asterisk">*</span></th><td><?php pr($_REQUEST["visa"]); ?></td></tr>
</table>

<form action="thanks.php" name="confirm_form"　method="post">
<input type="hidden" name="attendance" value="<?php echo pr(htmlspecialchars( implode( "、", $_REQUEST["attendance"]),ENT_QUOTES)); ?>">
<input type="hidden" name="dietaryRestrictions" value="<?php echo pr(htmlspecialchars($_REQUEST["dietaryRestrictions"],ENT_QUOTES)); ?>">
<input type="hidden" name="lastName" value="<?php echo pr(htmlspecialchars($_REQUEST["lastName"],ENT_QUOTES)); ?>">
<input type="hidden" name="middleName" value="<?php echo pr(htmlspecialchars($_REQUEST["middleName"],ENT_QUOTES)); ?>">
<input type="hidden" name="firstName" value="<?php echo pr(htmlspecialchars($_REQUEST["firstName"],ENT_QUOTES)); ?>">
<input type="hidden" name="gender" value="<?php echo pr(htmlspecialchars($_REQUEST["gender"],ENT_QUOTES)); ?>">
<input type="hidden" name="occupation" value="<?php echo pr(htmlspecialchars( implode( "、", $_REQUEST["occupation"]),ENT_QUOTES)); ?>">
<input type="hidden" name="occupationDetail" value="<?php echo pr(htmlspecialchars($_REQUEST["occupationDetail"],ENT_QUOTES)); ?>">
<input type="hidden" name="affiliation" value="<?php echo pr(htmlspecialchars($_REQUEST["affiliation"],ENT_QUOTES)); ?>">
<input type="hidden" name="businessAddress" value="<?php echo pr(htmlspecialchars($_REQUEST["businessAddress"],ENT_QUOTES)); ?>">
<input type="hidden" name="city" value="<?php echo pr(htmlspecialchars($_REQUEST["city"],ENT_QUOTES)); ?>">
<input type="hidden" name="state" value="<?php echo pr(htmlspecialchars($_REQUEST["state"],ENT_QUOTES)); ?>">
<input type="hidden" name="country" value="<?php echo pr(htmlspecialchars($_REQUEST["country"],ENT_QUOTES)); ?>">
<input type="hidden" name="postal" value="<?php echo pr(htmlspecialchars($_REQUEST["postal"],ENT_QUOTES)); ?>">
<input type="hidden" name="phoneNumber" value="<?php echo pr(htmlspecialchars($_REQUEST["phoneNumber"],ENT_QUOTES)); ?>">
<input type="hidden" name="email" value="<?php echo pr(htmlspecialchars($_REQUEST["email"],ENT_QUOTES)); ?>">
<input type="hidden" name="onfirmEmail" value="<?php echo pr(htmlspecialchars($_REQUEST["confirmEmail"],ENT_QUOTES)); ?>">
<input type="hidden" name="visa value="<?php echo pr(htmlspecialchars( implode( "、", $_REQUEST["visa"]),ENT_QUOTES)); ?>">


<?php
echo('<input type="button" onClick="history.back()" value="Back">');

if($is_error == false){
	echo('<input type="submit" value="Submit">');
}
?>
</form>
</div>
<script src="index.js"></script>
</body>
</html>
