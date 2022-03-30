<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Tienne&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
   <title>Contact Form</title>
 </head>

 

 <body class="contact">

 <header>
    <div class="tablet-desk">
    <figure>
     <img src="jpslogo3.jpg" alt="My Logo">    
     </figure>
     
    </div> 
    </header>

 <div id="form">

<h2>Let's keep in touch!!</h2>

<form action="review.php" method="post" id="input_form" class="forminfo">

<!-- input fields for form  -->

<fieldset>
			<legend>Contact Information</legend>
			<label for="fName">First Name:</label>
			<input type="text" name="fName" id="fName" required>

			<label for="lName">Last Name:</label>
			<input type="text" name="lName" id="lName" required>

			<label for="email">Email:</label>
			<input type="email" name="email" id="email" required>

			<label for="phone">Phone:</label>
			<input type="tel" id="phone" name="phone" placeholder="123-456-6789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
       required> 
</fieldset>

<fieldset>
			<!-- <legend>Additional Input</legend>
			<label for="reference">Do you have a question or comment for us?</label>
			<select name="reference" id="reference">
			  <option value="question">Constructive Question</option>
			  <option value="feedback">Positive Feedback</option>
			  <option value="other">Other Compliments</option>
			</select> -->

			<label for="comment">Please provide a comment or question below</label>
			<textarea id="comment" name="comment" rows="5" cols="35"></textarea>
</fieldset>

<input type="submit" id="submit" value="Submit" type="submit" name="feedback">
</div>
</body>
  