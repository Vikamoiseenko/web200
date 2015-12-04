<?php include('includes/header.php'); ?>
<section class="contact">
<h2>Contact Us</h2>
<h6>Suspendisse quis mi et quam ornare semper nec sit amet nibh. Aenean in volutpat diam. Pellentesque at nibh quam, id fringilla turpis. Phasellus tincidunt, justo et mollis tempor, est tellus varius ipsum, et tempor libero dolor vel turpis. Vivamus dignissim sagittis est, quis scelerisque massa facilisis quis. </h6>
<div class="clear">&nbsp;</div>
<?php
if ( isset ($_POST['submit']) ) { // if the submit button is clicked...
$mailMesage = ("{$_POST['name']} {$_POST['email']} wrote: \n\n{$_POST['message']}"); // message of the email
$mailSubject = "{$_POST['subject']}"; // subject of the email
$mailRecipient = "moiseenkovika@gmail.com"; // destination email address
$mailSender = "From: {$_POST['email']}"; // the mail sender
mail ($mailRecipient, $mailSubject , $mailMesage, $mailSender); // function to send the email
print ("<p>Thank you for contacting me, <strong>{$_POST['name']}</strong>!</p>\n"); // notice that thanks the user
}
?>
<!-- Begin Contact Form -->
<form action="contact.php" method="post" name="contact">
<label for="name">Name:</label>
<input name="name" type="text" required="required">
<label for="email">Email:</label>
<input name="email" type="email" required="required">
<label for="subject">Subject:</label>
<select name="subject">
<option value="General Inquiry" selected="selected">General Inquiry</option>
<option value="Specific Inquiry">Specific Inquiry</option>
<option value="Stoopid Inquiry">Stoopid Inquiry</option>
</select>
<label for="message">Message:</label>
<textarea name="message" cols="40" rows="5" required></textarea>
<input name="submit" type="submit" value="Submit Message">
</form>
<!-- End Contact Form -->
</section>

</div> <!-- closed content -->

<div class="clear">&nbsp;</div>
<div id="social">
<h5>Follow Us</h5>
<div id="social_list">
<a href="index.html"><img class="col4" src="images/facebook.png" width="67" height="62" alt="Tulip Town" /></a>
<a href="index.html"><img class="col4" src="images/instagram.png" width="67" height="62" alt="Tulip Town" /></a>
<a href="index.html"><img class="col4" src="images/google.png" width="67" height="62" alt="Tulip Town" /></a>
<?php include('includes/footer.php'); ?>
